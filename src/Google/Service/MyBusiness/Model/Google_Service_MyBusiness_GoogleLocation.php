<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 0:07
 */

namespace AppBundle\GoogleMyBusiness\Model;

use AppBundle\GoogleMyBusiness\Collection\Google_Service_MyBusiness_Location;

/**
 * Class Google_Service_MyBusiness_GoogleLocation
 * @package AppBundle\GoogleMyBusiness\Model
 */
class Google_Service_MyBusiness_GoogleLocation extends \Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $locationType = 'Google_Service_MyBusiness_Location';
    protected $locationDataType = '';
    public $name;
    public $requestAdminRightsUrl;


    public function setLocation(Google_Service_MyBusiness_Location $location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRequestAdminRightsUrl($requestAdminRightsUrl)
    {
        $this->requestAdminRightsUrl = $requestAdminRightsUrl;
    }
    public function getRequestAdminRightsUrl()
    {
        return $this->requestAdminRightsUrl;
    }
}