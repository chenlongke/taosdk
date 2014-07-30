<?php
/**
 * TOP API: taobao.elearning.course.users.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningCourseUsersGetRequest
{
	/** 
	 * 查询在此时间之后报名课程的所有学员；如为null，则查询所有，不分期。
	 **/
	private $afterThis;
	
	/** 
	 * 淘宝课程id
	 **/
	private $courseId;
	
	/** 
	 * 分页获取数据的页数（page_no>=1，超出范围的话，取默认值）
	 **/
	private $pageNo;
	
	/** 
	 * 分页获取数据的每页数据量（1<=page_size<=40，超出范围的话，取默认值）
	 **/
	private $pageSize;
	
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

	public function getApiMethodName()
	{
		return "taobao.elearning.course.users.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,40,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
