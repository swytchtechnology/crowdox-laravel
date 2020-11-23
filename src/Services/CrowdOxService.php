<?php namespace edh649\CrowdOxLaravel\Services;

use Config, InvalidArgumentException, BadMethodCallException;
use edh649\CrowdOx\CrowdOx;

class CrowdOxService {

    /**
     * CrowdOx Client to use
     *
     * @var CrowdOx
     */
    protected $client = null;

    /**
     *
     * @throws Exception
     */
    public function __construct() {
        if ($this->client === null)
        {
            $this->freshClient();
        }
    }

    /**
     * Create a fresh client
     * Get auth parameters from config, fail if any are missing.
     * Instantiate API client and set auth token.
     *
     * @return void
     */
    public function freshClient() {
        $username = config('crowdox-laravel.username');
        $password = config('crowdox-laravel.password');
        if(!$username || !$password) {
            throw new InvalidArgumentException('Please set CROWDOX_USERNAME and CROWDOX_PASSWORD environment variables');
        }
        $this->client = new CrowdOx($username, $password);
    }

    /**
     * Pass any method calls onto $this->client
     *
     * @return mixed
     */
    public function __call($method, $args) {
        if(is_callable([$this->client,$method])) {
            return call_user_func_array([$this->client,$method],$args);
        } else {
            throw new BadMethodCallException("Method $method does not exist");
        }
    }

    /**
     * Pass any property calls onto $this->client
     *
     * @return mixed
     */
    public function __get($property) {
        if(property_exists($this->client,$property)) {
            return $this->client->{$property};
        } else {
            throw new BadMethodCallException("Property $property does not exist");
        }
    }

}