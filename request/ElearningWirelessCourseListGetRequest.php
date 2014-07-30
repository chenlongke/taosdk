<?php
/**
 * TOP API: taobao.elearning.wireless.course.list.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-28 00:00:00
 */
class ElearningWirelessCourseListGetRequest
{
	/** 
	 * 课程分组id
	 **/
	private $groupId;
	
	/** 
	 * 分页获取数据的每页数据量（1<=size<=20，超出范围的话，取默认值）
	 **/
	private $size;
	
	/** 
	 * start>=0
	 **/
	private $start;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.wireless.course.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
