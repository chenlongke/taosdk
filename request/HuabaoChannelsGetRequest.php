<?php
/**
 * TOP API: taobao.huabao.channels.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-15 00:00:00
 */
class HuabaoChannelsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.huabao.channels.get";
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
