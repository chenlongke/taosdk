<?php
/**
 * TOP API: taobao.elearning.wireless.course.view.count.add request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class ElearningWirelessCourseViewCountAddRequest
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
		return "taobao.elearning.wireless.course.view.count.add";
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
