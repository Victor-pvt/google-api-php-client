<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 26.11.18
 * Time: 22:08
 */

namespace AppBundle\GoogleMyBusiness\Model;

class Google_Service_MyBusiness_AccountState extends \Google_Model
{
    protected $internal_gapi_mappings = [];
    public $status;


    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
}