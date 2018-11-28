<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 18:51
 */


class Google_Service_MyBusiness_AdWordsLocationExtensions extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $adPhone;


    public function setAdPhone($adPhone)
    {
        $this->adPhone = $adPhone;
    }
    public function getAdPhone()
    {
        return $this->adPhone;
    }
}