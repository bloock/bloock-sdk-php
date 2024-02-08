
***

# Documentation



This is an automatically generated documentation for **Documentation**.


## Namespaces


### \Bloock

#### Classes

| Class | Description |
|-------|-------------|
| [`Bloock`](./classes/Bloock/Bloock.md) | Provides a centralized configuration for the Bloock SDK library. For information about Bloock SDK in Go, see https://bloock.com.|




### \Bloock\Client

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthenticityClient`](./classes/Bloock/Client/AuthenticityClient.md) | Represents a client for interacting with the [Bloock Authenticity service](https://dashboard.bloock.com/login).|
| [`AvailabilityClient`](./classes/Bloock/Client/AvailabilityClient.md) | Represents a client for interacting with the [Bloock Availability service](https://dashboard.bloock.com/login).|
| [`EncryptionClient`](./classes/Bloock/Client/EncryptionClient.md) | Represents a client for interacting with the [Bloock Encryption service](https://dashboard.bloock.com/login).|
| [`IdentityClient`](./classes/Bloock/Client/IdentityClient.md) | Represents a client for interacting with the [Bloock Identity service](https://dashboard.bloock.com/login).|
| [`IdentityLegacyClient`](./classes/Bloock/Client/IdentityLegacyClient.md) | |
| [`IntegrityClient`](./classes/Bloock/Client/IntegrityClient.md) | Provides functionality to interact with the [Bloock Integrity service](https://dashboard.bloock.com/login).|
| [`KeyClient`](./classes/Bloock/Client/KeyClient.md) | Provides functionality to interact with the [Bloock Keys service](https://dashboard.bloock.com/login).|
| [`RecordBuilder`](./classes/Bloock/Client/RecordBuilder.md) | Assists in constructing records with various configurations.|
| [`RecordClient`](./classes/Bloock/Client/RecordClient.md) | Provides functionality for creating records using various data sources and to interact with the [Bloock Record service](https://dashboard.bloock.com/login).|
| [`WebhookClient`](./classes/Bloock/Client/WebhookClient.md) | Provides functionality for interacting with [Bloock webhooks](https://dashboard.bloock.com/login).|




### \Bloock\Config

#### Classes

| Class | Description |
|-------|-------------|
| [`Config`](./classes/Bloock/Config/Config.md) | |




### \Bloock\Entity\Authenticity

#### Classes

| Class | Description |
|-------|-------------|
| [`HashAlg`](./classes/Bloock/Entity/Authenticity/HashAlg.md) | Represents different hash algorithms.|
| [`Signature`](./classes/Bloock/Entity/Authenticity/Signature.md) | Represents a cryptographic signature along with additional metadata.|
| [`SignatureAlg`](./classes/Bloock/Entity/Authenticity/SignatureAlg.md) | Represents different signature algorithms.|
| [`SignatureHeaderJws`](./classes/Bloock/Entity/Authenticity/SignatureHeaderJws.md) | Represents the header of a JSON Web Signature (JWS). [RFC 7515](https://datatracker.ietf.org/doc/html/rfc7515).|
| [`SignatureJws`](./classes/Bloock/Entity/Authenticity/SignatureJws.md) | Represents a JSON Web Signature (JWS). [RFC 7515](https://datatracker.ietf.org/doc/html/rfc7515).|
| [`Signer`](./classes/Bloock/Entity/Authenticity/Signer.md) | Represents a signer with various key types and additional configurations.|




### \Bloock\Entity\Availability

#### Classes

| Class | Description |
|-------|-------------|
| [`HostedLoader`](./classes/Bloock/Entity/Availability/HostedLoader.md) | Represents a loader for hosted data availability.|
| [`HostedPublisher`](./classes/Bloock/Entity/Availability/HostedPublisher.md) | Represents a publisher for hosted data availability.|
| [`IpfsLoader`](./classes/Bloock/Entity/Availability/IpfsLoader.md) | Represents a loader for IPFS data availability.|
| [`IpfsPublisher`](./classes/Bloock/Entity/Availability/IpfsPublisher.md) | Represents a publisher for IPFS data availability.|
| [`LoaderArgs`](./classes/Bloock/Entity/Availability/LoaderArgs.md) | Represents the arguments for a data loader.|
| [`PublisherArgs`](./classes/Bloock/Entity/Availability/PublisherArgs.md) | Represents the arguments for a data publisher.|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Loader`](./classes/Bloock/Entity/Availability/Loader.md) | |
| [`Publisher`](./classes/Bloock/Entity/Availability/Publisher.md) | |



