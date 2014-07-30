<?php
/**
 * TOP API: taobao.elearning.course.progress.update request
 * 
 * @author auto create
 * @since 1.0, 2012-11-15 00:00:00
 */
class ElearningCourseProgressUpdateRequest
{
	/** 
	 * 淘宝课程id
	 **/
	private $courseId;
	
	/** 
	 * 用户课程进度，为整型，介于0~100之间
	 **/
	private $progress;
	
	/** 
	 * 用户课程状态-1:异常终止 0:未开始 1:已经开始 2:已经结束
	 **/
	private $status;
	
	/** 
	 * 用户在淘宝的ID
	 **/
	private $userId;
	
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

	public function setProgress($progress)
	{
		$this->progress = $progress;
		$this->apiParas["progress"] = $progress;
	}

	public function getProgress()
	{
		return $this->progress;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.course.progress.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkNotNull($this->progress,"progress");
		RequestCheckUtil::checkMaxValue($this->progress,100,"progress");
		RequestCheckUtil::checkMinValue($this->progress,0,"progress");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
