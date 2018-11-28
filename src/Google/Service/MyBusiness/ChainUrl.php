<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 21:04
 */
class Google_Service_MyBusiness_ChainUrl extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
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