<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_ReasonEmploymentEndedBlock
{

    /**
     * @var Orsak $Orsak
     */
    protected $Orsak = null;

    /**
     * @var string $AnnanOrsak
     */
    protected $AnnanOrsak = null;

    /**
     * @var \DateTime $Beskedsdatum
     */
    protected $Beskedsdatum = null;

    /**
     * @var \DateTime $TidsbegransadAnstallningDatumBesked
     */
    protected $TidsbegransadAnstallningDatumBesked = null;

    
    public function __construct()
    {
    
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
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_ReasonEmploymentEndedBlock
     */
    public function setOrsak($Orsak)
    {
      $this->Orsak = $Orsak;
      return $this;
    }

    /**
     * @return string
     */
    public function getAnnanOrsak()
    {
      return $this->AnnanOrsak;
    }

    /**
     * @param string $AnnanOrsak
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_ReasonEmploymentEndedBlock
     */
    public function setAnnanOrsak($AnnanOrsak)
    {
      $this->AnnanOrsak = $AnnanOrsak;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeskedsdatum()
    {
      if ($this->Beskedsdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Beskedsdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Beskedsdatum
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_ReasonEmploymentEndedBlock
     */
    public function setBeskedsdatum(\DateTime $Beskedsdatum = null)
    {
      if ($Beskedsdatum == null) {
       $this->Beskedsdatum = null;
      } else {
        $this->Beskedsdatum = $Beskedsdatum->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTidsbegransadAnstallningDatumBesked()
    {
      if ($this->TidsbegransadAnstallningDatumBesked == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TidsbegransadAnstallningDatumBesked);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TidsbegransadAnstallningDatumBesked
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_ReasonEmploymentEndedBlock
     */
    public function setTidsbegransadAnstallningDatumBesked(\DateTime $TidsbegransadAnstallningDatumBesked = null)
    {
      if ($TidsbegransadAnstallningDatumBesked == null) {
       $this->TidsbegransadAnstallningDatumBesked = null;
      } else {
        $this->TidsbegransadAnstallningDatumBesked = $TidsbegransadAnstallningDatumBesked->format(\DateTime::ATOM);
      }
      return $this;
    }

}
