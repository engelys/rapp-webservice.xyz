<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $SourceSaleTemplateID
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoListMinActiveItemsType $KeepMinActive
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule
 */
class SellingManagerAutoListType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SourceSaleTemplateID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SourceSaleTemplateID'
        ],
        'KeepMinActive' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoListMinActiveItemsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'KeepMinActive'
        ],
        'ListAccordingToSchedule' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerAutoListAccordingToScheduleType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListAccordingToSchedule'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
