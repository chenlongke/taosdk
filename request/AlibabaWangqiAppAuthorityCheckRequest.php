<?php
/**
 * TOP API: alibaba.wangqi.app.authority.check request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class AlibabaWangqiAppAuthorityCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.wangqi.app.authority.check";
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
