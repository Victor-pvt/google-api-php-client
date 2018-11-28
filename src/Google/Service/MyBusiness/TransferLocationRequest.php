<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 10.09.18
 * Time: 20:32
 */


class Google_Service_MyBusiness_TransferLocationRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $toAccount;


    public function setToAccount($toAccount)
    {
        $this->toAccount = $toAccount;
    }
    public function getToAccount()
    {
        return $this->toAccount;
    }
}