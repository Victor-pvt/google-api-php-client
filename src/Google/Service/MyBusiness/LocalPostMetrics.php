<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28.11.18
 * Time: 20:53
 */
class Google_Service_MyBusiness_LocalPostMetrics extends Google_Collection
{
    protected $collection_key = 'metricValues';
    protected $internal_gapi_mappings = array(
    );
    public $localPostName;
    protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
    protected $metricValuesDataType = 'array';


    public function setLocalPostName($localPostName)
    {
        $this->localPostName = $localPostName;
    }
    public function getLocalPostName()
    {
        return $this->localPostName;
    }
    public function setMetricValues($metricValues)
    {
        $this->metricValues = $metricValues;
    }
    public function getMetricValues()
    {
        return $this->metricValues;
    }
}