<?php
/**
 * TOP API: taobao.elearning.offline.course.add request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningOfflineCourseAddRequest
{
	/** 
	 * 课程报名上限人数（不允许负值）
	 **/
	private $applylimit;
	
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
	 * 课程结束时间(必须是给定示例的格式)
	 **/
	private $endTime;
	
	/** 
	 * 合作方线下课程id（长度不超过255）
	 **/
	private $outerId;
	
	/** 
	 * 课程大纲，必须符合约定的格式
	 **/
	private $outline;
	
	/** 
	 * 课程封面图片，为上传至图片空间的完整地址（长度不超过255）
	 **/
	private $picUrl;
	
	/** 
	 * 课程定价，为整数值，单位是分（不允许负值）
	 **/
	private $price;
	
	/** 
	 * 课程开始时间(必须是给定示例的格式)
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
	 * 课程总时长，单位为天（不允许负值）
	 **/
	private $totalTime;
	
	private $apiParas = array();
	
	public function setApplylimit($applylimit)
	{
		$this->applylimit = $applylimit;
		$this->apiParas["applylimit"] = $applylimit;
	}

	public function getApplylimit()
	{
		return $this->applylimit;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setOutline($outline)
	{
		$this->outline = $outline;
		$this->apiParas["outline"] = $outline;
	}

	public function getOutline()
	{
		return $this->outline;
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

	public function getApiMethodName()
	{
		return "taobao.elearning.offline.course.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->applylimit,0,"applylimit");
		RequestCheckUtil::checkNotNull($this->catalogId,"catalogId");
		RequestCheckUtil::checkNotNull($this->courseTitle,"courseTitle");
		RequestCheckUtil::checkMaxLength($this->courseTitle,30,"courseTitle");
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerId,255,"outerId");
		RequestCheckUtil::checkNotNull($this->outline,"outline");
		RequestCheckUtil::checkMaxLength($this->picUrl,255,"picUrl");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkMinValue($this->price,0,"price");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkMaxLength($this->teacherIds,255,"teacherIds");
		RequestCheckUtil::checkNotNull($this->teacherNicks,"teacherNicks");
		RequestCheckUtil::checkMaxLength($this->teacherNicks,255,"teacherNicks");
		RequestCheckUtil::checkNotNull($this->totalTime,"totalTime");
		RequestCheckUtil::checkMinValue($this->totalTime,0,"totalTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
