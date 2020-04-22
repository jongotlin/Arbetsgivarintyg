<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_CompensationBlock
{

    /**
     * @var boolean $IngattAvtal
     */
    protected $IngattAvtal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIngattAvtal()
    {
      return $this->IngattAvtal;
    }

    /**
     * @param boolean $IngattAvtal
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompensationBlock
     */
    public function setIngattAvtal($IngattAvtal)
    {
      $this->IngattAvtal = $IngattAvtal;
      return $this;
    }

}
