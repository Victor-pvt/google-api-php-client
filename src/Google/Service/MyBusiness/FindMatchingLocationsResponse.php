<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 15:38
 */


class Google_Service_MyBusiness_FindMatchingLocationsResponse extends Google_Collection
{
    protected $collection_key = 'matchedLocations';
    protected $internal_gapi_mappings = [];
    public $matchTime;
    protected $matchedLocationsType = 'Google_Service_MyBusiness_MatchedLocation';
    protected $matchedLocationsDataType = 'array';


    public function setMatchTime($matchTime)
    {
        $this->matchTime = $matchTime;
    }
    public function getMatchTime()
    {
        return $this->matchTime;
    }
    public function setMatchedLocations($matchedLocations)
    {
        $this->matchedLocations = $matchedLocations;
    }
    public function getMatchedLocations()
    {
        return $this->matchedLocations;
    }
}