<?php
/**
 * TOP API: taobao.baodian.deposit.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-26 00:00:00
 */
class BaodianDepositGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.baodian.deposit.get";
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
