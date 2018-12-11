<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 11.12.18
 * Time: 21:06
 */
class Google_Service_MyBusiness_Section extends Google_Collection
{
    protected $collection_key = 'labels';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_MyBusiness_Item';
    protected $itemsDataType = 'array';
    protected $labelsType = 'Google_Service_MyBusiness_Label';
    protected $labelsDataType = 'array';
    public $sectionId;


    public function setItems(Google_Service_MyBusiness_Item $items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setLabels(Google_Service_MyBusiness_Label $labels)
    {
        $this->labels = $labels;
    }
    public function getLabels()
    {
        return $this->labels;
    }
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
    }
    public function getSectionId()
    {
        return $this->sectionId;
    }
}