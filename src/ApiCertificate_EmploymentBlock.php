<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_EmploymentBlock
{

    /**
     * @var Befattning $Befattning
     */
    protected $Befattning = null;

    /**
     * @var float $ArbetstidOmfattning
     */
    protected $ArbetstidOmfattning = null;

    /**
     * @var DatumOmfattning $AnstallningstidPeriod
     */
    protected $AnstallningstidPeriod = null;

    /**
     * @var boolean $Tjanstledig
     */
    protected $Tjanstledig = null;

    /**
     * @var ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow $Tjanstledigheter
     */
    protected $Tjanstledigheter = null;

    /**
     * @var boolean $FortfarandeAnstalld
     */
    protected $FortfarandeAnstalld = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Befattning
     */
    public function getBefattning()
    {
      return $this->Befattning;
    }

    /**
     * @param Befattning $Befattning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock
     */
    public function setBefattning($Befattning)
    {
      $this->Befattning = $Befattning;
      return $this;
    }

    /**
     * @return float
     */
    public function getArbetstidOmfattning()
    {
      return $this->ArbetstidOmfattning;
    }

    /**
     * @param float $ArbetstidOmfattning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock
     */
    public function setArbetstidOmfattning($ArbetstidOmfattning)
    {
      $this->ArbetstidOmfattning = $ArbetstidOmfattning;
      return $this;
    }

    /**
     * @return DatumOmfattning
     */
    public function getAnstallningstidPeriod()
    {
      return $this->AnstallningstidPeriod;
    }

    /**
     * @param DatumOmfattning $AnstallningstidPeriod
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock
     */
    public function setAnstallningstidPeriod($AnstallningstidPeriod)
    {
      $this->AnstallningstidPeriod = $AnstallningstidPeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTjanstledig()
    {
      return $this->Tjanstledig;
    }

    /**
     * @param boolean $Tjanstledig
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock
     */
    public function setTjanstledig($Tjanstledig)
    {
      $this->Tjanstledig = $Tjanstledig;
      return $this;
    }

    /**
     * @return ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow
     */
    public function getTjanstledigheter()
    {
      return $this->Tjanstledigheter;
    }

    /**
     * @param ArrayOfApiCertificate_EmploymentBlock_LeaveOfAbscenceRow $Tjanstledigheter
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock
     */
    public function setTjanstledigheter($Tjanstledigheter)
    {
      $this->Tjanstledigheter = $Tjanstledigheter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFortfarandeAnstalld()
    {
      return $this->FortfarandeAnstalld;
    }

    /**
     * @param boolean $FortfarandeAnstalld
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentBlock
     */
    public function setFortfarandeAnstalld($FortfarandeAnstalld)
    {
      $this->FortfarandeAnstalld = $FortfarandeAnstalld;
      return $this;
    }

}
