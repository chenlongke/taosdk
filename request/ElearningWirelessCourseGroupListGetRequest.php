<?php
/**
 * TOP API: taobao.elearning.wireless.course.group.list.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class ElearningWirelessCourseGroupListGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.elearning.wireless.course.group.list.get";
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
