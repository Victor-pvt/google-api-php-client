<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:13
 */



class Google_Service_MyBusiness_PointRadius extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $latlngType = 'Google_Service_MyBusiness_LatLng';
    protected $latlngDataType = '';
    public $radiusKm;


    public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
    {
        $this->latlng = $latlng;
    }
    public function getLatlng()
    {
        return $this->latlng;
    }
    public function setRadiusKm($radiusKm)
    {
        $this->radiusKm = $radiusKm;
    }
    public function getRadiusKm()
    {
        return $this->radiusKm;
    }
}