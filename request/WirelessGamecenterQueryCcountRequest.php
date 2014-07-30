<?php
/**
 * TOP API: taobao.wireless.gamecenter.query.ccount request
 * 
 * @author auto create
 * @since 1.0, 2014-01-08 00:00:00
 */
class WirelessGamecenterQueryCcountRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.wireless.gamecenter.query.ccount";
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
