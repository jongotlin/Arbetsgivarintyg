<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_TeachersSalaryBlock
{

    /**
     * @var boolean $Uppehallslon
     */
    protected $Uppehallslon = null;

    /**
     * @var float $UppehallslonBelopp
     */
    protected $UppehallslonBelopp = null;

    /**
     * @var boolean $Ferielon
     */
    protected $Ferielon = null;

    /**
     * @var float $FerielonBelopp
     */
    protected $FerielonBelopp = null;

    /**
     * @var int $FerielonDagar
     */
    protected $FerielonDagar = null;

    /**
     * @var DatumOmfattning $SemesterDatumOmfattning
     */
    protected $SemesterDatumOmfattning = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getUppehallslon()
    {
      return $this->Uppehallslon;
    }

    /**
     * @param boolean $Uppehallslon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock
     */
    public function setUppehallslon($Uppehallslon)
    {
      $this->Uppehallslon = $Uppehallslon;
      return $this;
    }

    /**
     * @return float
     */
    public function getUppehallslonBelopp()
    {
      return $this->UppehallslonBelopp;
    }

    /**
     * @param float $UppehallslonBelopp
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock
     */
    public function setUppehallslonBelopp($UppehallslonBelopp)
    {
      $this->UppehallslonBelopp = $UppehallslonBelopp;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFerielon()
    {
      return $this->Ferielon;
    }

    /**
     * @param boolean $Ferielon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock
     */
    public function setFerielon($Ferielon)
    {
      $this->Ferielon = $Ferielon;
      return $this;
    }

    /**
     * @return float
     */
    public function getFerielonBelopp()
    {
      return $this->FerielonBelopp;
    }

    /**
     * @param float $FerielonBelopp
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock
     */
    public function setFerielonBelopp($FerielonBelopp)
    {
      $this->FerielonBelopp = $FerielonBelopp;
      return $this;
    }

    /**
     * @return int
     */
    public function getFerielonDagar()
    {
      return $this->FerielonDagar;
    }

    /**
     * @param int $FerielonDagar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock
     */
    public function setFerielonDagar($FerielonDagar)
    {
      $this->FerielonDagar = $FerielonDagar;
      return $this;
    }

    /**
     * @return DatumOmfattning
     */
    public function getSemesterDatumOmfattning()
    {
      return $this->SemesterDatumOmfattning;
    }

    /**
     * @param DatumOmfattning $SemesterDatumOmfattning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_TeachersSalaryBlock
     */
    public function setSemesterDatumOmfattning($SemesterDatumOmfattning)
    {
      $this->SemesterDatumOmfattning = $SemesterDatumOmfattning;
      return $this;
    }

}
