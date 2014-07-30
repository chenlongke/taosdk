<?php
/**
 * TOP API: taobao.customize.tool.list.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-26 00:00:00
 */
class CustomizeToolListGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.customize.tool.list.get";
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
