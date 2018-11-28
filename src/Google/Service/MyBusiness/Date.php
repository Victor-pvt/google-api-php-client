<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 18:59
 */




class Google_Service_MyBusiness_Date extends Google_Model
{
    protected $internal_gapi_mappings = [];
    public $day;
    public $month;
    public $year;


    public function setDay($day)
    {
        $this->day = $day;
    }
    public function getDay()
    {
        return $this->day;
    }
    public function setMonth($month)
    {
        $this->month = $month;
    }
    public function getMonth()
    {
        return $this->month;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }
}