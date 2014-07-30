<?php
/**
 * TOP API: taobao.cloudstore.userinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreUserinfoGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.cloudstore.userinfo.get";
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
