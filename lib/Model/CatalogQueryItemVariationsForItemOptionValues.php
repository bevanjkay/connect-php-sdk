<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogQueryItemVariationsForItemOptionValues Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class CatalogQueryItemVariationsForItemOptionValues implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'item_option_value_ids' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'item_option_value_ids' => 'item_option_value_ids'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'item_option_value_ids' => 'setItemOptionValueIds'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'item_option_value_ids' => 'getItemOptionValueIds'
    );
  
    /**
      * $item_option_value_ids A set of `CatalogItemOptionValue` IDs to be used to find associated `CatalogItemVariation`s. All ItemVariations that contain all of the given Item Option Values (in any order) will be returned.
      * @var string[]
      */
    protected $item_option_value_ids;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["item_option_value_ids"])) {
              $this->item_option_value_ids = $data["item_option_value_ids"];
            } else {
              $this->item_option_value_ids = null;
            }
        }
    }
    /**
     * Gets item_option_value_ids
     * @return string[]
     */
    public function getItemOptionValueIds()
    {
        return $this->item_option_value_ids;
    }
  
    /**
     * Sets item_option_value_ids
     * @param string[] $item_option_value_ids A set of `CatalogItemOptionValue` IDs to be used to find associated `CatalogItemVariation`s. All ItemVariations that contain all of the given Item Option Values (in any order) will be returned.
     * @return $this
     */
    public function setItemOptionValueIds($item_option_value_ids)
    {
        $this->item_option_value_ids = $item_option_value_ids;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
