<?php

namespace JGI\Arbetsgivarintyg;

class ArrayOfApiImportCertificateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApiImportCertificateResult[] $ApiImportCertificateResult
     */
    protected $ApiImportCertificateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApiImportCertificateResult[]
     */
    public function getApiImportCertificateResult()
    {
      return $this->ApiImportCertificateResult;
    }

    /**
     * @param ApiImportCertificateResult[] $ApiImportCertificateResult
     * @return \JGI\Arbetsgivarintyg\ArrayOfApiImportCertificateResult
     */
    public function setApiImportCertificateResult(array $ApiImportCertificateResult = null)
    {
      $this->ApiImportCertificateResult = $ApiImportCertificateResult;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ApiImportCertificateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApiImportCertificateResult
     */
    public function offsetGet($offset)
    {
      return $this->ApiImportCertificateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApiImportCertificateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ApiImportCertificateResult[] = $value;
      } else {
        $this->ApiImportCertificateResult[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApiImportCertificateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApiImportCertificateResult Return the current element
     */
    public function current()
    {
      return current($this->ApiImportCertificateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApiImportCertificateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApiImportCertificateResult);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ApiImportCertificateResult);
    }

    /**
     * Countable implementation
     *
     * @return ApiImportCertificateResult Return count of elements
     */
    public function count()
    {
      return count($this->ApiImportCertificateResult);
    }

}
