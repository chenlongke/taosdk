<?php
/**
 * TOP API: taobao.caipiao.lottery.syssend request
 * 
 * @author auto create
 * @since 1.0, 2013-03-12 00:00:00
 */
class CaipiaoLotterySyssendRequest
{
	/** 
	 * 由淘宝彩票提供的活动id
	 **/
	private $activityId;
	
	/** 
	 * 淘宝用户数字id
	 **/
	private $userId;
	
	/** 
	 * 淘宝用户昵称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
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

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.lottery.syssend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
