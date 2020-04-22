<?php

namespace JGI\Arbetsgivarintyg;

class ArbetsgivarintygServiceRequest
{

    /**
     * @var ImportRequest $Request
     */
    protected $Request = null;

    /**
     * @param ImportRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return ImportRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param ImportRequest $Request
     * @return \JGI\Arbetsgivarintyg\ArbetsgivarintygServiceRequest
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
