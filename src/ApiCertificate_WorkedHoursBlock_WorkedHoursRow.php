<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_WorkedHoursBlock_WorkedHoursRow
{

    /**
     * @var float $Franvaro
     */
    protected $Franvaro = null;

    /**
     * @var int $Manad
     */
    protected $Manad = null;

    /**
     * @var float $Mertid
     */
    protected $Mertid = null;

    /**
     * @var float $Overtid
     */
    protected $Overtid = null;

    /**
     * @var float $ArbetadeTimmar
     */
    protected $ArbetadeTimmar = null;

    /**
     * @var int $Ar
     */
    protected $Ar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFranvaro()
    {
      return $this->Franvaro;
    }

    /**
     * @param float $Franvaro
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function setFranvaro($Franvaro)
    {
      $this->Franvaro = $Franvaro;
      return $this;
    }

    /**
     * @return int
     */
    public function getManad()
    {
      return $this->Manad;
    }

    /**
     * @param int $Manad
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function setManad($Manad)
    {
      $this->Manad = $Manad;
      return $this;
    }

    /**
     * @return float
     */
    public function getMertid()
    {
      return $this->Mertid;
    }

    /**
     * @param float $Mertid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function setMertid($Mertid)
    {
      $this->Mertid = $Mertid;
      return $this;
    }

    /**
     * @return float
     */
    public function getOvertid()
    {
      return $this->Overtid;
    }

    /**
     * @param float $Overtid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function setOvertid($Overtid)
    {
      $this->Overtid = $Overtid;
      return $this;
    }

    /**
     * @return float
     */
    public function getArbetadeTimmar()
    {
      return $this->ArbetadeTimmar;
    }

    /**
     * @param float $ArbetadeTimmar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function setArbetadeTimmar($ArbetadeTimmar)
    {
      $this->ArbetadeTimmar = $ArbetadeTimmar;
      return $this;
    }

    /**
     * @return int
     */
    public function getAr()
    {
      return $this->Ar;
    }

    /**
     * @param int $Ar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function setAr($Ar)
    {
      $this->Ar = $Ar;
      return $this;
    }

}
