<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.11.18
 * Time: 15:34
 */

namespace AppBundle\GoogleMyBusiness\Collection;


class Google_Service_MyBusiness_FetchVerificationOptionsResponse extends Google_Collection
{
    protected $collection_key = 'options';
    protected $internal_gapi_mappings = [];
    protected $optionsType = 'Google_Service_MyBusiness_VerificationOption';
    protected $optionsDataType = 'array';


    public function setOptions($options)
    {
        $this->options = $options;
    }
    public function getOptions()
    {
        return $this->options;
    }
}