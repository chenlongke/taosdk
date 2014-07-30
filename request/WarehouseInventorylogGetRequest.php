<?php
/**
 * TOP API: taobao.warehouse.inventorylog.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseInventorylogGetRequest
{
	/** 
	 * 库存变更id,可以根据taobao.warehouse.inventorylogs.get接口得到
	 **/
	private $inventoryLogId;
	
	private $apiParas = array();
	
	public function setInventoryLogId($inventoryLogId)
	{
		$this->inventoryLogId = $inventoryLogId;
		$this->apiParas["inventory_log_id"] = $inventoryLogId;
	}

	public function getInventoryLogId()
	{
		return $this->inventoryLogId;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.inventorylog.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->inventoryLogId,"inventoryLogId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
