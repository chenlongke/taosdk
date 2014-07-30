<?php
/**
 * TOP API: taobao.ju.items.list.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-04 00:00:00
 */
class JuItemsListGetRequest
{
	/** 
	 * 查询截止时间
	 **/
	private $applyEndTime;
	
	/** 
	 * 查询起始时间
	 **/
	private $applyStartTime;
	
	/** 
	 * 页码
	 **/
	private $page;
	
	/** 
	 * 每页记录数，最大每页50
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setApplyEndTime($applyEndTime)
	{
		$this->applyEndTime = $applyEndTime;
		$this->apiParas["apply_end_time"] = $applyEndTime;
	}

	public function getApplyEndTime()
	{
		return $this->applyEndTime;
	}

	public function setApplyStartTime($applyStartTime)
	{
		$this->applyStartTime = $applyStartTime;
		$this->apiParas["apply_start_time"] = $applyStartTime;
	}

	public function getApplyStartTime()
	{
		return $this->applyStartTime;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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
		return "taobao.ju.items.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->applyEndTime,"applyEndTime");
		RequestCheckUtil::checkNotNull($this->applyStartTime,"applyStartTime");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkMaxValue($this->page,10000,"page");
		RequestCheckUtil::checkMinValue($this->page,1,"page");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
