<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 15:57
 */


class Google_Service_MyBusiness_VerifyLocationResponse extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $verificationType = 'Google_Service_MyBusiness_Verification';
    protected $verificationDataType = '';


    public function setVerification(Google_Service_MyBusiness_Verification $verification)
    {
        $this->verification = $verification;
    }
    public function getVerification()
    {
        return $this->verification;
    }
}