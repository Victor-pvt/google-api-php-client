<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 16:13
 */

namespace AppBundle\GoogleMyBusiness\Collection;

use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_Admin;

class Google_Service_MyBusiness_ListLocationAdminsResponse extends Google_Collection
{
    protected $collection_key = 'admins';
    protected $internal_gapi_mappings = [];
    protected $adminsType = 'Google_Service_MyBusiness_Admin';
    protected $adminsDataType = 'array';


    public function setAdmins($admins)
    {
        $this->admins = $admins;
    }
    public function getAdmins()
    {
        return $this->admins;
    }
}