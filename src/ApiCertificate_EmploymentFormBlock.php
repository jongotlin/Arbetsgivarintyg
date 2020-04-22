<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_EmploymentFormBlock
{

    /**
     * @var \DateTime $TidsbegransadAnstallningSlutdatum
     */
    protected $TidsbegransadAnstallningSlutdatum = null;

    /**
     * @var \DateTime $ProvanstallningSlutdatum
     */
    protected $ProvanstallningSlutdatum = null;

    /**
     * @var AnstallningsformTyp $Typ
     */
    protected $Typ = null;

    /**
     * @param AnstallningsformTyp $Typ
     */
    public function __construct($Typ)
    {
      $this->Typ = $Typ;
    }

    /**
     * @return \DateTime
     */
    public function getTidsbegransadAnstallningSlutdatum()
    {
      if ($this->TidsbegransadAnstallningSlutdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TidsbegransadAnstallningSlutdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TidsbegransadAnstallningSlutdatum
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentFormBlock
     */
    public function setTidsbegransadAnstallningSlutdatum(\DateTime $TidsbegransadAnstallningSlutdatum = null)
    {
      if ($TidsbegransadAnstallningSlutdatum == null) {
       $this->TidsbegransadAnstallningSlutdatum = null;
      } else {
        $this->TidsbegransadAnstallningSlutdatum = $TidsbegransadAnstallningSlutdatum->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProvanstallningSlutdatum()
    {
      if ($this->ProvanstallningSlutdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ProvanstallningSlutdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ProvanstallningSlutdatum
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentFormBlock
     */
    public function setProvanstallningSlutdatum(\DateTime $ProvanstallningSlutdatum = null)
    {
      if ($ProvanstallningSlutdatum == null) {
       $this->ProvanstallningSlutdatum = null;
      } else {
        $this->ProvanstallningSlutdatum = $ProvanstallningSlutdatum->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return AnstallningsformTyp
     */
    public function getTyp()
    {
      return $this->Typ;
    }

    /**
     * @param AnstallningsformTyp $Typ
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_EmploymentFormBlock
     */
    public function setTyp($Typ)
    {
      $this->Typ = $Typ;
      return $this;
    }

}
