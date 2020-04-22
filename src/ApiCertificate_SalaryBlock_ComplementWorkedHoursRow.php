<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
{

    /**
     * @var float $Belopp
     */
    protected $Belopp = null;

    /**
     * @var float $Dagar
     */
    protected $Dagar = null;

    /**
     * @var Beskrivning $Beskrivning
     */
    protected $Beskrivning = null;

    /**
     * @var float $Timmar
     */
    protected $Timmar = null;

    /**
     * @var int $Manad
     */
    protected $Manad = null;

    /**
     * @var LoneTyper $Lonetillaggstyp
     */
    protected $Lonetillaggstyp = null;

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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setBelopp($Belopp)
    {
      $this->Belopp = $Belopp;
      return $this;
    }

    /**
     * @return float
     */
    public function getDagar()
    {
      return $this->Dagar;
    }

    /**
     * @param float $Dagar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setDagar($Dagar)
    {
      $this->Dagar = $Dagar;
      return $this;
    }

    /**
     * @return Beskrivning
     */
    public function getBeskrivning()
    {
      return $this->Beskrivning;
    }

    /**
     * @param Beskrivning $Beskrivning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setBeskrivning($Beskrivning)
    {
      $this->Beskrivning = $Beskrivning;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimmar()
    {
      return $this->Timmar;
    }

    /**
     * @param float $Timmar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setTimmar($Timmar)
    {
      $this->Timmar = $Timmar;
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setManad($Manad)
    {
      $this->Manad = $Manad;
      return $this;
    }

    /**
     * @return LoneTyper
     */
    public function getLonetillaggstyp()
    {
      return $this->Lonetillaggstyp;
    }

    /**
     * @param LoneTyper $Lonetillaggstyp
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setLonetillaggstyp($Lonetillaggstyp)
    {
      $this->Lonetillaggstyp = $Lonetillaggstyp;
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SalaryBlock_ComplementWorkedHoursRow
     */
    public function setAr($Ar)
    {
      $this->Ar = $Ar;
      return $this;
    }

}
