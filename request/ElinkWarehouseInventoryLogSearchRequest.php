<?php
/**
 * TOP API: taobao.elink.warehouse.inventory.log.search request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkWarehouseInventoryLogSearchRequest
{
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 库存ID
	 **/
	private $inventoryId;
	
	/** 
	 * 库存logID
	 **/
	private $inventoryLogId;
	
	/** 
	 * 操作类型：0：出库 1：入库
	 **/
	private $operateType;
	
	/** 
	 * 每页显示的数据数量
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
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

	public function setInventoryLogId($inventoryLogId)
	{
		$this->inventoryLogId = $inventoryLogId;
		$this->apiParas["inventory_log_id"] = $inventoryLogId;
	}

	public function getInventoryLogId()
	{
		return $this->inventoryLogId;
	}

	public function setOperateType($operateType)
	{
		$this->operateType = $operateType;
		$this->apiParas["operate_type"] = $operateType;
	}

	public function getOperateType()
	{
		return $this->operateType;
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

	public function getApiMethodName()
	{
		return "taobao.elink.warehouse.inventory.log.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMinValue($this->inventoryId,1,"inventoryId");
		RequestCheckUtil::checkMinValue($this->inventoryLogId,1,"inventoryLogId");
		RequestCheckUtil::checkMaxValue($this->operateType,1,"operateType");
		RequestCheckUtil::checkMinValue($this->operateType,0,"operateType");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
