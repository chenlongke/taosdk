<?php
/**
 * TOP API: taobao.jindoucloud.message.authorize.stop request
 * 
 * @author auto create
 * @since 1.0, 2013-09-17 00:00:00
 */
class JindoucloudMessageAuthorizeStopRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jindoucloud.message.authorize.stop";
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
