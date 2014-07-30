<?php
/**
 * TOP API: taobao.elearning.offline.get.users request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningOfflineGetUsersRequest
{
	/** 
	 * 根据时间区间查询
	 **/
	private $afterThis;
	
	/** 
	 * 课程ID
	 **/
	private $courseId;
	
	/** 
	 * 分页查询参数
	 **/
	private $pageSize;
	
	/** 
	 * 支付状态
	 **/
	private $payStatus;
	
	/** 
	 * 分页查询参数
	 **/
	private $startIndex;
	
	private $apiParas = array();
	
	public function setAfterThis($afterThis)
	{
		$this->afterThis = $afterThis;
		$this->apiParas["after_this"] = $afterThis;
	}

	public function getAfterThis()
	{
		return $this->afterThis;
	}

	public function setCourseId($courseId)
	{
		$this->courseId = $courseId;
		$this->apiParas["course_id"] = $courseId;
	}

	public function getCourseId()
	{
		return $this->courseId;
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

	public function setPayStatus($payStatus)
	{
		$this->payStatus = $payStatus;
		$this->apiParas["pay_status"] = $payStatus;
	}

	public function getPayStatus()
	{
		return $this->payStatus;
	}

	public function setStartIndex($startIndex)
	{
		$this->startIndex = $startIndex;
		$this->apiParas["start_index"] = $startIndex;
	}

	public function getStartIndex()
	{
		return $this->startIndex;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.offline.get.users";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
