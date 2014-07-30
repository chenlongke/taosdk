<?php
/**
 * TOP API: taobao.ju.subscribe.area.items.get request
 * 
 * @author auto create
 * @since 1.0, 2013-01-21 00:00:00
 */
class JuSubscribeAreaItemsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ju.subscribe.area.items.get";
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
