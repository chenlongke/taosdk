<?php
/**
 * TOP API: alibaba.tae.thirdsite.points.consume request
 * 
 * @author auto create
 * @since 1.0, 2014-03-31 00:00:00
 */
class AlibabaTaeThirdsitePointsConsumeRequest
{
	/** 
	 * 积分批次的id，可以在站点管理后台查看积分批次id。如果使用了积分批次参数，那么只会扣减用户对应积分批次的积分。就是发放的时候使用了restricted参数的积分
	 **/
	private $batchId;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 消费的数量
	 **/
	private $number;
	
	/** 
	 * 缘由
	 **/
	private $reason;
	
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
		return "alibaba.tae.thirdsite.points.consume";
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
