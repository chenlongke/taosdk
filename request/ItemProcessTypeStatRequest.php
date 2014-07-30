<?php
/**
 * TOP API: taobao.item.process.type.stat request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ItemProcessTypeStatRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.item.process.type.stat";
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
