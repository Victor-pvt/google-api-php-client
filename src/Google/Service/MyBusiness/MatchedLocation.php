<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:24
 */


class Google_Service_MyBusiness_MatchedLocation extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $isExactMatch;
    protected $locationType = 'Google_Service_MyBusiness_Location';
    protected $locationDataType = '';


    public function setIsExactMatch($isExactMatch)
    {
        $this->isExactMatch = $isExactMatch;
    }
    public function getIsExactMatch()
    {
        return $this->isExactMatch;
    }
    public function setLocation(Google_Service_MyBusiness_Location $location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
}