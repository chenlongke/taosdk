<?php
/**
 * TOP API: taobao.elearning.course.add request
 * 
 * @author auto create
 * @since 1.0, 2012-11-15 00:00:00
 */
class ElearningCourseAddRequest
{
	/** 
	 * 课程报名上限人数（不允许负值）
	 **/
	private $applyLimit;
	
	/** 
	 * 课程分类id
	 **/
	private $catalogId;
	
	/** 
	 * 课程标题（长度不超过30）
	 **/
	private $courseTitle;
	
	/** 
	 * 课程简介（长度不超过20000，支持文本和图片，图片域名必须是白名单中的域名）
	 **/
	private $description;
	
	/** 
	 * 课程结束时间
	 **/
	private $endTime;
	
	/** 
	 * 扩展字段，自定义值（长度不超过255）
	 **/
	private $kvs;
	
	/** 
	 * 合作方课堂id（长度不超过255）
	 **/
	private $outerId;
	
	/** 
	 * 课程封面图片，为上传至图片空间的完整地址（长度不超过255）
	 **/
	private $picUrl;
	
	/** 
	 * 课程定价，为整数值，单位是分（不允许负值）
	 **/
	private $price;
	
	/** 
	 * 课程开始时间
	 **/
	private $startTime;
	
	/** 
	 * 课程状态：0为下架，1为上架，-1为异常终止
	 **/
	private $status;
	
	/** 
	 * 讲师id，多个讲师利用半角逗号进行分割（长度不超过255）
	 **/
	private $teacherIds;
	
	/** 
	 * 讲师姓名，多个讲师利用半角逗号分割，和讲师id一一对应（长度不超过255）
	 **/
	private $teacherNicks;
	
	/** 
	 * 课程总时长，单位为分（不允许负值）
	 **/
	private $totalTime;
	
	/** 
	 * 课程类型：0,其他;10,直播;20,点播;11,虚拟
	 **/
	private $type;
	
	/** 
	 * 课程有效时间，单位为天（不允许负值）
	 **/
	private $validTime;
	
	private $apiParas = array();
	
	public function setApplyLimit($applyLimit)
	{
		$this->applyLimit = $applyLimit;
		$this->apiParas["apply_limit"] = $applyLimit;
	}

	public function getApplyLimit()
	{
		return $this->applyLimit;
	}

	public function setCatalogId($catalogId)
	{
		$this->catalogId = $catalogId;
		$this->apiParas["catalog_id"] = $catalogId;
	}

	public function getCatalogId()
	{
		return $this->catalogId;
	}

	public function setCourseTitle($courseTitle)
	{
		$this->courseTitle = $courseTitle;
		$this->apiParas["course_title"] = $courseTitle;
	}

	public function getCourseTitle()
	{
		return $this->courseTitle;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setKvs($kvs)
	{
		$this->kvs = $kvs;
		$this->apiParas["kvs"] = $kvs;
	}

	public function getKvs()
	{
		return $this->kvs;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParas["pic_url"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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

	public function setTeacherIds($teacherIds)
	{
		$this->teacherIds = $teacherIds;
		$this->apiParas["teacher_ids"] = $teacherIds;
	}

	public function getTeacherIds()
	{
		return $this->teacherIds;
	}

	public function setTeacherNicks($teacherNicks)
	{
		$this->teacherNicks = $teacherNicks;
		$this->apiParas["teacher_nicks"] = $teacherNicks;
	}

	public function getTeacherNicks()
	{
		return $this->teacherNicks;
	}

	public function setTotalTime($totalTime)
	{
		$this->totalTime = $totalTime;
		$this->apiParas["total_time"] = $totalTime;
	}

	public function getTotalTime()
	{
		return $this->totalTime;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setValidTime($validTime)
	{
		$this->validTime = $validTime;
		$this->apiParas["valid_time"] = $validTime;
	}

	public function getValidTime()
	{
		return $this->validTime;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.course.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->applyLimit,"applyLimit");
		RequestCheckUtil::checkMinValue($this->applyLimit,0,"applyLimit");
		RequestCheckUtil::checkNotNull($this->catalogId,"catalogId");
		RequestCheckUtil::checkNotNull($this->courseTitle,"courseTitle");
		RequestCheckUtil::checkMaxLength($this->courseTitle,30,"courseTitle");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMaxLength($this->kvs,255,"kvs");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerId,255,"outerId");
		RequestCheckUtil::checkMaxLength($this->picUrl,255,"picUrl");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkMinValue($this->price,0,"price");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->teacherIds,"teacherIds");
		RequestCheckUtil::checkMaxLength($this->teacherIds,255,"teacherIds");
		RequestCheckUtil::checkNotNull($this->teacherNicks,"teacherNicks");
		RequestCheckUtil::checkMaxLength($this->teacherNicks,255,"teacherNicks");
		RequestCheckUtil::checkNotNull($this->totalTime,"totalTime");
		RequestCheckUtil::checkMinValue($this->totalTime,0,"totalTime");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->validTime,"validTime");
		RequestCheckUtil::checkMinValue($this->validTime,0,"validTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
