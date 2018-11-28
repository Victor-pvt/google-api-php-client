<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 20:45
 */
class Google_Service_MyBusiness_Reviewer extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $displayName;
    public $isAnonymous;
    public $profilePhotoUrl;


    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setIsAnonymous($isAnonymous)
    {
        $this->isAnonymous = $isAnonymous;
    }
    public function getIsAnonymous()
    {
        return $this->isAnonymous;
    }
    public function setProfilePhotoUrl($profilePhotoUrl)
    {
        $this->profilePhotoUrl = $profilePhotoUrl;
    }
    public function getProfilePhotoUrl()
    {
        return $this->profilePhotoUrl;
    }
}
