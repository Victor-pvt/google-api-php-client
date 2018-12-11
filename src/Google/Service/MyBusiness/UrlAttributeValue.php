<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 11.12.18
 * Time: 21:03
 */
class Google_Service_MyBusiness_UrlAttributeValue extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $url;


    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}