### \Bloock\Entity\Encryption

#### Classes

| Class | Description |
|-------|-------------|
| [`Encrypter`](./classes/Bloock/Entity/Encryption/Encrypter.md) | Represents an encryption configuration with various key types and access control.|
| [`EncryptionAlg`](./classes/Bloock/Entity/Encryption/EncryptionAlg.md) | Represents encryption algorithm types.|




### \Bloock\Entity\Identity

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./classes/Bloock/Entity/Identity/Attribute.md) | |
| [`AttributeDescriptor`](./classes/Bloock/Entity/Identity/AttributeDescriptor.md) | |
| [`BooleanAttribute`](./classes/Bloock/Entity/Identity/BooleanAttribute.md) | |
| [`BooleanAttributeDescriptor`](./classes/Bloock/Entity/Identity/BooleanAttributeDescriptor.md) | |
| [`Credential`](./classes/Bloock/Entity/Identity/Credential.md) | |
| [`CredentialBuilder`](./classes/Bloock/Entity/Identity/CredentialBuilder.md) | |
| [`CredentialOffer`](./classes/Bloock/Entity/Identity/CredentialOffer.md) | |
| [`CredentialOfferBody`](./classes/Bloock/Entity/Identity/CredentialOfferBody.md) | |
| [`CredentialProof`](./classes/Bloock/Entity/Identity/CredentialProof.md) | |
| [`CredentialReceipt`](./classes/Bloock/Entity/Identity/CredentialReceipt.md) | |
| [`CredentialSchema`](./classes/Bloock/Entity/Identity/CredentialSchema.md) | |
| [`CredentialStatus`](./classes/Bloock/Entity/Identity/CredentialStatus.md) | |
| [`CredentialVerification`](./classes/Bloock/Entity/Identity/CredentialVerification.md) | |
| [`DateAttribute`](./classes/Bloock/Entity/Identity/DateAttribute.md) | |
| [`DateAttributeDescriptor`](./classes/Bloock/Entity/Identity/DateAttributeDescriptor.md) | |
| [`DatetimeAttribute`](./classes/Bloock/Entity/Identity/DatetimeAttribute.md) | |
| [`DatetimeAttributeDescriptor`](./classes/Bloock/Entity/Identity/DatetimeAttributeDescriptor.md) | |
| [`Identity`](./classes/Bloock/Entity/Identity/Identity.md) | |
| [`NumberAttribute`](./classes/Bloock/Entity/Identity/NumberAttribute.md) | |
| [`NumberAttributeDescriptor`](./classes/Bloock/Entity/Identity/NumberAttributeDescriptor.md) | |
| [`Schema`](./classes/Bloock/Entity/Identity/Schema.md) | |
| [`SchemaBuilder`](./classes/Bloock/Entity/Identity/SchemaBuilder.md) | |
| [`StringAttribute`](./classes/Bloock/Entity/Identity/StringAttribute.md) | |
| [`StringAttributeDescriptor`](./classes/Bloock/Entity/Identity/StringAttributeDescriptor.md) | |




