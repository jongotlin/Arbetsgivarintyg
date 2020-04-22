<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
{

    /**
     * @var int $OmfattningProcent
     */
    protected $OmfattningProcent = null;

    /**
     * @var DatumOmfattning $Period
     */
    protected $Period = null;

    /**
     * @var Orsak $Orsak
     */
    protected $Orsak = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOmfattningProcent()
    {
      return $this->OmfattningProcent;
    }

    /**
     * @param int $OmfattningProcent
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
     */
    public function setOmfattningProcent($OmfattningProcent)
    {
      $this->OmfattningProcent = $OmfattningProcent;
      return $this;
    }

    /**
     * @return DatumOmfattning
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param DatumOmfattning $Period
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return Orsak
     */
    public function getOrsak()
    {
      return $this->Orsak;
    }

    /**
     * @param Orsak $Orsak
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
     */
    public function setOrsak($Orsak)
    {
      $this->Orsak = $Orsak;
      return $this;
    }

}
