<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:23
 */

namespace AppBundle\GoogleMyBusiness\Model;


class Google_Service_MyBusiness_PhoneVerificationData extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $phoneNumber;


    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}