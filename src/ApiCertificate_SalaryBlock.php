<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_SalaryBlock
{

    /**
     * @var float $Belopp
     */
    protected $Belopp = null;

    /**
     * @var ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow $AndraLonetillaggLista
     */
    protected $AndraLonetillaggLista = null;

    /**
     * @var boolean $ExtraLon
     */
    protected $ExtraLon = null;

    /**
     * @var boolean $VarierandeTimlon
     */
    protected $VarierandeTimlon = null;

    /**
     * @var float $Mertidstillagg
     */
    protected $Mertidstillagg = null;

    /**
     * @var float $Overtidstillagg
     */
    protected $Overtidstillagg = null;

    /**
     * @var LoneTyp $TypAvLon
     */
    protected $TypAvLon = null;

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
    public function getBelopp()
    {
      return $this->Belopp;
    }

    /**
     * @param float $Belopp
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setBelopp($Belopp)
    {
      $this->Belopp = $Belopp;
      return $this;
    }

    /**
     * @return ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function getAndraLonetillaggLista()
    {
      return $this->AndraLonetillaggLista;
    }

    /**
     * @param ArrayOfApiCertificate_SalaryBlock_ComplementWorkedHoursRow $AndraLonetillaggLista
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setAndraLonetillaggLista($AndraLonetillaggLista)
    {
      $this->AndraLonetillaggLista = $AndraLonetillaggLista;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtraLon()
    {
      return $this->ExtraLon;
    }

    /**
     * @param boolean $ExtraLon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setExtraLon($ExtraLon)
    {
      $this->ExtraLon = $ExtraLon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVarierandeTimlon()
    {
      return $this->VarierandeTimlon;
    }

    /**
     * @param boolean $VarierandeTimlon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setVarierandeTimlon($VarierandeTimlon)
    {
      $this->VarierandeTimlon = $VarierandeTimlon;
      return $this;
    }

    /**
     * @return float
     */
    public function getMertidstillagg()
    {
      return $this->Mertidstillagg;
    }

    /**
     * @param float $Mertidstillagg
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setMertidstillagg($Mertidstillagg)
    {
      $this->Mertidstillagg = $Mertidstillagg;
      return $this;
    }

    /**
     * @return float
     */
    public function getOvertidstillagg()
    {
      return $this->Overtidstillagg;
    }

    /**
     * @param float $Overtidstillagg
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setOvertidstillagg($Overtidstillagg)
    {
      $this->Overtidstillagg = $Overtidstillagg;
      return $this;
    }

    /**
     * @return LoneTyp
     */
    public function getTypAvLon()
    {
      return $this->TypAvLon;
    }

    /**
     * @param LoneTyp $TypAvLon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setTypAvLon($TypAvLon)
    {
      $this->TypAvLon = $TypAvLon;
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock
     */
    public function setAr($Ar)
    {
      $this->Ar = $Ar;
      return $this;
    }

}
