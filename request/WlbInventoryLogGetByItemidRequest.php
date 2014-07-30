<?php
/**
 * TOP API: taobao.wlb.inventory.log.get.by.itemid request
 * 
 * @author auto create
 * @since 1.0, 2011-03-09 00:00:00
 */
class WlbInventoryLogGetByItemidRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 库存类型列表
	 **/
	private $inventoryTypeList;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页显示个数
	 **/
	private $pageSize;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setInventoryTypeList($inventoryTypeList)
	{
		$this->inventoryTypeList = $inventoryTypeList;
		$this->apiParas["inventory_type_list"] = $inventoryTypeList;
	}

	public function getInventoryTypeList()
	{
		return $this->inventoryTypeList;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "taobao.wlb.inventory.log.get.by.itemid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->inventoryTypeList,20,"inventoryTypeList");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
