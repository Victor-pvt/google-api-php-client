<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 11.12.18
 * Time: 21:05
 */
class Google_Service_MyBusiness_Label extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $description;
    public $displayName;
    public $languageCode;


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }
    public function getLanguageCode()
    {
        return $this->languageCode;
    }
}