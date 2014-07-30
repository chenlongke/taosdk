<?php
/**
 * TOP API: taobao.qianniu.memos.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-27 00:00:00
 */
class QianniuMemosGetRequest
{
	/** 
	 * 当前页数，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * memo的id，多个以逗号分离，用于获取指定id的memo
	 **/
	private $memoIds;
	
	/** 
	 * 排序字段，可以为id,gmt_create,gmt_modified,remind_time等.
	 **/
	private $orderBy;
	
	/** 
	 * asc为升，desc为降
	 **/
	private $orderType;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 优先级。越大优先级越高。当前使用0表示未星标，1表示星标。
	 **/
	private $priority;
	
	/** 
	 * 0不需要提醒 1 需要提醒 5 已忽略
	 **/
	private $remindFlag;
	
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

	public function setMemoIds($memoIds)
	{
		$this->memoIds = $memoIds;
		$this->apiParas["memo_ids"] = $memoIds;
	}

	public function getMemoIds()
	{
		return $this->memoIds;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->apiParas["priority"] = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setRemindFlag($remindFlag)
	{
		$this->remindFlag = $remindFlag;
		$this->apiParas["remind_flag"] = $remindFlag;
	}

	public function getRemindFlag()
	{
		return $this->remindFlag;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.memos.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
