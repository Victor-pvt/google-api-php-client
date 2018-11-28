<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 20:52
 */
class Google_Service_MyBusiness_ReportLocalPostInsightsResponse extends Google_Collection
{
    protected $collection_key = 'localPostMetrics';
    protected $internal_gapi_mappings = array(
    );
    protected $localPostMetricsType = 'Google_Service_MyBusiness_LocalPostMetrics';
    protected $localPostMetricsDataType = 'array';
    public $name;
    public $timeZone;


    public function setLocalPostMetrics($localPostMetrics)
    {
        $this->localPostMetrics = $localPostMetrics;
    }
    public function getLocalPostMetrics()
    {
        return $this->localPostMetrics;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}