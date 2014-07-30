<?php
/**
 * TOP API: taobao.warehouse.items.get request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class WarehouseItemsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.warehouse.items.get";
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
