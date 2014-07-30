<?php
/**
 * TOP API: taobao.inventory.inventoryinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-02 00:00:00
 */
class InventoryInventoryinfoGetRequest
{
	/** 
	 * 宝贝id
	 **/
	private $itemId;
	
	/** 
	 * skuId，选传，不传会返回所有有库存的sku库存记录。
	 **/
	private $skuId;
	
	/** 
	 * 仓库编码，选传，不传则返回item下所有库存的仓的库存记录
	 **/
	private $storeCode;
	
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

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.inventoryinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMinValue($this->itemId,0,"itemId");
		RequestCheckUtil::checkMinValue($this->skuId,0,"skuId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
