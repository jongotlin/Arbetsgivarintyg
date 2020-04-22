<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_WorkedHoursBlock
{

    /**
     * @var float $Undervisningstimmar
     */
    protected $Undervisningstimmar = null;

    /**
     * @var boolean $Sjuklon
     */
    protected $Sjuklon = null;

    /**
     * @var DatumOmfattning $ArbetadTidDatumOmfattning
     */
    protected $ArbetadTidDatumOmfattning = null;

    /**
     * @var boolean $Undervisningstid
     */
    protected $Undervisningstid = null;

    /**
     * @var ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow $ArbetadTidManader
     */
    protected $ArbetadTidManader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getUndervisningstimmar()
    {
      return $this->Undervisningstimmar;
    }

    /**
     * @param float $Undervisningstimmar
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock
     */
    public function setUndervisningstimmar($Undervisningstimmar)
    {
      $this->Undervisningstimmar = $Undervisningstimmar;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSjuklon()
    {
      return $this->Sjuklon;
    }

    /**
     * @param boolean $Sjuklon
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock
     */
    public function setSjuklon($Sjuklon)
    {
      $this->Sjuklon = $Sjuklon;
      return $this;
    }

    /**
     * @return DatumOmfattning
     */
    public function getArbetadTidDatumOmfattning()
    {
      return $this->ArbetadTidDatumOmfattning;
    }

    /**
     * @param DatumOmfattning $ArbetadTidDatumOmfattning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock
     */
    public function setArbetadTidDatumOmfattning($ArbetadTidDatumOmfattning)
    {
      $this->ArbetadTidDatumOmfattning = $ArbetadTidDatumOmfattning;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUndervisningstid()
    {
      return $this->Undervisningstid;
    }

    /**
     * @param boolean $Undervisningstid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock
     */
    public function setUndervisningstid($Undervisningstid)
    {
      $this->Undervisningstid = $Undervisningstid;
      return $this;
    }

    /**
     * @return ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow
     */
    public function getArbetadTidManader()
    {
      return $this->ArbetadTidManader;
    }

    /**
     * @param ArrayOfApiCertificate_WorkedHoursBlock_WorkedHoursRow $ArbetadTidManader
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_WorkedHoursBlock
     */
    public function setArbetadTidManader($ArbetadTidManader)
    {
      $this->ArbetadTidManader = $ArbetadTidManader;
      return $this;
    }

}
