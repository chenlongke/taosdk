<?php
/**
 * TOP API: taobao.jae.client.context.getenvironment request
 * 
 * @author auto create
 * @since 1.0, 2014-02-10 00:00:00
 */
class JaeClientContextGetenvironmentRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jae.client.context.getenvironment";
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
