<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 18:56
 */

namespace AppBundle\GoogleMyBusiness\Model;


class Google_Service_MyBusiness_Duplicate extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $access;
    public $locationName;
    public $placeId;


    public function setAccess($access)
    {
        $this->access = $access;
    }
    public function getAccess()
    {
        return $this->access;
    }
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }
    public function getLocationName()
    {
        return $this->locationName;
    }
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }
    public function getPlaceId()
    {
        return $this->placeId;
    }
}