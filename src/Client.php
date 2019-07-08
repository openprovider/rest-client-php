<?php

/**
 * This file is auto-generated.
 */
namespace Openprovider\Api\Rest\Client;

use GuzzleHttp\ClientInterface;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Base\HeaderSelector;
use Openprovider\Api\Rest\Client\Billing\Billing;
use Openprovider\Api\Rest\Client\Dns\Dns;
use Openprovider\Api\Rest\Client\Domain\Domain;
use Openprovider\Api\Rest\Client\Tld\Tld;
use Openprovider\Api\Rest\Client\Template\EmailTemplate;
use Openprovider\Api\Rest\Client\Helpers\Helpers;
use Openprovider\Api\Rest\Client\License\License;
use Openprovider\Api\Rest\Client\Person\Person;
use Openprovider\Api\Rest\Client\Ssl\Ssl;
use Openprovider\Api\Rest\Client\Auth\Auth;

class Client 
{
    /** @var Billing */
    protected $Billing;

    /** @var Dns */
    protected $Dns;

    /** @var Domain */
    protected $Domain;

    /** @var Tld */
    protected $Tld;

    /** @var EmailTemplate */
    protected $EmailTemplate;

    /** @var Helpers */
    protected $Helpers;

    /** @var License */
    protected $License;

    /** @var Person */
    protected $Person;

    /** @var Ssl */
    protected $Ssl;

    /** @var Auth */
    protected $Auth;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->Billing = new Billing($client, $config, $selector, $host_index);
	    $this->Dns = new Dns($client, $config, $selector, $host_index);
	    $this->Domain = new Domain($client, $config, $selector, $host_index);
	    $this->Tld = new Tld($client, $config, $selector, $host_index);
	    $this->EmailTemplate = new EmailTemplate($client, $config, $selector, $host_index);
	    $this->Helpers = new Helpers($client, $config, $selector, $host_index);
	    $this->License = new License($client, $config, $selector, $host_index);
	    $this->Person = new Person($client, $config, $selector, $host_index);
	    $this->Ssl = new Ssl($client, $config, $selector, $host_index);
	    $this->Auth = new Auth($client, $config, $selector, $host_index);
    }

    /**
     * Gets Billing module.
     * @return Billing
     */
    public function getBilling() 
    {
      return $this->Billing;
    }

    /**
     * Gets Dns module.
     * @return Dns
     */
    public function getDns() 
    {
      return $this->Dns;
    }

    /**
     * Gets Domain module.
     * @return Domain
     */
    public function getDomain() 
    {
      return $this->Domain;
    }

    /**
     * Gets Tld module.
     * @return Tld
     */
    public function getTld() 
    {
      return $this->Tld;
    }

    /**
     * Gets EmailTemplate module.
     * @return EmailTemplate
     */
    public function getEmailTemplate() 
    {
      return $this->EmailTemplate;
    }

    /**
     * Gets Helpers module.
     * @return Helpers
     */
    public function getHelpers() 
    {
      return $this->Helpers;
    }

    /**
     * Gets License module.
     * @return License
     */
    public function getLicense() 
    {
      return $this->License;
    }

    /**
     * Gets Person module.
     * @return Person
     */
    public function getPerson() 
    {
      return $this->Person;
    }

    /**
     * Gets Ssl module.
     * @return Ssl
     */
    public function getSsl() 
    {
      return $this->Ssl;
    }

    /**
     * Gets Auth module.
     * @return Auth
     */
    public function getAuth() 
    {
      return $this->Auth;
    }
}
