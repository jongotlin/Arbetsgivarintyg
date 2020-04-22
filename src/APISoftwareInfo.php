<?php

namespace JGI\Arbetsgivarintyg;

class APISoftwareInfo
{

    /**
     * @var string $Build
     */
    protected $Build = null;

    /**
     * @var Supplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var Version $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBuild()
    {
      return $this->Build;
    }

    /**
     * @param string $Build
     * @return \JGI\Arbetsgivarintyg\APISoftwareInfo
     */
    public function setBuild($Build)
    {
      $this->Build = $Build;
      return $this;
    }

    /**
     * @return Supplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param Supplier $Supplier
     * @return \JGI\Arbetsgivarintyg\APISoftwareInfo
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
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
     * @return \JGI\Arbetsgivarintyg\APISoftwareInfo
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
