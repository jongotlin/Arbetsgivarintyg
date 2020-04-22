<?php

namespace JGI\Arbetsgivarintyg;

class ImportRequest
{

    /**
     * @var APIAGPVersion $AGPVersion
     */
    protected $AGPVersion = null;

    /**
     * @var ApiAuthentication $Autentisering
     */
    protected $Autentisering = null;

    /**
     * @var ArrayOfApiCertificate $Arbetsgivarintyg
     */
    protected $Arbetsgivarintyg = null;

    /**
     * @var APISoftwareInfo $SoftwareInfo
     */
    protected $SoftwareInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return APIAGPVersion
     */
    public function getAGPVersion()
    {
      return $this->AGPVersion;
    }

    /**
     * @param APIAGPVersion $AGPVersion
     * @return \JGI\Arbetsgivarintyg\ImportRequest
     */
    public function setAGPVersion($AGPVersion)
    {
      $this->AGPVersion = $AGPVersion;
      return $this;
    }

    /**
     * @return ApiAuthentication
     */
    public function getAutentisering()
    {
      return $this->Autentisering;
    }

    /**
     * @param ApiAuthentication $Autentisering
     * @return \JGI\Arbetsgivarintyg\ImportRequest
     */
    public function setAutentisering($Autentisering)
    {
      $this->Autentisering = $Autentisering;
      return $this;
    }

    /**
     * @return ArrayOfApiCertificate
     */
    public function getArbetsgivarintyg()
    {
      return $this->Arbetsgivarintyg;
    }

    /**
     * @param ArrayOfApiCertificate $Arbetsgivarintyg
     * @return \JGI\Arbetsgivarintyg\ImportRequest
     */
    public function setArbetsgivarintyg($Arbetsgivarintyg)
    {
      $this->Arbetsgivarintyg = $Arbetsgivarintyg;
      return $this;
    }

    /**
     * @return APISoftwareInfo
     */
    public function getSoftwareInfo()
    {
      return $this->SoftwareInfo;
    }

    /**
     * @param APISoftwareInfo $SoftwareInfo
     * @return \JGI\Arbetsgivarintyg\ImportRequest
     */
    public function setSoftwareInfo($SoftwareInfo)
    {
      $this->SoftwareInfo = $SoftwareInfo;
      return $this;
    }

}
