<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 15:27
 */

namespace AppBundle\GoogleMyBusiness\Collection;

use AppBundle\GoogleMyBusiness\Collection\Google_Service_MyBusiness_Location;

class Google_Service_MyBusiness_BatchGetLocationsResponse extends Google_Collection
{
    protected $collection_key = 'locations';
    protected $internal_gapi_mappings = [];
    protected $locationsType = 'Google_Service_MyBusiness_Location';
    protected $locationsDataType = 'array';


    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
}