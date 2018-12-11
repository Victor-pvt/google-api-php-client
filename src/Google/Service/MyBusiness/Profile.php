<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:01
 */


class Google_Service_MyBusiness_Profile extends Google_Model
{
    protected $internal_gapi_mappings = [];
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