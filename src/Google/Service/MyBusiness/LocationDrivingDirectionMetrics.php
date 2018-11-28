<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:29
 */


class Google_Service_MyBusiness_LocationDrivingDirectionMetrics extends Google_Collection
{
    protected $collection_key = 'topDirectionSources';
    protected $internal_gapi_mappings = array(
    );
    public $locationName;
    public $timeZone;
    protected $topDirectionSourcesType = 'Google_Service_MyBusiness_TopDirectionSources';
    protected $topDirectionSourcesDataType = 'array';


    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }
    public function getLocationName()
    {
        return $this->locationName;
    }
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
    public function getTimeZone()
    {
        return $this->timeZone;
    }
    public function setTopDirectionSources($topDirectionSources)
    {
        $this->topDirectionSources = $topDirectionSources;
    }
    public function getTopDirectionSources()
    {
        return $this->topDirectionSources;
    }
}