<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 15:52
 */


class Google_Service_MyBusiness_ReportLocationInsightsResponse extends Google_Collection
{
    protected $collection_key = 'locationMetrics';
    protected $internal_gapi_mappings = [];
    protected $locationDrivingDirectionMetricsType = 'Google_Service_MyBusiness_LocationDrivingDirectionMetrics';
    protected $locationDrivingDirectionMetricsDataType = 'array';
    protected $locationMetricsType = 'Google_Service_MyBusiness_LocationMetrics';
    protected $locationMetricsDataType = 'array';


    public function setLocationDrivingDirectionMetrics($locationDrivingDirectionMetrics)
    {
        $this->locationDrivingDirectionMetrics = $locationDrivingDirectionMetrics;
    }
    public function getLocationDrivingDirectionMetrics()
    {
        return $this->locationDrivingDirectionMetrics;
    }
    public function setLocationMetrics($locationMetrics)
    {
        $this->locationMetrics = $locationMetrics;
    }
    public function getLocationMetrics()
    {
        return $this->locationMetrics;
    }
}