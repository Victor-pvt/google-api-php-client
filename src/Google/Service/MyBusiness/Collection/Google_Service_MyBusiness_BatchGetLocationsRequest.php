<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:22
 */

namespace AppBundle\GoogleMyBusiness\Collection;


class Google_Service_MyBusiness_BatchGetLocationsRequest extends \Google_Collection
{
    protected $collection_key = 'locationNames';
    protected $internal_gapi_mappings = [];
    public $locationNames;


    public function setLocationNames($locationNames)
    {
        $this->locationNames = $locationNames;
    }
    public function getLocationNames()
    {
        return $this->locationNames;
    }
}