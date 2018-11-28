<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:29
 */


class Google_Service_MyBusiness_FindMatchingLocationsRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $languageCode;
    public $maxCacheDuration;
    public $numResults;


    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }
    public function getLanguageCode()
    {
        return $this->languageCode;
    }
    public function setMaxCacheDuration($maxCacheDuration)
    {
        $this->maxCacheDuration = $maxCacheDuration;
    }
    public function getMaxCacheDuration()
    {
        return $this->maxCacheDuration;
    }
    public function setNumResults($numResults)
    {
        $this->numResults = $numResults;
    }
    public function getNumResults()
    {
        return $this->numResults;
    }
}