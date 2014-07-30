<?php
/**
 * TOP API: taobao.warehouse.crk.search request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseCrkSearchRequest
{
	/** 
	 * 出入库单号
	 **/
	private $crkCode;
	
	/** 
	 * 结束创建时间，查出当前时间之前的所有记录数
	 **/
	private $crkDateEnd;
	
	/** 
	 * 起始创建时间，查出从当前时间起的所有记录
	 **/
	private $crkDateStart;
	
	/** 
	 * 当前页(默认为1)
	 **/
	private $pageNo;
	
	/** 
	 * 分页参数,每页所包含的记录条数,正整数，默认20，最大50,超过50默认50.
	 **/
	private $pageSize;
	
	/** 
	 * 出入库类型：
入库：TYPE_STOCK_IN
出库：TYPE_STOCK_OUT
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCrkCode($crkCode)
	{
		$this->crkCode = $crkCode;
		$this->apiParas["crk_code"] = $crkCode;
	}

	public function getCrkCode()
	{
		return $this->crkCode;
	}

	public function setCrkDateEnd($crkDateEnd)
	{
		$this->crkDateEnd = $crkDateEnd;
		$this->apiParas["crk_date_end"] = $crkDateEnd;
	}

	public function getCrkDateEnd()
	{
		return $this->crkDateEnd;
	}

	public function setCrkDateStart($crkDateStart)
	{
		$this->crkDateStart = $crkDateStart;
		$this->apiParas["crk_date_start"] = $crkDateStart;
	}

	public function getCrkDateStart()
	{
		return $this->crkDateStart;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.crk.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->crkCode,64,"crkCode");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
