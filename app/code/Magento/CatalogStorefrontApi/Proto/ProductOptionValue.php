<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.ProductOptionValue</code>
 */
class ProductOptionValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>string sort_order = 3;</code>
     */
    protected $sort_order = '';
    /**
     * Generated from protobuf field <code>bool default = 4;</code>
     */
    protected $default = false;
    /**
     * Generated from protobuf field <code>string image_url = 5;</code>
     */
    protected $image_url = '';
    /**
     * Generated from protobuf field <code>bool qty_mutability = 6;</code>
     */
    protected $qty_mutability = false;
    /**
     * Generated from protobuf field <code>float qty = 7;</code>
     */
    protected $qty = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $label
     *     @type string $sort_order
     *     @type bool $default
     *     @type string $image_url
     *     @type bool $qty_mutability
     *     @type float $qty
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, true);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sort_order = 3;</code>
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Generated from protobuf field <code>string sort_order = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkString($var, true);
        $this->sort_order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool default = 4;</code>
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Generated from protobuf field <code>bool default = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->default = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_url = 5;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>string image_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool qty_mutability = 6;</code>
     * @return bool
     */
    public function getQtyMutability()
    {
        return $this->qty_mutability;
    }

    /**
     * Generated from protobuf field <code>bool qty_mutability = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setQtyMutability($var)
    {
        GPBUtil::checkBool($var);
        $this->qty_mutability = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float qty = 7;</code>
     * @return float
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Generated from protobuf field <code>float qty = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setQty($var)
    {
        GPBUtil::checkFloat($var);
        $this->qty = $var;

        return $this;
    }
}
