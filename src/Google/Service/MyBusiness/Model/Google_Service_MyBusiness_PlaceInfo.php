<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:12
 */

namespace AppBundle\GoogleMyBusiness\Model;


class Google_Service_MyBusiness_PlaceInfo extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $name;
    public $placeId;


    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
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