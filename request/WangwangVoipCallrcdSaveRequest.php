<?php
/**
 * TOP API: taobao.wangwang.voip.callrcd.save request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class WangwangVoipCallrcdSaveRequest
{
	/** 
	 * 呼叫开始时间，utc时间
	 **/
	private $begTime;
	
	/** 
	 * 计费时长，单位（秒）
	 **/
	private $billingTime;
	
	/** 
	 * 通话时长，单位（秒）
	 **/
	private $duration;
	
	/** 
	 * 呼叫结束时间，utc时间
	 **/
	private $endTime;
	
	/** 
	 * 挂断原因
NORMAL_CLEARING         正常结束
USER_BUSY               用户忙
ORIGINATOR_CANCEL       发起人取消
NO_ANSWER               无人接听
	 **/
	private $hungupCause;
	
	/** 
	 * 对方号码，或者nick
	 **/
	private $peerNum;
	
	/** 
	 * 本机号码，或者号码
	 **/
	private $userNum;
	
	/** 
	 * 全局唯一ID用以标记本次会话
	 **/
	private $uuid;
	
	private $apiParas = array();
	
	public function setBegTime($begTime)
	{
		$this->begTime = $begTime;
		$this->apiParas["beg_time"] = $begTime;
	}

	public function getBegTime()
	{
		return $this->begTime;
	}

	public function setBillingTime($billingTime)
	{
		$this->billingTime = $billingTime;
		$this->apiParas["billing_time"] = $billingTime;
	}

	public function getBillingTime()
	{
		return $this->billingTime;
	}

	public function setDuration($duration)
	{
		$this->duration = $duration;
		$this->apiParas["duration"] = $duration;
	}

	public function getDuration()
	{
		return $this->duration;
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

	public function setHungupCause($hungupCause)
	{
		$this->hungupCause = $hungupCause;
		$this->apiParas["hungup_cause"] = $hungupCause;
	}

	public function getHungupCause()
	{
		return $this->hungupCause;
	}

	public function setPeerNum($peerNum)
	{
		$this->peerNum = $peerNum;
		$this->apiParas["peer_num"] = $peerNum;
	}

	public function getPeerNum()
	{
		return $this->peerNum;
	}

	public function setUserNum($userNum)
	{
		$this->userNum = $userNum;
		$this->apiParas["user_num"] = $userNum;
	}

	public function getUserNum()
	{
		return $this->userNum;
	}

	public function setUuid($uuid)
	{
		$this->uuid = $uuid;
		$this->apiParas["uuid"] = $uuid;
	}

	public function getUuid()
	{
		return $this->uuid;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.voip.callrcd.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->begTime,"begTime");
		RequestCheckUtil::checkNotNull($this->billingTime,"billingTime");
		RequestCheckUtil::checkNotNull($this->duration,"duration");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->hungupCause,"hungupCause");
		RequestCheckUtil::checkNotNull($this->peerNum,"peerNum");
		RequestCheckUtil::checkMaxLength($this->peerNum,13,"peerNum");
		RequestCheckUtil::checkNotNull($this->userNum,"userNum");
		RequestCheckUtil::checkMaxLength($this->userNum,13,"userNum");
		RequestCheckUtil::checkNotNull($this->uuid,"uuid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
