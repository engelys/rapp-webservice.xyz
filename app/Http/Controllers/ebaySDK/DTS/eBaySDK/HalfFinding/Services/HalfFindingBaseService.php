<?php
namespace DTS\eBaySDK\HalfFinding\Services;

/**
 * Base class for the HalfFinding service.
 */
class HalfFindingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';
    const HDR_APP_ID = 'X-EBAY-SOA-SECURITY-APPNAME';
    const HDR_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';
    const HDR_MESSAGE_ENCODING = 'X-EBAY-SOA-MESSAGE-ENCODING';
    const HDR_MESSAGE_PROTOCOL = 'X-EBAY-SOA-MESSAGE-PROTOCOL';
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HDR_RESPONSE_FORMAT = 'X-EBAY-SOA-RESPONSE-DATA-FORMAT';
    const HDR_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://svcs.ebay.com/services/half/HalfFindingService/v1', 'http://svcs.ebay.com/services/half/HalfFindingService/v1', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\HalfFinding\Services\HalfFindingService::API_VERSION
            ],
            'globalId' => [
                'valid' => ['string']
            ]
        ];
    }

    /**
     * Build the needed eBay HTTP headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders($operationName)
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_APP_ID] = $this->getConfig('credentials')->getAppId();
        $headers[self::HDR_OPERATION_NAME] = $operationName;

        // Add optional headers.
        if ($this->getConfig('apiVersion')) {
            $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        }

        if ($this->getConfig('globalId')) {
            $headers[self::HDR_GLOBAL_ID] = $this->getConfig('globalId');
        }

        return $headers;
    }
}
