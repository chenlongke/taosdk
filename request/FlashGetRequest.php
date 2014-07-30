<?php
/**
 * TOP API: taobao.flash.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-14 00:00:00
 */
class FlashGetRequest
{
	/** 
	 * flash文件id
	 **/
	private $flashId;
	
	/** 
	 * 文件名称
	 **/
	private $name;
	
	/** 
	 * 创建时间升序：create_time:asc
创建时间降序：create_time:desc
修改时间升序：modified_time:asc
修改时间降序：modified_time:desc
默认：create_time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 当前页，默认为第一页
	 **/
	private $pageNo;
	
	/** 
	 * 默认50
	 **/
	private $pageSize;
	
	/** 
	 * 文件状态
init:初始化状态
normal：正常状态
frezon:冻结状态
除了这三种状态后，选择其它默认会是normal状态
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setFlashId($flashId)
	{
		$this->flashId = $flashId;
		$this->apiParas["flash_id"] = $flashId;
	}

	public function getFlashId()
	{
		return $this->flashId;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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
		return "taobao.flash.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->flashId,9223372036854775807,"flashId");
		RequestCheckUtil::checkMinValue($this->flashId,1,"flashId");
		RequestCheckUtil::checkMaxLength($this->name,50,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
