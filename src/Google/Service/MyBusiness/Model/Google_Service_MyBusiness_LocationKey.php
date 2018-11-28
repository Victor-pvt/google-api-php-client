<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 18:53
 */

namespace AppBundle\GoogleMyBusiness\Model;


class Google_Service_MyBusiness_LocationKey extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $explicitNoPlaceId;
    public $placeId;
    public $plusPageId;
    public $requestId;


    public function setExplicitNoPlaceId($explicitNoPlaceId)
    {
        $this->explicitNoPlaceId = $explicitNoPlaceId;
    }
    public function getExplicitNoPlaceId()
    {
        return $this->explicitNoPlaceId;
    }
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }
    public function getPlaceId()
    {
        return $this->placeId;
    }
    public function setPlusPageId($plusPageId)
    {
        $this->plusPageId = $plusPageId;
    }
    public function getPlusPageId()
    {
        return $this->plusPageId;
    }
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }
    public function getRequestId()
    {
        return $this->requestId;
    }
}