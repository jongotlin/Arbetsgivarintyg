<?php

namespace JGI\Arbetsgivarintyg;

class DatumOmfattning
{

    /**
     * @var \DateTime $Start
     */
    protected $Start = null;

    /**
     * @var \DateTime $Slut
     */
    protected $Slut = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
      if ($this->Start == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Start);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Start
     * @return \JGI\Arbetsgivarintyg\DatumOmfattning
     */
    public function setStart(\DateTime $Start = null)
    {
      if ($Start == null) {
       $this->Start = null;
      } else {
        $this->Start = $Start->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSlut()
    {
      if ($this->Slut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Slut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Slut
     * @return \JGI\Arbetsgivarintyg\DatumOmfattning
     */
    public function setSlut(\DateTime $Slut = null)
    {
      if ($Slut == null) {
       $this->Slut = null;
      } else {
        $this->Slut = $Slut->format(\DateTime::ATOM);
      }
      return $this;
    }

}
