<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:30
 */

namespace AppBundle\GoogleMyBusiness\Model;

use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_LatLng;

class Google_Service_MyBusiness_RegionCount extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $count;
    public $label;
    protected $latlngType = 'Google_Service_MyBusiness_LatLng';
    protected $latlngDataType = '';


    public function setCount($count)
    {
        $this->count = $count;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
    {
        $this->latlng = $latlng;
    }
    public function getLatlng()
    {
        return $this->latlng;
    }
}