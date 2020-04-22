<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_WorkerBlock
{

    /**
     * @var Epostadress $Epostadress
     */
    protected $Epostadress = null;

    /**
     * @var Fornamn $Fornamn
     */
    protected $Fornamn = null;

    /**
     * @var Efternamn $Efternamn
     */
    protected $Efternamn = null;

    /**
     * @var Telefonnummer $Telefonnummer
     */
    protected $Telefonnummer = null;

    /**
     * @var boolean $SkickaSMS
     */
    protected $SkickaSMS = null;

    /**
     * @var Personnummer $Personnummer
     */
    protected $Personnummer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Epostadress
     */
    public function getEpostadress()
    {
      return $this->Epostadress;
    }

    /**
     * @param Epostadress $Epostadress
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock
     */
    public function setEpostadress($Epostadress)
    {
      $this->Epostadress = $Epostadress;
      return $this;
    }

    /**
     * @return Fornamn
     */
    public function getFornamn()
    {
      return $this->Fornamn;
    }

    /**
     * @param Fornamn $Fornamn
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock
     */
    public function setFornamn($Fornamn)
    {
      $this->Fornamn = $Fornamn;
      return $this;
    }

    /**
     * @return Efternamn
     */
    public function getEfternamn()
    {
      return $this->Efternamn;
    }

    /**
     * @param Efternamn $Efternamn
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock
     */
    public function setEfternamn($Efternamn)
    {
      $this->Efternamn = $Efternamn;
      return $this;
    }

    /**
     * @return Telefonnummer
     */
    public function getTelefonnummer()
    {
      return $this->Telefonnummer;
    }

    /**
     * @param Telefonnummer $Telefonnummer
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock
     */
    public function setTelefonnummer($Telefonnummer)
    {
      $this->Telefonnummer = $Telefonnummer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkickaSMS()
    {
      return $this->SkickaSMS;
    }

    /**
     * @param boolean $SkickaSMS
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock
     */
    public function setSkickaSMS($SkickaSMS)
    {
      $this->SkickaSMS = $SkickaSMS;
      return $this;
    }

    /**
     * @return Personnummer
     */
    public function getPersonnummer()
    {
      return $this->Personnummer;
    }

    /**
     * @param Personnummer $Personnummer
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkerBlock
     */
    public function setPersonnummer($Personnummer)
    {
      $this->Personnummer = $Personnummer;
      return $this;
    }

}
