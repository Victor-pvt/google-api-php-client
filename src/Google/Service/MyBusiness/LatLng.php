<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 18:52
 */

class Google_Service_MyBusiness_LatLng extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $latitude;
    public $longitude;


    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
}