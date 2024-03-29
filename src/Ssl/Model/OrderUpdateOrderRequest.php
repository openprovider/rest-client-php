<?php
/**
 * OrderUpdateOrderRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SSL
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Ssl\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * OrderUpdateOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderUpdateOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderUpdateOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approver_email' => 'string',
        'autorenew' => 'string',
        'csr' => 'string',
        'domain_validation_methods' => '\Openprovider\Api\Rest\Client\Ssl\Model\OrderSslOrderDomainValidationMethods[]',
        'enable_dns_automation' => 'bool',
        'host_names' => 'string[]',
        'id' => 'int',
        'organization_handle' => 'string',
        'signature_hash_algorithm' => 'string',
        'software_id' => 'string',
        'start_provision' => 'bool',
        'technical_handle' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'approver_email' => null,
        'autorenew' => null,
        'csr' => null,
        'domain_validation_methods' => null,
        'enable_dns_automation' => 'boolean',
        'host_names' => null,
        'id' => 'int32',
        'organization_handle' => null,
        'signature_hash_algorithm' => null,
        'software_id' => null,
        'start_provision' => 'boolean',
        'technical_handle' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'approver_email' => 'approver_email',
        'autorenew' => 'autorenew',
        'csr' => 'csr',
        'domain_validation_methods' => 'domain_validation_methods',
        'enable_dns_automation' => 'enable_dns_automation',
        'host_names' => 'host_names',
        'id' => 'id',
        'organization_handle' => 'organization_handle',
        'signature_hash_algorithm' => 'signature_hash_algorithm',
        'software_id' => 'software_id',
        'start_provision' => 'start_provision',
        'technical_handle' => 'technical_handle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approver_email' => 'setApproverEmail',
        'autorenew' => 'setAutorenew',
        'csr' => 'setCsr',
        'domain_validation_methods' => 'setDomainValidationMethods',
        'enable_dns_automation' => 'setEnableDnsAutomation',
        'host_names' => 'setHostNames',
        'id' => 'setId',
        'organization_handle' => 'setOrganizationHandle',
        'signature_hash_algorithm' => 'setSignatureHashAlgorithm',
        'software_id' => 'setSoftwareId',
        'start_provision' => 'setStartProvision',
        'technical_handle' => 'setTechnicalHandle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approver_email' => 'getApproverEmail',
        'autorenew' => 'getAutorenew',
        'csr' => 'getCsr',
        'domain_validation_methods' => 'getDomainValidationMethods',
        'enable_dns_automation' => 'getEnableDnsAutomation',
        'host_names' => 'getHostNames',
        'id' => 'getId',
        'organization_handle' => 'getOrganizationHandle',
        'signature_hash_algorithm' => 'getSignatureHashAlgorithm',
        'software_id' => 'getSoftwareId',
        'start_provision' => 'getStartProvision',
        'technical_handle' => 'getTechnicalHandle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['approver_email'] = isset($data['approver_email']) ? $data['approver_email'] : null;
        $this->container['autorenew'] = isset($data['autorenew']) ? $data['autorenew'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['domain_validation_methods'] = isset($data['domain_validation_methods']) ? $data['domain_validation_methods'] : null;
        $this->container['enable_dns_automation'] = isset($data['enable_dns_automation']) ? $data['enable_dns_automation'] : false;
        $this->container['host_names'] = isset($data['host_names']) ? $data['host_names'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['organization_handle'] = isset($data['organization_handle']) ? $data['organization_handle'] : null;
        $this->container['signature_hash_algorithm'] = isset($data['signature_hash_algorithm']) ? $data['signature_hash_algorithm'] : null;
        $this->container['software_id'] = isset($data['software_id']) ? $data['software_id'] : null;
        $this->container['start_provision'] = isset($data['start_provision']) ? $data['start_provision'] : null;
        $this->container['technical_handle'] = isset($data['technical_handle']) ? $data['technical_handle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    #[\ReturnTypeWillChange]
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets approver_email
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getApproverEmail()
    {
        return $this->container['approver_email'];
    }

    /**
     * Sets approver_email
     *
     * @param string|null $approver_email Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setApproverEmail($approver_email)
    {
        $this->container['approver_email'] = $approver_email;

        return $this;
    }

    /**
     * Gets autorenew
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getAutorenew()
    {
        return $this->container['autorenew'];
    }

    /**
     * Sets autorenew
     *
     * @param string|null $autorenew autorenew
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setAutorenew($autorenew)
    {
        $this->container['autorenew'] = $autorenew;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string|null $csr csr
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets domain_validation_methods
     *
     * @return \Openprovider\Api\Rest\Client\Ssl\Model\OrderSslOrderDomainValidationMethods[]|null
     */
    #[\ReturnTypeWillChange]
    public function getDomainValidationMethods()
    {
        return $this->container['domain_validation_methods'];
    }

    /**
     * Sets domain_validation_methods
     *
     * @param \Openprovider\Api\Rest\Client\Ssl\Model\OrderSslOrderDomainValidationMethods[]|null $domain_validation_methods domain_validation_methods
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setDomainValidationMethods($domain_validation_methods)
    {
        $this->container['domain_validation_methods'] = $domain_validation_methods;

        return $this;
    }

    /**
     * Gets enable_dns_automation
     *
     * @return bool|null
     */
    #[\ReturnTypeWillChange]
    public function getEnableDnsAutomation()
    {
        return $this->container['enable_dns_automation'];
    }

    /**
     * Sets enable_dns_automation
     *
     * @param bool|null $enable_dns_automation enable_dns_automation
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setEnableDnsAutomation($enable_dns_automation)
    {
        $this->container['enable_dns_automation'] = $enable_dns_automation;

        return $this;
    }

    /**
     * Gets host_names
     *
     * @return string[]|null
     */
    #[\ReturnTypeWillChange]
    public function getHostNames()
    {
        return $this->container['host_names'];
    }

    /**
     * Sets host_names
     *
     * @param string[]|null $host_names host_names
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setHostNames($host_names)
    {
        $this->container['host_names'] = $host_names;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    #[\ReturnTypeWillChange]
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organization_handle
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getOrganizationHandle()
    {
        return $this->container['organization_handle'];
    }

    /**
     * Sets organization_handle
     *
     * @param string|null $organization_handle organization_handle
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setOrganizationHandle($organization_handle)
    {
        $this->container['organization_handle'] = $organization_handle;

        return $this;
    }

    /**
     * Gets signature_hash_algorithm
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getSignatureHashAlgorithm()
    {
        return $this->container['signature_hash_algorithm'];
    }

    /**
     * Sets signature_hash_algorithm
     *
     * @param string|null $signature_hash_algorithm signature_hash_algorithm
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setSignatureHashAlgorithm($signature_hash_algorithm)
    {
        $this->container['signature_hash_algorithm'] = $signature_hash_algorithm;

        return $this;
    }

    /**
     * Gets software_id
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getSoftwareId()
    {
        return $this->container['software_id'];
    }

    /**
     * Sets software_id
     *
     * @param string|null $software_id software_id
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setSoftwareId($software_id)
    {
        $this->container['software_id'] = $software_id;

        return $this;
    }

    /**
     * Gets start_provision
     *
     * @return bool|null
     */
    #[\ReturnTypeWillChange]
    public function getStartProvision()
    {
        return $this->container['start_provision'];
    }

    /**
     * Sets start_provision
     *
     * @param bool|null $start_provision start_provision
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setStartProvision($start_provision)
    {
        $this->container['start_provision'] = $start_provision;

        return $this;
    }

    /**
     * Gets technical_handle
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getTechnicalHandle()
    {
        return $this->container['technical_handle'];
    }

    /**
     * Sets technical_handle
     *
     * @param string|null $technical_handle technical_handle
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setTechnicalHandle($technical_handle)
    {
        $this->container['technical_handle'] = $technical_handle;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


