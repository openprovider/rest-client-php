<?php
/**
 * CustomerCustomerAdditionalData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reseller/Customer
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

namespace Openprovider\Api\Rest\Client\Person\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * CustomerCustomerAdditionalData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerCustomerAdditionalData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerCustomerAdditionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attached_files' => '\Openprovider\Api\Rest\Client\Person\Model\CustomerFile[]',
        'birth_address' => 'string',
        'birth_city' => 'string',
        'birth_country' => 'string',
        'birth_date' => 'string',
        'birth_state' => 'string',
        'birth_zipcode' => 'string',
        'company_registration_city' => 'string',
        'company_registration_number' => 'string',
        'company_registration_subscription_date' => 'string',
        'company_url' => 'string',
        'headquarters_address' => 'string',
        'headquarters_city' => 'string',
        'headquarters_country' => 'string',
        'headquarters_state' => 'string',
        'headquarters_zipcode' => 'string',
        'passport_number' => 'string',
        'social_security_number' => 'string',
        'trading_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attached_files' => null,
        'birth_address' => null,
        'birth_city' => null,
        'birth_country' => null,
        'birth_date' => null,
        'birth_state' => null,
        'birth_zipcode' => null,
        'company_registration_city' => null,
        'company_registration_number' => null,
        'company_registration_subscription_date' => null,
        'company_url' => null,
        'headquarters_address' => null,
        'headquarters_city' => null,
        'headquarters_country' => null,
        'headquarters_state' => null,
        'headquarters_zipcode' => null,
        'passport_number' => null,
        'social_security_number' => null,
        'trading_name' => null
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
        'attached_files' => 'attached_files',
        'birth_address' => 'birth_address',
        'birth_city' => 'birth_city',
        'birth_country' => 'birth_country',
        'birth_date' => 'birth_date',
        'birth_state' => 'birth_state',
        'birth_zipcode' => 'birth_zipcode',
        'company_registration_city' => 'company_registration_city',
        'company_registration_number' => 'company_registration_number',
        'company_registration_subscription_date' => 'company_registration_subscription_date',
        'company_url' => 'company_url',
        'headquarters_address' => 'headquarters_address',
        'headquarters_city' => 'headquarters_city',
        'headquarters_country' => 'headquarters_country',
        'headquarters_state' => 'headquarters_state',
        'headquarters_zipcode' => 'headquarters_zipcode',
        'passport_number' => 'passport_number',
        'social_security_number' => 'social_security_number',
        'trading_name' => 'trading_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attached_files' => 'setAttachedFiles',
        'birth_address' => 'setBirthAddress',
        'birth_city' => 'setBirthCity',
        'birth_country' => 'setBirthCountry',
        'birth_date' => 'setBirthDate',
        'birth_state' => 'setBirthState',
        'birth_zipcode' => 'setBirthZipcode',
        'company_registration_city' => 'setCompanyRegistrationCity',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'company_registration_subscription_date' => 'setCompanyRegistrationSubscriptionDate',
        'company_url' => 'setCompanyUrl',
        'headquarters_address' => 'setHeadquartersAddress',
        'headquarters_city' => 'setHeadquartersCity',
        'headquarters_country' => 'setHeadquartersCountry',
        'headquarters_state' => 'setHeadquartersState',
        'headquarters_zipcode' => 'setHeadquartersZipcode',
        'passport_number' => 'setPassportNumber',
        'social_security_number' => 'setSocialSecurityNumber',
        'trading_name' => 'setTradingName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attached_files' => 'getAttachedFiles',
        'birth_address' => 'getBirthAddress',
        'birth_city' => 'getBirthCity',
        'birth_country' => 'getBirthCountry',
        'birth_date' => 'getBirthDate',
        'birth_state' => 'getBirthState',
        'birth_zipcode' => 'getBirthZipcode',
        'company_registration_city' => 'getCompanyRegistrationCity',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'company_registration_subscription_date' => 'getCompanyRegistrationSubscriptionDate',
        'company_url' => 'getCompanyUrl',
        'headquarters_address' => 'getHeadquartersAddress',
        'headquarters_city' => 'getHeadquartersCity',
        'headquarters_country' => 'getHeadquartersCountry',
        'headquarters_state' => 'getHeadquartersState',
        'headquarters_zipcode' => 'getHeadquartersZipcode',
        'passport_number' => 'getPassportNumber',
        'social_security_number' => 'getSocialSecurityNumber',
        'trading_name' => 'getTradingName'
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
        $this->container['attached_files'] = isset($data['attached_files']) ? $data['attached_files'] : null;
        $this->container['birth_address'] = isset($data['birth_address']) ? $data['birth_address'] : null;
        $this->container['birth_city'] = isset($data['birth_city']) ? $data['birth_city'] : null;
        $this->container['birth_country'] = isset($data['birth_country']) ? $data['birth_country'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['birth_state'] = isset($data['birth_state']) ? $data['birth_state'] : null;
        $this->container['birth_zipcode'] = isset($data['birth_zipcode']) ? $data['birth_zipcode'] : null;
        $this->container['company_registration_city'] = isset($data['company_registration_city']) ? $data['company_registration_city'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['company_registration_subscription_date'] = isset($data['company_registration_subscription_date']) ? $data['company_registration_subscription_date'] : null;
        $this->container['company_url'] = isset($data['company_url']) ? $data['company_url'] : null;
        $this->container['headquarters_address'] = isset($data['headquarters_address']) ? $data['headquarters_address'] : null;
        $this->container['headquarters_city'] = isset($data['headquarters_city']) ? $data['headquarters_city'] : null;
        $this->container['headquarters_country'] = isset($data['headquarters_country']) ? $data['headquarters_country'] : null;
        $this->container['headquarters_state'] = isset($data['headquarters_state']) ? $data['headquarters_state'] : null;
        $this->container['headquarters_zipcode'] = isset($data['headquarters_zipcode']) ? $data['headquarters_zipcode'] : null;
        $this->container['passport_number'] = isset($data['passport_number']) ? $data['passport_number'] : null;
        $this->container['social_security_number'] = isset($data['social_security_number']) ? $data['social_security_number'] : null;
        $this->container['trading_name'] = isset($data['trading_name']) ? $data['trading_name'] : null;
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
     * Gets attached_files
     *
     * @return \Openprovider\Api\Rest\Client\Person\Model\CustomerFile[]|null
     */
    #[\ReturnTypeWillChange]
    public function getAttachedFiles()
    {
        return $this->container['attached_files'];
    }

    /**
     * Sets attached_files
     *
     * @param \Openprovider\Api\Rest\Client\Person\Model\CustomerFile[]|null $attached_files attached_files
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setAttachedFiles($attached_files)
    {
        $this->container['attached_files'] = $attached_files;

        return $this;
    }

    /**
     * Gets birth_address
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getBirthAddress()
    {
        return $this->container['birth_address'];
    }

    /**
     * Sets birth_address
     *
     * @param string|null $birth_address birth_address
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setBirthAddress($birth_address)
    {
        $this->container['birth_address'] = $birth_address;

        return $this;
    }

    /**
     * Gets birth_city
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getBirthCity()
    {
        return $this->container['birth_city'];
    }

    /**
     * Sets birth_city
     *
     * @param string|null $birth_city birth_city
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setBirthCity($birth_city)
    {
        $this->container['birth_city'] = $birth_city;

        return $this;
    }

    /**
     * Gets birth_country
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getBirthCountry()
    {
        return $this->container['birth_country'];
    }

    /**
     * Sets birth_country
     *
     * @param string|null $birth_country birth_country
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setBirthCountry($birth_country)
    {
        $this->container['birth_country'] = $birth_country;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date birth_date
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets birth_state
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getBirthState()
    {
        return $this->container['birth_state'];
    }

    /**
     * Sets birth_state
     *
     * @param string|null $birth_state birth_state
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setBirthState($birth_state)
    {
        $this->container['birth_state'] = $birth_state;

        return $this;
    }

    /**
     * Gets birth_zipcode
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getBirthZipcode()
    {
        return $this->container['birth_zipcode'];
    }

    /**
     * Sets birth_zipcode
     *
     * @param string|null $birth_zipcode birth_zipcode
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setBirthZipcode($birth_zipcode)
    {
        $this->container['birth_zipcode'] = $birth_zipcode;

        return $this;
    }

    /**
     * Gets company_registration_city
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getCompanyRegistrationCity()
    {
        return $this->container['company_registration_city'];
    }

    /**
     * Sets company_registration_city
     *
     * @param string|null $company_registration_city company_registration_city
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setCompanyRegistrationCity($company_registration_city)
    {
        $this->container['company_registration_city'] = $company_registration_city;

        return $this;
    }

    /**
     * Gets company_registration_number
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets company_registration_subscription_date
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getCompanyRegistrationSubscriptionDate()
    {
        return $this->container['company_registration_subscription_date'];
    }

    /**
     * Sets company_registration_subscription_date
     *
     * @param string|null $company_registration_subscription_date company_registration_subscription_date
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setCompanyRegistrationSubscriptionDate($company_registration_subscription_date)
    {
        $this->container['company_registration_subscription_date'] = $company_registration_subscription_date;

        return $this;
    }

    /**
     * Gets company_url
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getCompanyUrl()
    {
        return $this->container['company_url'];
    }

    /**
     * Sets company_url
     *
     * @param string|null $company_url company_url
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setCompanyUrl($company_url)
    {
        $this->container['company_url'] = $company_url;

        return $this;
    }

    /**
     * Gets headquarters_address
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getHeadquartersAddress()
    {
        return $this->container['headquarters_address'];
    }

    /**
     * Sets headquarters_address
     *
     * @param string|null $headquarters_address headquarters_address
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setHeadquartersAddress($headquarters_address)
    {
        $this->container['headquarters_address'] = $headquarters_address;

        return $this;
    }

    /**
     * Gets headquarters_city
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getHeadquartersCity()
    {
        return $this->container['headquarters_city'];
    }

    /**
     * Sets headquarters_city
     *
     * @param string|null $headquarters_city headquarters_city
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setHeadquartersCity($headquarters_city)
    {
        $this->container['headquarters_city'] = $headquarters_city;

        return $this;
    }

    /**
     * Gets headquarters_country
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getHeadquartersCountry()
    {
        return $this->container['headquarters_country'];
    }

    /**
     * Sets headquarters_country
     *
     * @param string|null $headquarters_country headquarters_country
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setHeadquartersCountry($headquarters_country)
    {
        $this->container['headquarters_country'] = $headquarters_country;

        return $this;
    }

    /**
     * Gets headquarters_state
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getHeadquartersState()
    {
        return $this->container['headquarters_state'];
    }

    /**
     * Sets headquarters_state
     *
     * @param string|null $headquarters_state headquarters_state
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setHeadquartersState($headquarters_state)
    {
        $this->container['headquarters_state'] = $headquarters_state;

        return $this;
    }

    /**
     * Gets headquarters_zipcode
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getHeadquartersZipcode()
    {
        return $this->container['headquarters_zipcode'];
    }

    /**
     * Sets headquarters_zipcode
     *
     * @param string|null $headquarters_zipcode headquarters_zipcode
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setHeadquartersZipcode($headquarters_zipcode)
    {
        $this->container['headquarters_zipcode'] = $headquarters_zipcode;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function setPassportNumber($passport_number)
    {
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets social_security_number
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string|null $social_security_number social_security_number
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setSocialSecurityNumber($social_security_number)
    {
        $this->container['social_security_number'] = $social_security_number;

        return $this;
    }

    /**
     * Gets trading_name
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getTradingName()
    {
        return $this->container['trading_name'];
    }

    /**
     * Sets trading_name
     *
     * @param string|null $trading_name trading_name
     *
     * @return $this
     */
    #[\ReturnTypeWillChange]
    public function setTradingName($trading_name)
    {
        $this->container['trading_name'] = $trading_name;

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


