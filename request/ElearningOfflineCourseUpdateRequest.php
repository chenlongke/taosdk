<?php
/**
 * TOP API: taobao.elearning.offline.course.update request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningOfflineCourseUpdateRequest
{
	/** 
	 * 课程报名上限（不允许负值）
	 **/
	private $applyLimit;
	
	/** 
	 * 课程分类
	 **/
	private $catalogId;
	
	/** 
	 * 淘宝课程id
	 **/
	private $courseId;
	
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
	 * 合作方课堂id（长度不超过255）
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
	 * 课程定价,用整数来表示，单位为分（不允许负值）
	 **/
	private $price;
	
	/** 
	 * 课程起始时间
	 **/
	private $startTime;
	
	/** 
	 * 课程状态：0为下架，1为上架，-1为异常终止
	 **/
	private $status;
	
	/** 
	 * 讲师id，多个讲师利用逗号进行分割（长度不超过255）
	 **/
	private $teacherIds;
	
	/** 
	 * 讲师id，多个讲师利用逗号进行分割（长度不超过255）
	 **/
	private $teacherNicks;
	
	/** 
	 * 课程总时长，单位为天（不允许负值）
	 **/
	private $totalTime;
	
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

	public function setCourseId($courseId)
	{
		$this->courseId = $courseId;
		$this->apiParas["course_id"] = $courseId;
	}

	public function getCourseId()
	{
		return $this->courseId;
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
		return "taobao.elearning.offline.course.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkMaxLength($this->description,20000,"description");
		RequestCheckUtil::checkMaxLength($this->picUrl,255,"picUrl");
		RequestCheckUtil::checkMinValue($this->price,0,"price");
		RequestCheckUtil::checkMaxLength($this->teacherIds,255,"teacherIds");
		RequestCheckUtil::checkMaxLength($this->teacherNicks,255,"teacherNicks");
		RequestCheckUtil::checkMinValue($this->totalTime,0,"totalTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
