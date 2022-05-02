<?php

namespace Bloock\Proof\Entity;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Shared\Utils;
use Exception;

/**
 * Proof is the object in charge of storing all data necessary to compute
 * a data integrity check.
 */
class Proof implements \JsonSerializable
{
    public $leaves;
    public $nodes;
    public $depth;
    public $bitmap;
    public $anchor;

    public function __construct(array $leaves, array $nodes, string $depth, string $bitmap, mixed $anchor = null)
    {
        $this->leaves = $leaves;
        $this->nodes = $nodes;
        $this->depth = $depth;
        $this->bitmap = $bitmap;
        if (isset($anchor) && $anchor instanceof Anchor) {
            $this->anchor = $anchor;
        } else if (isset($anchor)) {
            $this->anchor = new Anchor($anchor['id'], $anchor['blockRoots'], $anchor['networks'], $anchor['root'], $anchor['status']);
        }
    }

    /**
     * Checks whether the Proof was build with valid parameters or not.
     *
     * @param  Proof Proof to validate.
     * @return bool A Boolean that returns True if the proof is valid, False if not.
     */
    public static function isValid(Proof $proof): bool
    {
        if ($proof instanceof Proof) {
            try {
                foreach ($proof->leaves as $leaf) {
                    if (!Utils::isHex($leaf) || strlen($leaf) != 64) {
                        return false;
                    }
                }

                foreach ($proof->nodes as $leaf) {
                    if (!Utils::isHex($leaf) || strlen($leaf) != 64) {
                        return false;
                    }
                }

                if (strlen($proof->depth) != (count($proof->leaves) + count($proof->nodes)) * 4 && Utils::isHex($proof->depth)) {
                    return false;
                }

                $nElements = count($proof->leaves) + count($proof->nodes);
                if (strlen($proof->depth) != $nElements * 4) {
                    return false;
                }

                if (floor(strlen($proof->bitmap) / 2) < floor(($nElements + 8 - ($nElements % 8)) / 8)) {
                    return false;
                }

                return true;
            } catch (Exception $_) {
                return false;
            }
        }

        return false;
    }

    public function jsonSerialize(): mixed
    {
        return array(
            'leaves' => $this->leaves,
            'nodes' => $this->nodes,
            'depth' => $this->depth,
            'bitmap' => $this->bitmap,
            'anchor' => $this->anchor,
        );
    }
}
