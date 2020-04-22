<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_CompanyBlock
{

    /**
     * @var Adress $Adress
     */
    protected $Adress = null;

    /**
     * @var Epostadress $Epostadress
     */
    protected $Epostadress = null;

    /**
     * @var Namn $Namn
     */
    protected $Namn = null;

    /**
     * @var Organisationsnummer $Organisationsnummer
     */
    protected $Organisationsnummer = null;

    /**
     * @var Telefonnummer $Telefonnummer
     */
    protected $Telefonnummer = null;

    /**
     * @var boolean $AnvandRedanRegistreradInformation
     */
    protected $AnvandRedanRegistreradInformation = null;

    /**
     * @var ApiCertificate_ExtraInformationBlock $OvrigUpplysning
     */
    protected $OvrigUpplysning = null;

    /**
     * @var Samtycke $Samtycke
     */
    protected $Samtycke = null;

    /**
     * @param Samtycke $Samtycke
     */
    public function __construct($Samtycke)
    {
      $this->Samtycke = $Samtycke;
    }

    /**
     * @return Adress
     */
    public function getAdress()
    {
      return $this->Adress;
    }

    /**
     * @param Adress $Adress
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setAdress($Adress)
    {
      $this->Adress = $Adress;
      return $this;
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setEpostadress($Epostadress)
    {
      $this->Epostadress = $Epostadress;
      return $this;
    }

    /**
     * @return Namn
     */
    public function getNamn()
    {
      return $this->Namn;
    }

    /**
     * @param Namn $Namn
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setNamn($Namn)
    {
      $this->Namn = $Namn;
      return $this;
    }

    /**
     * @return Organisationsnummer
     */
    public function getOrganisationsnummer()
    {
      return $this->Organisationsnummer;
    }

    /**
     * @param Organisationsnummer $Organisationsnummer
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setOrganisationsnummer($Organisationsnummer)
    {
      $this->Organisationsnummer = $Organisationsnummer;
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setTelefonnummer($Telefonnummer)
    {
      $this->Telefonnummer = $Telefonnummer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAnvandRedanRegistreradInformation()
    {
      return $this->AnvandRedanRegistreradInformation;
    }

    /**
     * @param boolean $AnvandRedanRegistreradInformation
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setAnvandRedanRegistreradInformation($AnvandRedanRegistreradInformation)
    {
      $this->AnvandRedanRegistreradInformation = $AnvandRedanRegistreradInformation;
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setOvrigUpplysning($OvrigUpplysning)
    {
      $this->OvrigUpplysning = $OvrigUpplysning;
      return $this;
    }

    /**
     * @return Samtycke
     */
    public function getSamtycke()
    {
      return $this->Samtycke;
    }

    /**
     * @param Samtycke $Samtycke
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_CompanyBlock
     */
    public function setSamtycke($Samtycke)
    {
      $this->Samtycke = $Samtycke;
      return $this;
    }

}
