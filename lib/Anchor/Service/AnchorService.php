<?php

namespace Bloock\Anchor\Service;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Anchor\Entity\Dto\AnchorRetrieveResponse;
use Bloock\Anchor\Entity\Exception\AnchorNotFoundException;
use Bloock\Anchor\Entity\Exception\TimeoutException;
use Bloock\Anchor\Entity\Exception\WaitAnchorTimeoutException;
use Bloock\Anchor\Repository\AnchorRepository;
use Bloock\Anchor\Repository\IAnchorRepository;
use Bloock\Anchor\Service\IAnchorService;
use Bloock\Config\Service\ConfigService;
use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\HttpClient;
use Bloock\Shared\Exception\InvalidArgumentException;
use Bloock\Shared\Utils;
use Exception;

final class AnchorService implements IAnchorService
{
    private $anchorRepository;
    private $configService;

    public function __construct(IAnchorRepository $anchorRepository, IConfigService $configService)
    {
        $this->anchorRepository = $anchorRepository;
        $this->configService = $configService;
    }

    public function getAnchor(int $id): Anchor
    {
        if (is_int($id) == false) {
            throw new InvalidArgumentException();
        }

        $anchor = $this->getAnchorRepository()->getAnchor($id);
        if ($anchor == null) {
            throw new AnchorNotFoundException();
        }

        return $anchor;
    }

    public function waitAnchor(int $id, int $timeout = 120000): Anchor
    {
        if (is_int($id) == false || is_int($timeout) == false) {
            throw new InvalidArgumentException();
        }

        $attempts = 0;
        $anchor = null;
        $now = new \DateTime();
        $start = $now->getTimestamp();
        $nextTry = $start + $this->getConfigService()->getConfiguration()->WAIT_MESSAGE_INTERVAL_DEFAULT;
        $timeoutTime = $start + $timeout;

        while (true) {
            try {
                $anchor = $this->getAnchor($id);
                if ($anchor->status == "Success") {
                    return $anchor;
                }

                $now = new \DateTime();
                $currentTime = $now->getTimestamp();

                if ($currentTime > $timeoutTime) {
                    throw new WaitAnchorTimeoutException();
                }

                Utils::sleep(1000);
            } catch (Exception $e) {
                $now = new \DateTime();
                $currentTime = $now->getTimestamp();
                while ($currentTime < $nextTry && $currentTime < $timeoutTime) {
                    Utils::sleep(200);
                    $now = new \DateTime();
                    $currentTime = $now->getTimestamp();
                }

                $nextTry += $attempts * $this->getConfigService()->getConfiguration()->WAIT_MESSAGE_INTERVAL_FACTOR + $this->getConfigService()->getConfiguration()->WAIT_MESSAGE_INTERVAL_DEFAULT;
                $attempts += 1;

                if ($currentTime >= $timeoutTime) {
                    throw new WaitAnchorTimeoutException();
                }
            }
        }
    }

    private function getAnchorRepository(): IAnchorRepository
    {
        return $this->anchorRepository;
    }

    private function getConfigService(): IConfigService
    {
        return $this->configService;
    }
}
