<?php

namespace JGI\Arbetsgivarintyg;

class ApiCertificate_OfferOfContinuedWorkBlock
{

    /**
     * @var \DateTime $DatumAvbojtErbjudande
     */
    protected $DatumAvbojtErbjudande = null;

    /**
     * @var float $TimmarPerVeckaHeltid
     */
    protected $TimmarPerVeckaHeltid = null;

    /**
     * @var boolean $AccepteratErbjudande
     */
    protected $AccepteratErbjudande = null;

    /**
     * @var boolean $TillsvidareAnstallning
     */
    protected $TillsvidareAnstallning = null;

    /**
     * @var boolean $FinnsErbjudande
     */
    protected $FinnsErbjudande = null;

    /**
     * @var DatumOmfattning $FinnsErbjudandeOmfattning
     */
    protected $FinnsErbjudandeOmfattning = null;

    /**
     * @var float $TimmarPerVeckaDeltid
     */
    protected $TimmarPerVeckaDeltid = null;

    /**
     * @var float $ProcentAvHeltid
     */
    protected $ProcentAvHeltid = null;

    /**
     * @var ArbetstidTyp $Arbetstid
     */
    protected $Arbetstid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDatumAvbojtErbjudande()
    {
      if ($this->DatumAvbojtErbjudande == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAvbojtErbjudande);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAvbojtErbjudande
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setDatumAvbojtErbjudande(\DateTime $DatumAvbojtErbjudande = null)
    {
      if ($DatumAvbojtErbjudande == null) {
       $this->DatumAvbojtErbjudande = null;
      } else {
        $this->DatumAvbojtErbjudande = $DatumAvbojtErbjudande->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getTimmarPerVeckaHeltid()
    {
      return $this->TimmarPerVeckaHeltid;
    }

    /**
     * @param float $TimmarPerVeckaHeltid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setTimmarPerVeckaHeltid($TimmarPerVeckaHeltid)
    {
      $this->TimmarPerVeckaHeltid = $TimmarPerVeckaHeltid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccepteratErbjudande()
    {
      return $this->AccepteratErbjudande;
    }

    /**
     * @param boolean $AccepteratErbjudande
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setAccepteratErbjudande($AccepteratErbjudande)
    {
      $this->AccepteratErbjudande = $AccepteratErbjudande;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTillsvidareAnstallning()
    {
      return $this->TillsvidareAnstallning;
    }

    /**
     * @param boolean $TillsvidareAnstallning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setTillsvidareAnstallning($TillsvidareAnstallning)
    {
      $this->TillsvidareAnstallning = $TillsvidareAnstallning;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFinnsErbjudande()
    {
      return $this->FinnsErbjudande;
    }

    /**
     * @param boolean $FinnsErbjudande
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setFinnsErbjudande($FinnsErbjudande)
    {
      $this->FinnsErbjudande = $FinnsErbjudande;
      return $this;
    }

    /**
     * @return DatumOmfattning
     */
    public function getFinnsErbjudandeOmfattning()
    {
      return $this->FinnsErbjudandeOmfattning;
    }

    /**
     * @param DatumOmfattning $FinnsErbjudandeOmfattning
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setFinnsErbjudandeOmfattning($FinnsErbjudandeOmfattning)
    {
      $this->FinnsErbjudandeOmfattning = $FinnsErbjudandeOmfattning;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimmarPerVeckaDeltid()
    {
      return $this->TimmarPerVeckaDeltid;
    }

    /**
     * @param float $TimmarPerVeckaDeltid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setTimmarPerVeckaDeltid($TimmarPerVeckaDeltid)
    {
      $this->TimmarPerVeckaDeltid = $TimmarPerVeckaDeltid;
      return $this;
    }

    /**
     * @return float
     */
    public function getProcentAvHeltid()
    {
      return $this->ProcentAvHeltid;
    }

    /**
     * @param float $ProcentAvHeltid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setProcentAvHeltid($ProcentAvHeltid)
    {
      $this->ProcentAvHeltid = $ProcentAvHeltid;
      return $this;
    }

    /**
     * @return ArbetstidTyp
     */
    public function getArbetstid()
    {
      return $this->Arbetstid;
    }

    /**
     * @param ArbetstidTyp $Arbetstid
     * @return \JGI\Arbetsgivarintyg\ApiCertificate_OfferOfContinuedWorkBlock
     */
    public function setArbetstid($Arbetstid)
    {
      $this->Arbetstid = $Arbetstid;
      return $this;
    }

}
