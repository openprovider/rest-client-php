<?php
/**
 * DomainTransferAdditionalData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainTransferAdditionalData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainTransferAdditionalData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainTransferAdditionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_sing_pass_id' => 'string',
        'company_registration_number' => 'string',
        'domain_name_variants' => 'string',
        'idn_script' => 'string',
        'intended_use' => 'string',
        'legal_type' => 'string',
        'maintainer' => 'string',
        'membership_id' => 'string',
        'mobile_phone_number_verification' => 'string',
        'passport_number' => 'string',
        'vat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'admin_sing_pass_id' => null,
        'company_registration_number' => null,
        'domain_name_variants' => null,
        'idn_script' => null,
        'intended_use' => null,
        'legal_type' => null,
        'maintainer' => null,
        'membership_id' => null,
        'mobile_phone_number_verification' => null,
        'passport_number' => null,
        'vat' => null
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
        'admin_sing_pass_id' => 'admin_sing_pass_id',
        'company_registration_number' => 'company_registration_number',
        'domain_name_variants' => 'domain_name_variants',
        'idn_script' => 'idn_script',
        'intended_use' => 'intended_use',
        'legal_type' => 'legal_type',
        'maintainer' => 'maintainer',
        'membership_id' => 'membership_id',
        'mobile_phone_number_verification' => 'mobile_phone_number_verification',
        'passport_number' => 'passport_number',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_sing_pass_id' => 'setAdminSingPassId',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'domain_name_variants' => 'setDomainNameVariants',
        'idn_script' => 'setIdnScript',
        'intended_use' => 'setIntendedUse',
        'legal_type' => 'setLegalType',
        'maintainer' => 'setMaintainer',
        'membership_id' => 'setMembershipId',
        'mobile_phone_number_verification' => 'setMobilePhoneNumberVerification',
        'passport_number' => 'setPassportNumber',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_sing_pass_id' => 'getAdminSingPassId',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'domain_name_variants' => 'getDomainNameVariants',
        'idn_script' => 'getIdnScript',
        'intended_use' => 'getIntendedUse',
        'legal_type' => 'getLegalType',
        'maintainer' => 'getMaintainer',
        'membership_id' => 'getMembershipId',
        'mobile_phone_number_verification' => 'getMobilePhoneNumberVerification',
        'passport_number' => 'getPassportNumber',
        'vat' => 'getVat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
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
        $this->container['admin_sing_pass_id'] = isset($data['admin_sing_pass_id']) ? $data['admin_sing_pass_id'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['domain_name_variants'] = isset($data['domain_name_variants']) ? $data['domain_name_variants'] : null;
        $this->container['idn_script'] = isset($data['idn_script']) ? $data['idn_script'] : null;
        $this->container['intended_use'] = isset($data['intended_use']) ? $data['intended_use'] : null;
        $this->container['legal_type'] = isset($data['legal_type']) ? $data['legal_type'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['membership_id'] = isset($data['membership_id']) ? $data['membership_id'] : null;
        $this->container['mobile_phone_number_verification'] = isset($data['mobile_phone_number_verification']) ? $data['mobile_phone_number_verification'] : null;
        $this->container['passport_number'] = isset($data['passport_number']) ? $data['passport_number'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets admin_sing_pass_id
     *
     * @return string|null
     */
    public function getAdminSingPassId()
    {
        return $this->container['admin_sing_pass_id'];
    }

    /**
     * Sets admin_sing_pass_id
     *
     * @param string|null $admin_sing_pass_id admin_sing_pass_id
     *
     * @return $this
     */
    public function setAdminSingPassId($admin_sing_pass_id)
    {
        $this->container['admin_sing_pass_id'] = $admin_sing_pass_id;

        return $this;
    }

    /**
     * Gets company_registration_number
     *
     * @return string|null
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->container['company_registration_number'];
    }

    /**
     * Sets company_registration_number
     *
     * @param string|null $company_registration_number company_registration_number
     *
     * @return $this
     */
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets domain_name_variants
     *
     * @return string|null
     */
    public function getDomainNameVariants()
    {
        return $this->container['domain_name_variants'];
    }

    /**
     * Sets domain_name_variants
     *
     * @param string|null $domain_name_variants domain_name_variants
     *
     * @return $this
     */
    public function setDomainNameVariants($domain_name_variants)
    {
        $this->container['domain_name_variants'] = $domain_name_variants;

        return $this;
    }

    /**
     * Gets idn_script
     *
     * @return string|null
     */
    public function getIdnScript()
    {
        return $this->container['idn_script'];
    }

    /**
     * Sets idn_script
     *
     * @param string|null $idn_script idn_script
     *
     * @return $this
     */
    public function setIdnScript($idn_script)
    {
        $this->container['idn_script'] = $idn_script;

        return $this;
    }

    /**
     * Gets intended_use
     *
     * @return string|null
     */
    public function getIntendedUse()
    {
        return $this->container['intended_use'];
    }

    /**
     * Sets intended_use
     *
     * @param string|null $intended_use intended_use
     *
     * @return $this
     */
    public function setIntendedUse($intended_use)
    {
        $this->container['intended_use'] = $intended_use;

        return $this;
    }

    /**
     * Gets legal_type
     *
     * @return string|null
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     *
     * @param string|null $legal_type legal_type
     *
     * @return $this
     */
    public function setLegalType($legal_type)
    {
        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets maintainer
     *
     * @return string|null
     */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
     * Sets maintainer
     *
     * @param string|null $maintainer maintainer
     *
     * @return $this
     */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return string|null
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param string|null $membership_id membership_id
     *
     * @return $this
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

        return $this;
    }

    /**
     * Gets mobile_phone_number_verification
     *
     * @return string|null
     */
    public function getMobilePhoneNumberVerification()
    {
        return $this->container['mobile_phone_number_verification'];
    }

    /**
     * Sets mobile_phone_number_verification
     *
     * @param string|null $mobile_phone_number_verification mobile_phone_number_verification
     *
     * @return $this
     */
    public function setMobilePhoneNumberVerification($mobile_phone_number_verification)
    {
        $this->container['mobile_phone_number_verification'] = $mobile_phone_number_verification;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->container['passport_number'];
    }

    /**
     * Sets passport_number
     *
     * @param string|null $passport_number passport_number
     *
     * @return $this
     */
    public function setPassportNumber($passport_number)
    {
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

