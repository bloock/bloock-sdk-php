
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
| [`IdentityCoreClient`](./classes/Bloock/Client/IdentityCoreClient.md) | Represents a client for interacting with the [Bloock Identity service](https://dashboard.bloock.com/login).|
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
| [`Attribute`](./classes/Bloock/Entity/Identity/Attribute.md) | Represents an attribute with an identifier and a corresponding value.|
| [`AttributeDescriptor`](./classes/Bloock/Entity/Identity/AttributeDescriptor.md) | Represents a descriptor for an attribute.|
| [`BooleanAttribute`](./classes/Bloock/Entity/Identity/BooleanAttribute.md) | Represents an attribute with a boolean value.|
| [`BooleanAttributeDescriptor`](./classes/Bloock/Entity/Identity/BooleanAttributeDescriptor.md) | Represents a descriptor for a boolean attribute.|
| [`Credential`](./classes/Bloock/Entity/Identity/Credential.md) | Represents a verifiable credential with its associated information. [Verifiable Credentials Data Model v2.0](https://www.w3.org/TR/vc-data-model-2.0/).|
| [`CredentialBuilder`](./classes/Bloock/Entity/Identity/CredentialBuilder.md) | Helps construct credentials by specifying various attributes.|
| [`CredentialCoreBuilder`](./classes/Bloock/Entity/Identity/CredentialCoreBuilder.md) | Helps construct credentials by specifying various attributes.|
| [`CredentialProof`](./classes/Bloock/Entity/Identity/CredentialProof.md) | Represents the proof associated with a credential, including signature and sparse merkle tree proof.|
| [`CredentialReceipt`](./classes/Bloock/Entity/Identity/CredentialReceipt.md) | Represents a receipt for a credential, including the credential itself, its ID, and type.|
| [`CredentialSchema`](./classes/Bloock/Entity/Identity/CredentialSchema.md) | Represents the schema information for a credential, including its ID and type.|
| [`CredentialStatus`](./classes/Bloock/Entity/Identity/CredentialStatus.md) | Represents the status information for a credential, including its ID, revocation nonce, and type.|
| [`DateAttribute`](./classes/Bloock/Entity/Identity/DateAttribute.md) | Represents an attribute with a date value, including its key and formatted value.|
| [`DateAttributeDescriptor`](./classes/Bloock/Entity/Identity/DateAttributeDescriptor.md) | Represents a descriptor for a date attribute, including its display name, ID, description, and required status.|
| [`DatetimeAttribute`](./classes/Bloock/Entity/Identity/DatetimeAttribute.md) | Represents an attribute with a datetime value.|
| [`DatetimeAttributeDescriptor`](./classes/Bloock/Entity/Identity/DatetimeAttributeDescriptor.md) | Represents a descriptor for an attribute with a datetime value.|
| [`DecimalAttribute`](./classes/Bloock/Entity/Identity/DecimalAttribute.md) | Represents an attribute with a decimal value.|
| [`DecimalAttributeDescriptor`](./classes/Bloock/Entity/Identity/DecimalAttributeDescriptor.md) | Represents a descriptor for an attribute with a decimal value.|
| [`DecimalEnumAttributeDescriptor`](./classes/Bloock/Entity/Identity/DecimalEnumAttributeDescriptor.md) | Represents a descriptor for an attribute with a decimal enum value.|
| [`Did`](./classes/Bloock/Entity/Identity/Did.md) | Represents a DID.|
| [`DidMethod`](./classes/Bloock/Entity/Identity/DidMethod.md) | Represents the type of method did.|
| [`Holder`](./classes/Bloock/Entity/Identity/Holder.md) | Represents a Holder identity.|
| [`IntegerAttribute`](./classes/Bloock/Entity/Identity/IntegerAttribute.md) | Represents an attribute with an integer value.|
| [`IntegerAttributeDescriptor`](./classes/Bloock/Entity/Identity/IntegerAttributeDescriptor.md) | Represents a descriptor for an attribute with an integer value.|
| [`IntegerEnumAttributeDescriptor`](./classes/Bloock/Entity/Identity/IntegerEnumAttributeDescriptor.md) | Represents a descriptor for an attribute with an integer enum value.|
| [`Issuer`](./classes/Bloock/Entity/Identity/Issuer.md) | Represents an Issuer identity.|
| [`IssuerStateReceipt`](./classes/Bloock/Entity/Identity/IssuerStateReceipt.md) | Represents a receipt for the issuer&#039;s state.|
| [`PublishIntervalParams`](./classes/Bloock/Entity/Identity/PublishIntervalParams.md) | Represents different publish intervals.|
| [`Schema`](./classes/Bloock/Entity/Identity/Schema.md) | Represents a schema with its attributes.|
| [`SchemaBuilder`](./classes/Bloock/Entity/Identity/SchemaBuilder.md) | Is a builder pattern for constructing schema instances.|
| [`StringAttribute`](./classes/Bloock/Entity/Identity/StringAttribute.md) | Represents an attribute with a string value.|
| [`StringAttributeDescriptor`](./classes/Bloock/Entity/Identity/StringAttributeDescriptor.md) | Represents a descriptor for an attribute with a string value.|
| [`StringEnumAttributeDescriptor`](./classes/Bloock/Entity/Identity/StringEnumAttributeDescriptor.md) | Represents a descriptor for an attribute with a string enum value.|
| [`VerificationReceipt`](./classes/Bloock/Entity/Identity/VerificationReceipt.md) | Represents a receipt for a verification session.|




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
| [`Key`](./classes/Bloock/Entity/Key/Key.md) | Represents a key entity that can be either a ManagedKey or a LocalKey.|
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
> Automatically generated on 2024-02-21
