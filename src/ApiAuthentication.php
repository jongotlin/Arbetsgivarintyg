<?php

namespace JGI\Arbetsgivarintyg;

class ApiAuthentication
{

    /**
     * @var ApiNyckel $ApiNyckel
     */
    protected $ApiNyckel = null;

    /**
     * @var ArbetsgivareId $ArbetsgivareId
     */
    protected $ArbetsgivareId = null;

    /**
     * @var \DateTime $SkickatTidpunkt
     */
    protected $SkickatTidpunkt = null;

    /**
     * @param ArbetsgivareId $ArbetsgivareId
     */
    public function __construct($ArbetsgivareId)
    {
      $this->ArbetsgivareId = $ArbetsgivareId;
    }

    /**
     * @return ApiNyckel
     */
    public function getApiNyckel()
    {
      return $this->ApiNyckel;
    }

    /**
     * @param ApiNyckel $ApiNyckel
     * @return \JGI\Arbetsgivarintyg\ApiAuthentication
     */
    public function setApiNyckel($ApiNyckel)
    {
      $this->ApiNyckel = $ApiNyckel;
      return $this;
    }

    /**
     * @return ArbetsgivareId
     */
    public function getArbetsgivareId()
    {
      return $this->ArbetsgivareId;
    }

    /**
     * @param ArbetsgivareId $ArbetsgivareId
     * @return \JGI\Arbetsgivarintyg\ApiAuthentication
     */
    public function setArbetsgivareId($ArbetsgivareId)
    {
      $this->ArbetsgivareId = $ArbetsgivareId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSkickatTidpunkt()
    {
      if ($this->SkickatTidpunkt == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SkickatTidpunkt);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SkickatTidpunkt
     * @return \JGI\Arbetsgivarintyg\ApiAuthentication
     */
    public function setSkickatTidpunkt(\DateTime $SkickatTidpunkt = null)
    {
      if ($SkickatTidpunkt == null) {
       $this->SkickatTidpunkt = null;
      } else {
        $this->SkickatTidpunkt = $SkickatTidpunkt->format(\DateTime::ATOM);
      }
      return $this;
    }

}
