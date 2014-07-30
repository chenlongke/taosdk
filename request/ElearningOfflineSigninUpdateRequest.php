<?php
/**
 * TOP API: taobao.elearning.offline.signin.update request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningOfflineSigninUpdateRequest
{
	/** 
	 * 课程ID
	 **/
	private $courseId;
	
	/** 
	 * 报名表审核状态:0-审核进行中；1-审核通过；2-审核被拒绝
	 **/
	private $signStatus;
	
	/** 
	 * 学员ID
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

	public function setSignStatus($signStatus)
	{
		$this->signStatus = $signStatus;
		$this->apiParas["sign_status"] = $signStatus;
	}

	public function getSignStatus()
	{
		return $this->signStatus;
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
		return "taobao.elearning.offline.signin.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseId,"courseId");
		RequestCheckUtil::checkNotNull($this->signStatus,"signStatus");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
