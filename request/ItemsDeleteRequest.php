<?php
/**
 * TOP API: taobao.items.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-05-03 00:00:00
 */
class ItemsDeleteRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.items.delete";
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
