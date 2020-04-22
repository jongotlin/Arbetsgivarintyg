<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_SpecificEmploymentInformationBlock
{

    /**
     * @var boolean $AnstalldBemanning
     */
    protected $AnstalldBemanning = null;

    /**
     * @var boolean $Skiftarbete
     */
    protected $Skiftarbete = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAnstalldBemanning()
    {
      return $this->AnstalldBemanning;
    }

    /**
     * @param boolean $AnstalldBemanning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SpecificEmploymentInformationBlock
     */
    public function setAnstalldBemanning($AnstalldBemanning)
    {
      $this->AnstalldBemanning = $AnstalldBemanning;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkiftarbete()
    {
      return $this->Skiftarbete;
    }

    /**
     * @param boolean $Skiftarbete
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_SpecificEmploymentInformationBlock
     */
    public function setSkiftarbete($Skiftarbete)
    {
      $this->Skiftarbete = $Skiftarbete;
      return $this;
    }

}
