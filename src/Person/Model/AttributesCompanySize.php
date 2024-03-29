<?php
/**
 * AttributesCompanySize
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
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * AttributesCompanySize Class Doc Comment
 *
 * @category Class
 * @description - UNKNOWN_COMPANY_SIZE: Unknown company size, e.g reseller just created account or didn&#39;t specified company size  - BETWEEN_1_AND_10: Company has from 1 to 10 employees  - BETWEEN_11_AND_50: Company has from 11 to 50 employees  - BETWEEN_51_AND_200: Company has from 51 to 200 employees  - BETWEEN_201_AND_500: Company has from 201 to 500 employees  - BETWEEN_501_AND_1000: Company has from 501 to 1000 employees  - MORE_THAN_1000: Company more than 1000 employees
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AttributesCompanySize
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN_COMPANY_SIZE = 'UNKNOWN_COMPANY_SIZE';
    const BETWEEN_1_AND_10 = 'BETWEEN_1_AND_10';
    const BETWEEN_11_AND_50 = 'BETWEEN_11_AND_50';
    const BETWEEN_51_AND_200 = 'BETWEEN_51_AND_200';
    const BETWEEN_201_AND_500 = 'BETWEEN_201_AND_500';
    const BETWEEN_501_AND_1000 = 'BETWEEN_501_AND_1000';
    const MORE_THAN_1000 = 'MORE_THAN_1000';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN_COMPANY_SIZE,
            self::BETWEEN_1_AND_10,
            self::BETWEEN_11_AND_50,
            self::BETWEEN_51_AND_200,
            self::BETWEEN_201_AND_500,
            self::BETWEEN_501_AND_1000,
            self::MORE_THAN_1000,
        ];
    }
}


