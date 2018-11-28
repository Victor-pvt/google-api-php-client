<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 26.11.18
 * Time: 21:18
 */

namespace AppBundle\GoogleMyBusiness\Model;

use Google_Model;

class Google_Service_MyBusiness_AddressInput extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $mailerContactName;


    public function setMailerContactName($mailerContactName)
    {
        $this->mailerContactName = $mailerContactName;
    }
    public function getMailerContactName()
    {
        return $this->mailerContactName;
    }
}