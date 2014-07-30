<?php
/**
 * TOP API: taobao.widget.authorization.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-14 00:00:00
 */
class WidgetAuthorizationGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.widget.authorization.get";
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
