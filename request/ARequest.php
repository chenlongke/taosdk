<?php
/**
 * TOP API: a request
 * 
 * @author auto create
 * @since 1.0, 2014-03-20 00:00:00
 */
class ARequest
{
	/** 
	 * dsd
	 **/
	private $aa;
	
	private $apiParas = array();
	
	public function setAa($aa)
	{
		$this->aa = $aa;
		$this->apiParas["aa"] = $aa;
	}

	public function getAa()
	{
		return $this->aa;
	}

	public function getApiMethodName()
	{
		return "a";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->aa,"aa");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
