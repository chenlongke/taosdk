<?php
/**
 * TOP API: taobao.elearning.course.status.update request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningCourseStatusUpdateRequest
{
	/** 
	 * 淘宝课程id，必须大于0
	 **/
	private $courseId;
	
	/** 
	 * 课程状态：0为下架，1为上架，-1为异常终止
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setCourseId($courseId)
	{
		$this->courseId = $courseId;
		$this->apiParas["course_id"] = $courseId;
	}

	public function getCourseId()
	{
		return $this->courseId;
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
		return "taobao.elearning.course.status.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkMinValue($this->courseId,0,"courseId");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
