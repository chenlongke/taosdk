<?php
/**
 * TOP API: taobao.kelude.userlist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeUserlistGetRequest
{
	/** 
	 * 更新结束时间
	 **/
	private $endUpdated;
	
	/** 
	 * 排除的工号
	 **/
	private $excludeStaffIds;
	
	/** 
	 * 每页参数，第几页
	 **/
	private $pageNo;
	
	/** 
	 * 每页参数，每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 更新开始时间
	 **/
	private $startUpdated;
	
	private $apiParas = array();
	
	public function setEndUpdated($endUpdated)
	{
		$this->endUpdated = $endUpdated;
		$this->apiParas["end_updated"] = $endUpdated;
	}

	public function getEndUpdated()
	{
		return $this->endUpdated;
	}

	public function setExcludeStaffIds($excludeStaffIds)
	{
		$this->excludeStaffIds = $excludeStaffIds;
		$this->apiParas["exclude_staff_ids"] = $excludeStaffIds;
	}

	public function getExcludeStaffIds()
	{
		return $this->excludeStaffIds;
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

	public function setStartUpdated($startUpdated)
	{
		$this->startUpdated = $startUpdated;
		$this->apiParas["start_updated"] = $startUpdated;
	}

	public function getStartUpdated()
	{
		return $this->startUpdated;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.userlist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->excludeStaffIds,20,"excludeStaffIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
