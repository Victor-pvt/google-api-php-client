<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 11.12.18
 * Time: 21:02
 */

class Google_Service_MyBusiness_RepeatedEnumAttributeValue extends Google_Collection
{
    protected $collection_key = 'unsetValues';
    protected $internal_gapi_mappings = [];
    public $setValues;
    public $unsetValues;


    public function setSetValues($setValues)
    {
        $this->setValues = $setValues;
    }
    public function getSetValues()
    {
        return $this->setValues;
    }
    public function setUnsetValues($unsetValues)
    {
        $this->unsetValues = $unsetValues;
    }
    public function getUnsetValues()
    {
        return $this->unsetValues;
    }
}