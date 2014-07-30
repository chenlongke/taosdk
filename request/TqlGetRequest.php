<?php
class TqlGetRequest
{
	
	private $apiParas = array();
	private $method = "";
	
	public function setMethod($str)
	{
		$this->method = $str;
	}
	public function getApiMethodName()
	{
		return $this->method;
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	public function check()
	{
		
	}
	
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}