<?php
/**
 * TOP API: taobao.warehouse.inventory.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseInventoryGetRequest
{
	/** 
	 * 库存ID (可从taobao.warehouse.inventories.get取)
	 **/
	private $inventoryId;
	
	private $apiParas = array();
	
	public function setInventoryId($inventoryId)
	{
		$this->inventoryId = $inventoryId;
		$this->apiParas["inventory_id"] = $inventoryId;
	}

	public function getInventoryId()
	{
		return $this->inventoryId;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.inventory.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->inventoryId,"inventoryId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
