<?php
/**
 * TOP API: alibaba.tae.thirdsite.points.issue request
 * 
 * @author auto create
 * @since 1.0, 2014-03-11 00:00:00
 */
class AlibabaTaeThirdsitePointsIssueRequest
{
	/** 
	 * 积分批次的id，可以在站点管理后台查看积分批次id。此参数为必选
	 **/
	private $batchId;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 发放的数量，必须是正数
	 **/
	private $number;
	
	/** 
	 * 发放缘由
	 **/
	private $reason;
	
	/** 
	 * 是否限制积分和批次ID绑定,  如果绑定，消费积分的时候必须输入批次id才能消费掉
	 **/
	private $restricted;
	
	/** 
	 * 用户混淆nick
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
		$this->apiParas["batch_id"] = $batchId;
	}

	public function getBatchId()
	{
		return $this->batchId;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setRestricted($restricted)
	{
		$this->restricted = $restricted;
		$this->apiParas["restricted"] = $restricted;
	}

	public function getRestricted()
	{
		return $this->restricted;
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
		return "alibaba.tae.thirdsite.points.issue";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->memo,256,"memo");
		RequestCheckUtil::checkNotNull($this->number,"number");
		RequestCheckUtil::checkMinValue($this->number,1,"number");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkMaxLength($this->reason,32,"reason");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
		RequestCheckUtil::checkMaxLength($this->userNick,256,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
