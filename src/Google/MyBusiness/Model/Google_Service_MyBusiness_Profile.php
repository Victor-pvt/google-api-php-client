<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:01
 */

namespace AppBundle\GoogleMyBusiness\Model;


class Google_Service_MyBusiness_Profile extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $description;


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
}