<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:00
 */





class Google_Service_MyBusiness_Category extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $categoryId;
    public $displayName;


    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
}
