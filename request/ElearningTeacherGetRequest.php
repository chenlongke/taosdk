<?php
/**
 * TOP API: taobao.elearning.teacher.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-15 00:00:00
 */
class ElearningTeacherGetRequest
{
	/** 
	 * 讲师的id
	 **/
	private $teacherId;
	
	private $apiParas = array();
	
	public function setTeacherId($teacherId)
	{
		$this->teacherId = $teacherId;
		$this->apiParas["teacher_id"] = $teacherId;
	}

	public function getTeacherId()
	{
		return $this->teacherId;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.teacher.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->teacherId,"teacherId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
