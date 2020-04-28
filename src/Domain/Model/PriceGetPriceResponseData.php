<?php
/**
 * PriceGetPriceResponseData
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
 * OpenAPI Generator version: 4.0.3
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
 * PriceGetPriceResponseData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceGetPriceResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'priceGetPriceResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_premium' => 'bool',
        'is_promotion' => 'bool',
        'non_promo_price' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainPriceGroup',
        'price' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainPriceGroup',
        'promotion_data' => '\Openprovider\Api\Rest\Client\Domain\Model\PricePromotionData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'is_premium' => 'boolean',
        'is_promotion' => 'boolean',
        'non_promo_price' => null,
        'price' => null,
        'promotion_data' => null
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
        'is_premium' => 'is_premium',
        'is_promotion' => 'is_promotion',
        'non_promo_price' => 'non_promo_price',
        'price' => 'price',
        'promotion_data' => 'promotion_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_premium' => 'setIsPremium',
        'is_promotion' => 'setIsPromotion',
        'non_promo_price' => 'setNonPromoPrice',
        'price' => 'setPrice',
        'promotion_data' => 'setPromotionData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_premium' => 'getIsPremium',
        'is_promotion' => 'getIsPromotion',
        'non_promo_price' => 'getNonPromoPrice',
        'price' => 'getPrice',
        'promotion_data' => 'getPromotionData'
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
        $this->container['is_premium'] = isset($data['is_premium']) ? $data['is_premium'] : null;
        $this->container['is_promotion'] = isset($data['is_promotion']) ? $data['is_promotion'] : null;
        $this->container['non_promo_price'] = isset($data['non_promo_price']) ? $data['non_promo_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['promotion_data'] = isset($data['promotion_data']) ? $data['promotion_data'] : null;
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
     * Gets is_premium
     *
     * @return bool|null
     */
    public function getIsPremium()
    {
        return $this->container['is_premium'];
    }

    /**
     * Sets is_premium
     *
     * @param bool|null $is_premium is_premium
     *
     * @return $this
     */
    public function setIsPremium($is_premium)
    {
        $this->container['is_premium'] = $is_premium;

        return $this;
    }

    /**
     * Gets is_promotion
     *
     * @return bool|null
     */
    public function getIsPromotion()
    {
        return $this->container['is_promotion'];
    }

    /**
     * Sets is_promotion
     *
     * @param bool|null $is_promotion is_promotion
     *
     * @return $this
     */
    public function setIsPromotion($is_promotion)
    {
        $this->container['is_promotion'] = $is_promotion;

        return $this;
    }

    /**
     * Gets non_promo_price
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainPriceGroup|null
     */
    public function getNonPromoPrice()
    {
        return $this->container['non_promo_price'];
    }

    /**
     * Sets non_promo_price
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainPriceGroup|null $non_promo_price non_promo_price
     *
     * @return $this
     */
    public function setNonPromoPrice($non_promo_price)
    {
        $this->container['non_promo_price'] = $non_promo_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainPriceGroup|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainPriceGroup|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets promotion_data
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\PricePromotionData|null
     */
    public function getPromotionData()
    {
        return $this->container['promotion_data'];
    }

    /**
     * Sets promotion_data
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\PricePromotionData|null $promotion_data promotion_data
     *
     * @return $this
     */
    public function setPromotionData($promotion_data)
    {
        $this->container['promotion_data'] = $promotion_data;

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