### \Bloock\Entity\IdentityV2

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./classes/Bloock/Entity/IdentityV2/Attribute.md) | Represents an attribute with an identifier and a corresponding value.|
| [`AttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/AttributeDescriptor.md) | Represents a descriptor for an attribute.|
| [`BjjIdentityKey`](./classes/Bloock/Entity/IdentityV2/BjjIdentityKey.md) | Represents an identity BJJ key used.|
| [`Blockchain`](./classes/Bloock/Entity/IdentityV2/Blockchain.md) | Represents an enumeration of blockchains used in the DID.|
| [`BooleanAttribute`](./classes/Bloock/Entity/IdentityV2/BooleanAttribute.md) | Represents an attribute with a boolean value.|
| [`BooleanAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/BooleanAttributeDescriptor.md) | Represents a descriptor for a boolean attribute.|
| [`Credential`](./classes/Bloock/Entity/IdentityV2/Credential.md) | Represents a verifiable credential with its associated information. [Verifiable Credentials Data Model v2.0](https://www.w3.org/TR/vc-data-model-2.0/).|
| [`CredentialBuilder`](./classes/Bloock/Entity/IdentityV2/CredentialBuilder.md) | Helps construct credentials by specifying various attributes.|
| [`CredentialProof`](./classes/Bloock/Entity/IdentityV2/CredentialProof.md) | Represents the proof associated with a credential, including signature and sparse merkle tree proof.|
| [`CredentialReceipt`](./classes/Bloock/Entity/IdentityV2/CredentialReceipt.md) | Represents a receipt for a credential, including the credential itself, its ID, and type.|
| [`CredentialSchema`](./classes/Bloock/Entity/IdentityV2/CredentialSchema.md) | Represents the schema information for a credential, including its ID and type.|
| [`CredentialStatus`](./classes/Bloock/Entity/IdentityV2/CredentialStatus.md) | Represents the status information for a credential, including its ID, revocation nonce, and type.|
| [`DateAttribute`](./classes/Bloock/Entity/IdentityV2/DateAttribute.md) | Represents an attribute with a date value, including its key and formatted value.|
| [`DateAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/DateAttributeDescriptor.md) | Represents a descriptor for a date attribute, including its display name, ID, description, and required status.|
| [`DatetimeAttribute`](./classes/Bloock/Entity/IdentityV2/DatetimeAttribute.md) | Represents an attribute with a datetime value.|
| [`DatetimeAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/DatetimeAttributeDescriptor.md) | Represents a descriptor for an attribute with a datetime value.|
| [`DecimalAttribute`](./classes/Bloock/Entity/IdentityV2/DecimalAttribute.md) | Represents an attribute with a decimal value.|
| [`DecimalAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/DecimalAttributeDescriptor.md) | Represents a descriptor for an attribute with a decimal value.|
| [`DecimalEnumAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/DecimalEnumAttributeDescriptor.md) | Represents a descriptor for an attribute with a decimal enum value.|
| [`DidParams`](./classes/Bloock/Entity/IdentityV2/DidParams.md) | Represents parameters used for generating DIDs.|
| [`IdentityKeyArgs`](./classes/Bloock/Entity/IdentityV2/IdentityKeyArgs.md) | Represents arguments for configuring an issuer key.|
| [`IntegerAttribute`](./classes/Bloock/Entity/IdentityV2/IntegerAttribute.md) | Represents an attribute with an integer value.|
| [`IntegerAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/IntegerAttributeDescriptor.md) | Represents a descriptor for an attribute with an integer value.|
| [`IntegerEnumAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/IntegerEnumAttributeDescriptor.md) | Represents a descriptor for an attribute with an integer enum value.|
| [`IssuerStateReceipt`](./classes/Bloock/Entity/IdentityV2/IssuerStateReceipt.md) | Represents a receipt for the issuer&#039;s state.|
| [`Method`](./classes/Bloock/Entity/IdentityV2/Method.md) | Represents an enumeration of methods used in the DID.|
| [`Network`](./classes/Bloock/Entity/IdentityV2/Network.md) | Represents an enumeration of network identifiers.|
| [`PublishIntervalParams`](./classes/Bloock/Entity/IdentityV2/PublishIntervalParams.md) | Represents different publish intervals.|
| [`Schema`](./classes/Bloock/Entity/IdentityV2/Schema.md) | Represents a schema with its attributes.|
| [`SchemaBuilder`](./classes/Bloock/Entity/IdentityV2/SchemaBuilder.md) | Is a builder pattern for constructing schema instances.|
| [`StringAttribute`](./classes/Bloock/Entity/IdentityV2/StringAttribute.md) | Represents an attribute with a string value.|
| [`StringAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/StringAttributeDescriptor.md) | Represents a descriptor for an attribute with a string value.|
| [`StringEnumAttributeDescriptor`](./classes/Bloock/Entity/IdentityV2/StringEnumAttributeDescriptor.md) | Represents a descriptor for an attribute with a string enum value.|
| [`VerificationReceipt`](./classes/Bloock/Entity/IdentityV2/VerificationReceipt.md) | Represents a receipt for a verification session.|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IdentityKey`](./classes/Bloock/Entity/IdentityV2/IdentityKey.md) | |



### \Bloock\Entity\Integrity

#### Classes

| Class | Description |
|-------|-------------|
| [`Anchor`](./classes/Bloock/Entity/Integrity/Anchor.md) | Represents information about an anchor.|
| [`AnchorNetwork`](./classes/Bloock/Entity/Integrity/AnchorNetwork.md) | Represents information about an anchor network.|
| [`Network`](./classes/Bloock/Entity/Integrity/Network.md) | Represents a network.|
| [`Proof`](./classes/Bloock/Entity/Integrity/Proof.md) | Represents a proof, including leaves, nodes, depth, bitmap, and anchor information.|
| [`ProofAnchor`](./classes/Bloock/Entity/Integrity/ProofAnchor.md) | Represents a proof anchor.|
| [`RecordReceipt`](./classes/Bloock/Entity/Integrity/RecordReceipt.md) | Represents a receipt for a record, including anchor ID, client, record, and status information.|




### \Bloock\Entity\Key

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessControl`](./classes/Bloock/Entity/Key/AccessControl.md) | Represents access control information, including Time-based One-Time Password (TOTP) and secret-based access.|
| [`AccessControlSecret`](./classes/Bloock/Entity/Key/AccessControlSecret.md) | Represents a secret used for secret-based access control.|
| [`AccessControlTotp`](./classes/Bloock/Entity/Key/AccessControlTotp.md) | Represents a Time-based One-Time Password ([TOTP](https://datatracker.ietf.org/doc/html/rfc6238)) code used for access control.|
| [`CertificateType`](./classes/Bloock/Entity/Key/CertificateType.md) | Represents the type of certificate.|
| [`EcdsaKeyPair`](./classes/Bloock/Entity/Key/EcdsaKeyPair.md) | Represents an ecdsa key pair, with private and public key.|
| [`ImportCertificateParams`](./classes/Bloock/Entity/Key/ImportCertificateParams.md) | Represents the parameters for importing a certificate.|
| [`KeyPair`](./classes/Bloock/Entity/Key/KeyPair.md) | Represents a pair of public and private keys.|
| [`KeyProtectionLevel`](./classes/Bloock/Entity/Key/KeyProtectionLevel.md) | Represents the protection level of a cryptographic key.|
| [`KeyType`](./classes/Bloock/Entity/Key/KeyType.md) | Represents the type of cryptographic key.|
| [`LocalCertificate`](./classes/Bloock/Entity/Key/LocalCertificate.md) | Represents a local certificate along with its password.|
| [`LocalCertificateArgs`](./classes/Bloock/Entity/Key/LocalCertificateArgs.md) | Represents the parameters for generating a local certificate.|
| [`LocalKey`](./classes/Bloock/Entity/Key/LocalKey.md) | Represents a local key with its public and private components.|
| [`Managed`](./classes/Bloock/Entity/Key/Managed.md) | Represents a managed entity that can be either a ManagedKey or a ManagedCertificate.|
| [`ManagedCertificate`](./classes/Bloock/Entity/Key/ManagedCertificate.md) | Represents a managed certificate with its details.|
| [`ManagedCertificateParams`](./classes/Bloock/Entity/Key/ManagedCertificateParams.md) | Represents parameters for creating a managed certificate.|
| [`ManagedKey`](./classes/Bloock/Entity/Key/ManagedKey.md) | Represents a managed key.|
| [`ManagedKeyParams`](./classes/Bloock/Entity/Key/ManagedKeyParams.md) | Represents the parameters for creating a managed key.|
| [`RsaKeyPair`](./classes/Bloock/Entity/Key/RsaKeyPair.md) | Represents a rsa key pair, with private and public key.|
| [`SubjectCertificateParams`](./classes/Bloock/Entity/Key/SubjectCertificateParams.md) | Represents parameters for generating a subject certificate.|
| [`TotpAccessControlReceipt`](./classes/Bloock/Entity/Key/TotpAccessControlReceipt.md) | Represents a receipt for a Time-based One-Time Password (TOTP) access control.|




### \Bloock\Entity\Record

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthenticityDetails`](./classes/Bloock/Entity/Record/AuthenticityDetails.md) | Represents details related to the authenticity of a record, including signatures.|
| [`AvailabilityDetails`](./classes/Bloock/Entity/Record/AvailabilityDetails.md) | Represents details related to the availability of a record, including content type and size.|
| [`EncryptionDetails`](./classes/Bloock/Entity/Record/EncryptionDetails.md) | Represents details related to the encryption of a record, including algorithm, key, and subject.|
| [`IntegrityDetails`](./classes/Bloock/Entity/Record/IntegrityDetails.md) | Represents details related to the integrity of a record, including hash and proof.|
| [`Record`](./classes/Bloock/Entity/Record/Record.md) | Represents a record with payload, hash, and configuration data.|
| [`RecordDetails`](./classes/Bloock/Entity/Record/RecordDetails.md) | Represents all details related to a record, including integrity, authenticity, encryption, and availability details.|




***
> Automatically generated on 2024-02-07
