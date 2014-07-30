<?php
/**
 * TOP API: taobao.elink.warehouse.inventory.search request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkWarehouseInventorySearchRequest
{
	/** 
	 * 库存类型
	 **/
	private $bizType;
	
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 库存ID
	 **/
	private $inventoryId;
	
	/** 
	 * 每页显示的数据量
	 **/
	private $pageSize;
	
	/** 
	 * 商品sku id
	 **/
	private $skuId;
	
	/** 
	 * 仓库ID
	 **/
	private $warehouseId;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setInventoryId($inventoryId)
	{
		$this->inventoryId = $inventoryId;
		$this->apiParas["inventory_id"] = $inventoryId;
	}

	public function getInventoryId()
	{
		return $this->inventoryId;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
		$this->apiParas["warehouse_id"] = $warehouseId;
	}

	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.warehouse.inventory.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMinValue($this->inventoryId,1,"inventoryId");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMaxLength($this->skuId,128,"skuId");
		RequestCheckUtil::checkMinValue($this->warehouseId,1,"warehouseId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
