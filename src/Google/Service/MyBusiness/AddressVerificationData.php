<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:21
 */


class Google_Service_MyBusiness_AddressVerificationData extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $addressType = 'Google_Service_MyBusiness_PostalAddress';
    protected $addressDataType = '';
    public $businessName;


    public function setAddress(Google_Service_MyBusiness_PostalAddress $address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
    }
    public function getBusinessName()
    {
        return $this->businessName;
    }
}