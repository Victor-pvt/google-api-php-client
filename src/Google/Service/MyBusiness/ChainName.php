<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 21:03
 */
class Google_Service_MyBusiness_ChainName extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $displayName;
    public $languageCode;


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