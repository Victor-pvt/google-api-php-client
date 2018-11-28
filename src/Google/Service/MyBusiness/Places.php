<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:11
 */


class Google_Service_MyBusiness_Places extends Google_Collection
{
    protected $collection_key = 'placeInfos';
    protected $internal_gapi_mappings = [];
    protected $placeInfosType = 'Google_Service_MyBusiness_PlaceInfo';
    protected $placeInfosDataType = 'array';


    public function setPlaceInfos($placeInfos)
    {
        $this->placeInfos = $placeInfos;
    }
    public function getPlaceInfos()
    {
        return $this->placeInfos;
    }
}