<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_ExtraInformationBlock
{

    /**
     * @var OvrigUpplysning $OvrigUpplysning
     */
    protected $OvrigUpplysning = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OvrigUpplysning
     */
    public function getOvrigUpplysning()
    {
      return $this->OvrigUpplysning;
    }

    /**
     * @param OvrigUpplysning $OvrigUpplysning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_ExtraInformationBlock
     */
    public function setOvrigUpplysning($OvrigUpplysning)
    {
      $this->OvrigUpplysning = $OvrigUpplysning;
      return $this;
    }

}
