<?php

namespace JGI\Arbetsgivarintyg;

class APIAGPVersion
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param Version $Version
     * @return \JGI\Arbetsgivarintyg\APIAGPVersion
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
