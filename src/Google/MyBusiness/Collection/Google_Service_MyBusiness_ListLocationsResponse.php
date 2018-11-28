<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 15:49
 */

namespace AppBundle\GoogleMyBusiness\Collection;

use AppBundle\GoogleMyBusiness\Collection\Google_Service_MyBusiness_Location;

class Google_Service_MyBusiness_ListLocationsResponse extends Google_Collection
{
    protected $collection_key = 'locations';
    protected $internal_gapi_mappings = [];
    protected $locationsType = 'Google_Service_MyBusiness_Location';
    protected $locationsDataType = 'array';
    public $nextPageToken;
    public $totalSize;


    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setTotalSize($totalSize)
    {
        $this->totalSize = $totalSize;
    }
    public function getTotalSize()
    {
        return $this->totalSize;
    }
}