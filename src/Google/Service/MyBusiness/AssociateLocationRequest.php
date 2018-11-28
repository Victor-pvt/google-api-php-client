<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:20
 */


class Google_Service_MyBusiness_AssociateLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $placeId;


    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }
    public function getPlaceId()
    {
        return $this->placeId;
    }
}