<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 19:15
 */

namespace AppBundle\GoogleMyBusiness\Model;

use AppBundle\GoogleMyBusiness\Model\Google_Service_MyBusiness_Date;

class Google_Service_MyBusiness_SpecialHourPeriod extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $closeTime;
    protected $endDateType = 'Google_Service_MyBusiness_Date';
    protected $endDateDataType = '';
    public $isClosed;
    public $openTime;
    protected $startDateType = 'Google_Service_MyBusiness_Date';
    protected $startDateDataType = '';


    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }
    public function getCloseTime()
    {
        return $this->closeTime;
    }
    public function setEndDate(Google_Service_MyBusiness_Date $endDate)
    {
        $this->endDate = $endDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    }
    public function getIsClosed()
    {
        return $this->isClosed;
    }
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;
    }
    public function getOpenTime()
    {
        return $this->openTime;
    }
    public function setStartDate(Google_Service_MyBusiness_Date $startDate)
    {
        $this->startDate = $startDate;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }
}