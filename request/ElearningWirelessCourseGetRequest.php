<?php
/**
 * TOP API: taobao.elearning.wireless.course.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-28 00:00:00
 */
class ElearningWirelessCourseGetRequest
{
	/** 
	 * 课程数字id
	 **/
	private $courseId;
	
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

	public function getApiMethodName()
	{
		return "taobao.elearning.wireless.course.get";
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
