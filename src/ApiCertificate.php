<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate
{

    /**
     * @var ApiCertificate_CompanyBlock $Arbetsgivare
     */
    protected $Arbetsgivare = null;

    /**
     * @var ApiCertificate_CompensationBlock $Avgangsvederlag
     */
    protected $Avgangsvederlag = null;

    /**
     * @var ApiCertificate_EmploymentBlock $Anstallning
     */
    protected $Anstallning = null;

    /**
     * @var ApiCertificate_EmploymentFormBlock $Anstallningsform
     */
    protected $Anstallningsform = null;

    /**
     * @var ApiCertificate_OfferOfContinuedWorkBlock $ErbjudandeOmFortsattArbete
     */
    protected $ErbjudandeOmFortsattArbete = null;

    /**
     * @var ApiCertificate_ExtraInformationBlock $OvrigUpplysning
     */
    protected $OvrigUpplysning = null;

    /**
     * @var ApiCertificate_ReasonEmploymentEndedBlock $Upphorandeorsak
     */
    protected $Upphorandeorsak = null;

    /**
     * @var ApiCertificate_SalaryBlock $Lon
     */
    protected $Lon = null;

    /**
     * @var ApiCertificate_SpecificEmploymentInformationBlock $SpeciellAnstallningsinformation
     */
    protected $SpeciellAnstallningsinformation = null;

    /**
     * @var ApiCertificate_TeachersSalaryBlock $Lararlon
     */
    protected $Lararlon = null;

    /**
     * @var ApiCertificate_WorkedHoursBlock $ArbetadTid
     */
    protected $ArbetadTid = null;

    /**
     * @var ApiCertificate_WorkerBlock $Arbetstagare
     */
    protected $Arbetstagare = null;

    /**
     * @var ApiCertificate_WorkingHoursBlock $Arbetstid
     */
    protected $Arbetstid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApiCertificate_CompanyBlock
     */
    public function getArbetsgivare()
    {
      return $this->Arbetsgivare;
    }

    /**
     * @param ApiCertificate_CompanyBlock $Arbetsgivare
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setArbetsgivare($Arbetsgivare)
    {
      $this->Arbetsgivare = $Arbetsgivare;
      return $this;
    }

    /**
     * @return ApiCertificate_CompensationBlock
     */
    public function getAvgangsvederlag()
    {
      return $this->Avgangsvederlag;
    }

    /**
     * @param ApiCertificate_CompensationBlock $Avgangsvederlag
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setAvgangsvederlag($Avgangsvederlag)
    {
      $this->Avgangsvederlag = $Avgangsvederlag;
      return $this;
    }

    /**
     * @return ApiCertificate_EmploymentBlock
     */
    public function getAnstallning()
    {
      return $this->Anstallning;
    }

    /**
     * @param ApiCertificate_EmploymentBlock $Anstallning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setAnstallning($Anstallning)
    {
      $this->Anstallning = $Anstallning;
      return $this;
    }

    /**
     * @return ApiCertificate_EmploymentFormBlock
     */
    public function getAnstallningsform()
    {
      return $this->Anstallningsform;
    }

    /**
     * @param ApiCertificate_EmploymentFormBlock $Anstallningsform
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setAnstallningsform($Anstallningsform)
    {
      $this->Anstallningsform = $Anstallningsform;
      return $this;
    }

    /**
     * @return ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function getErbjudandeOmFortsattArbete()
    {
      return $this->ErbjudandeOmFortsattArbete;
    }

    /**
     * @param ApiCertificate_OfferOfContinuedWorkBlock $ErbjudandeOmFortsattArbete
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setErbjudandeOmFortsattArbete($ErbjudandeOmFortsattArbete)
    {
      $this->ErbjudandeOmFortsattArbete = $ErbjudandeOmFortsattArbete;
      return $this;
    }

    /**
     * @return ApiCertificate_ExtraInformationBlock
     */
    public function getOvrigUpplysning()
    {
      return $this->OvrigUpplysning;
    }

    /**
     * @param ApiCertificate_ExtraInformationBlock $OvrigUpplysning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setOvrigUpplysning($OvrigUpplysning)
    {
      $this->OvrigUpplysning = $OvrigUpplysning;
      return $this;
    }

    /**
     * @return ApiCertificate_ReasonEmploymentEndedBlock
     */
    public function getUpphorandeorsak()
    {
      return $this->Upphorandeorsak;
    }

    /**
     * @param ApiCertificate_ReasonEmploymentEndedBlock $Upphorandeorsak
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setUpphorandeorsak($Upphorandeorsak)
    {
      $this->Upphorandeorsak = $Upphorandeorsak;
      return $this;
    }

    /**
     * @return ApiCertificate_SalaryBlock
     */
    public function getLon()
    {
      return $this->Lon;
    }

    /**
     * @param ApiCertificate_SalaryBlock $Lon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setLon($Lon)
    {
      $this->Lon = $Lon;
      return $this;
    }

    /**
     * @return ApiCertificate_SpecificEmploymentInformationBlock
     */
    public function getSpeciellAnstallningsinformation()
    {
      return $this->SpeciellAnstallningsinformation;
    }

    /**
     * @param ApiCertificate_SpecificEmploymentInformationBlock $SpeciellAnstallningsinformation
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setSpeciellAnstallningsinformation($SpeciellAnstallningsinformation)
    {
      $this->SpeciellAnstallningsinformation = $SpeciellAnstallningsinformation;
      return $this;
    }

    /**
     * @return ApiCertificate_TeachersSalaryBlock
     */
    public function getLararlon()
    {
      return $this->Lararlon;
    }

    /**
     * @param ApiCertificate_TeachersSalaryBlock $Lararlon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setLararlon($Lararlon)
    {
      $this->Lararlon = $Lararlon;
      return $this;
    }

    /**
     * @return ApiCertificate_WorkedHoursBlock
     */
    public function getArbetadTid()
    {
      return $this->ArbetadTid;
    }

    /**
     * @param ApiCertificate_WorkedHoursBlock $ArbetadTid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setArbetadTid($ArbetadTid)
    {
      $this->ArbetadTid = $ArbetadTid;
      return $this;
    }

    /**
     * @return ApiCertificate_WorkerBlock
     */
    public function getArbetstagare()
    {
      return $this->Arbetstagare;
    }

    /**
     * @param ApiCertificate_WorkerBlock $Arbetstagare
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setArbetstagare($Arbetstagare)
    {
      $this->Arbetstagare = $Arbetstagare;
      return $this;
    }

    /**
     * @return ApiCertificate_WorkingHoursBlock
     */
    public function getArbetstid()
    {
      return $this->Arbetstid;
    }

    /**
     * @param ApiCertificate_WorkingHoursBlock $Arbetstid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate
     */
    public function setArbetstid($Arbetstid)
    {
      $this->Arbetstid = $Arbetstid;
      return $this;
    }

}
