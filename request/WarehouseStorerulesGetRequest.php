<?php
/**
 * TOP API: taobao.warehouse.storerules.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseStorerulesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.warehouse.storerules.get";
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
