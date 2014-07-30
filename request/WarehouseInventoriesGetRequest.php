<?php
/**
 * TOP API: taobao.warehouse.inventories.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseInventoriesGetRequest
{
	/** 
	 * 商品ID(可从taobao.warehouse.items.get取
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.inventories.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
