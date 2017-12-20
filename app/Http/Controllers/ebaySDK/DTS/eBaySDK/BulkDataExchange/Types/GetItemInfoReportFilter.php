<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\BulkDataExchange\Types;

/**
 *
 * @property \DTS\eBaySDK\BulkDataExchange\Types\GetItemJobActionType $jobAction
 * @property \DTS\eBaySDK\BulkDataExchange\Enums\ItemEventType $filterType
 * @property boolean $includeAttributes
 * @property boolean $includeDescription
 * @property \DateTime $reportDateFrom
 * @property \DateTime $reportDateTo
 * @property string[] $timeFrame
 * @property string[] $changedFieldSelector
 */
class GetItemInfoReportFilter extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'jobAction' => [
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\GetItemJobActionType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'jobAction'
        ],
        'filterType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'filterType'
        ],
        'includeAttributes' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'includeAttributes'
        ],
        'includeDescription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'includeDescription'
        ],
        'reportDateFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reportDateFrom'
        ],
        'reportDateTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reportDateTo'
        ],
        'timeFrame' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'timeFrame'
        ],
        'changedFieldSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'changedFieldSelector'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
