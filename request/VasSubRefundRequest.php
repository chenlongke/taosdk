<?php
/**
 * TOP API: taobao.vas.sub.refund request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasSubRefundRequest
{
	/** 
	 * 业务方标识
	 **/
	private $applicant;
	
	/** 
	 * 退款时间
	 **/
	private $refundDate;
	
	/** 
	 * 退款金额（分为单位）
	 **/
	private $refundMoney;
	
	/** 
	 * 订购id
	 **/
	private $subId;
	
	/** 
	 * 用户id（淘宝）
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setApplicant($applicant)
	{
		$this->applicant = $applicant;
		$this->apiParas["applicant"] = $applicant;
	}

	public function getApplicant()
	{
		return $this->applicant;
	}

	public function setRefundDate($refundDate)
	{
		$this->refundDate = $refundDate;
		$this->apiParas["refund_date"] = $refundDate;
	}

	public function getRefundDate()
	{
		return $this->refundDate;
	}

	public function setRefundMoney($refundMoney)
	{
		$this->refundMoney = $refundMoney;
		$this->apiParas["refund_money"] = $refundMoney;
	}

	public function getRefundMoney()
	{
		return $this->refundMoney;
	}

	public function setSubId($subId)
	{
		$this->subId = $subId;
		$this->apiParas["sub_id"] = $subId;
	}

	public function getSubId()
	{
		return $this->subId;
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
		return "taobao.vas.sub.refund";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->applicant,"applicant");
		RequestCheckUtil::checkNotNull($this->refundDate,"refundDate");
		RequestCheckUtil::checkNotNull($this->refundMoney,"refundMoney");
		RequestCheckUtil::checkNotNull($this->subId,"subId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
