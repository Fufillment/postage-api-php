<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 2:59 PM
 */

namespace Fulfillment\Postage;

use Dotenv;
use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Api\Api;
use Fulfillment\Api\Configuration\ApiConfiguration;
use Fulfillment\Postage\Api\PostageApi;
use Fulfillment\Postage\Api\ZonesApi;
use League\CLImate\CLImate;

date_default_timezone_set('Europe/London');

class PostageClient
{
    public $postage;

    protected $validateRequests;
    protected $jsonOnly;

    /**
     *
     * @param $config mixed Must be either an absolute string pointing to a directory with a .env file or an array containing configuration information
     *
     * @throws \Exception Thrown if a configuration is not valid
     */
    public function __construct($config)
    {
        $this->climate = new CLImate;
        //defined('STDOUT');

        //parse config
        if (is_string($config) || is_null($config)) {
            if (!is_null($config)) {
                if (!is_dir($config)) {
                    throw new \Exception('The provided directory location does not exist at ' . $config);
                }
                Dotenv::load($config);
                Dotenv::required(['API_ENDPOINT']);

            }
            $username          = getenv('USERNAME') ?: null;
            $password          = getenv('PASSWORD') ?: null;
            $clientId          = getenv('CLIENT_ID') ?: null;
            $clientSecret      = getenv('CLIENT_SECRET') ?: null;
            $accessToken       = getenv('ACCESS_TOKEN') ?: null;
            $endpoint          = getenv('API_ENDPOINT') ?: null;
            $authEndpoint      = getenv('AUTH_ENDPOINT') ?: null;
            $this->jsonOnly          = getenv('JSON_ONLY') ?: false;
            $this->requestValidation = getenv('VALIDATE_REQUESTS') ?: true;
        } else if (is_array($config)) {
            $username          = ArrayUtil::get($config['username']);
            $password          = ArrayUtil::get($config['password']);
            $clientId          = ArrayUtil::get($config['clientId']);
            $clientSecret      = ArrayUtil::get($config['clientSecret']);
            $accessToken       = ArrayUtil::get($config['accessToken']);
            $endpoint          = ArrayUtil::get($config['endpoint']);
            $authEndpoint      = ArrayUtil::get($config['authEndpoint']);
            $this->jsonOnly          = ArrayUtil::get($config['jsonOnly'], false);
            $this->requestValidation = ArrayUtil::get($config['validateRequests'], true);
        } else {
            throw new \InvalidArgumentException('A configuration must be provided');
        }

        $apiConfig = new ApiConfiguration([
            'username' => $username,
            'password' => $password,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'accessToken' => $accessToken,
            'endpoint' => $endpoint,
            'authEndpoint' => $authEndpoint,
            'scope' => 'postage'
        ]);

        $apiClient     = new Api($apiConfig);
        $this->postage = new PostageApi($apiClient, $this->jsonOnly, $this->requestValidation);
        $this->zones   = new ZonesApi($apiClient, $this->jsonOnly, $this->requestValidation);
        //instantiate api
    }

}