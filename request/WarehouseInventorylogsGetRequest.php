<?php
/**
 * TOP API: taobao.warehouse.inventorylogs.get request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class WarehouseInventorylogsGetRequest
{
	/** 
	 * 日期类型("CREATE_TYPE"代表创建时间，"MODIFIED_TYPE"代表修改时间，默认为创建时间)，需要gmtdate_start和gmtdate_end有值才生效。
	 **/
	private $dateType;
	
	/** 
	 * 查询结束时间（需要配合date_type使用）
	 **/
	private $gmtdateEnd;
	
	/** 
	 * 查询开始时间（需要配合date_type使用）
	 **/
	private $gmtdateStart;
	
	/** 
	 * 库存id,可从taobao.warehouse.inventories.get获
	 **/
	private $inventoryId;
	
	/** 
	 * 分页参数,当前页码,默认为1
	 **/
	private $pageNo;
	
	/** 
	 * 分页参数,每页所包含的记录条数,正整数，默认20，最大50超过50默认50
	 **/
	private $pageSize;
	
	/** 
	 * 库存变更状态,可选值: UNCONFIRMED(待确认) ,CONFIRMED(已确认)
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setDateType($dateType)
	{
		$this->dateType = $dateType;
		$this->apiParas["date_type"] = $dateType;
	}

	public function getDateType()
	{
		return $this->dateType;
	}

	public function setGmtdateEnd($gmtdateEnd)
	{
		$this->gmtdateEnd = $gmtdateEnd;
		$this->apiParas["gmtdate_end"] = $gmtdateEnd;
	}

	public function getGmtdateEnd()
	{
		return $this->gmtdateEnd;
	}

	public function setGmtdateStart($gmtdateStart)
	{
		$this->gmtdateStart = $gmtdateStart;
		$this->apiParas["gmtdate_start"] = $gmtdateStart;
	}

	public function getGmtdateStart()
	{
		return $this->gmtdateStart;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.inventorylogs.get";
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
