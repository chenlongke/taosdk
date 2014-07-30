<?php
/**
 * TOP API: tmall.point.exchange.income request
 * 
 * @author auto create
 * @since 1.0, 2014-03-11 00:00:00
 */
class TmallPointExchangeIncomeRequest
{
	/** 
	 * 兑换时间，格式遵循yyyyMMddHHmmss
	 **/
	private $exchangeTime;
	
	/** 
	 * 外部合作方ID，由天猫分配
	 **/
	private $partnerNo;
	
	/** 
	 * 扣除合作方的积分数
	 **/
	private $partnerPoint;
	
	/** 
	 * 合作方的唯一交易流水号
	 **/
	private $partnerTradeNo;
	
	/** 
	 * 合作方的用户ID
	 **/
	private $partnerUid;
	
	/** 
	 * 淘宝用户ID
	 **/
	private $taobaoUid;
	
	/** 
	 * 兑换的天猫积分数
	 **/
	private $tmallPoint;
	
	private $apiParas = array();
	
	public function setExchangeTime($exchangeTime)
	{
		$this->exchangeTime = $exchangeTime;
		$this->apiParas["exchange_time"] = $exchangeTime;
	}

	public function getExchangeTime()
	{
		return $this->exchangeTime;
	}

	public function setPartnerNo($partnerNo)
	{
		$this->partnerNo = $partnerNo;
		$this->apiParas["partner_no"] = $partnerNo;
	}

	public function getPartnerNo()
	{
		return $this->partnerNo;
	}

	public function setPartnerPoint($partnerPoint)
	{
		$this->partnerPoint = $partnerPoint;
		$this->apiParas["partner_point"] = $partnerPoint;
	}

	public function getPartnerPoint()
	{
		return $this->partnerPoint;
	}

	public function setPartnerTradeNo($partnerTradeNo)
	{
		$this->partnerTradeNo = $partnerTradeNo;
		$this->apiParas["partner_trade_no"] = $partnerTradeNo;
	}

	public function getPartnerTradeNo()
	{
		return $this->partnerTradeNo;
	}

	public function setPartnerUid($partnerUid)
	{
		$this->partnerUid = $partnerUid;
		$this->apiParas["partner_uid"] = $partnerUid;
	}

	public function getPartnerUid()
	{
		return $this->partnerUid;
	}

	public function setTaobaoUid($taobaoUid)
	{
		$this->taobaoUid = $taobaoUid;
		$this->apiParas["taobao_uid"] = $taobaoUid;
	}

	public function getTaobaoUid()
	{
		return $this->taobaoUid;
	}

	public function setTmallPoint($tmallPoint)
	{
		$this->tmallPoint = $tmallPoint;
		$this->apiParas["tmall_point"] = $tmallPoint;
	}

	public function getTmallPoint()
	{
		return $this->tmallPoint;
	}

	public function getApiMethodName()
	{
		return "tmall.point.exchange.income";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->exchangeTime,"exchangeTime");
		RequestCheckUtil::checkNotNull($this->partnerNo,"partnerNo");
		RequestCheckUtil::checkMinValue($this->partnerNo,0,"partnerNo");
		RequestCheckUtil::checkNotNull($this->partnerPoint,"partnerPoint");
		RequestCheckUtil::checkMinValue($this->partnerPoint,1,"partnerPoint");
		RequestCheckUtil::checkNotNull($this->partnerTradeNo,"partnerTradeNo");
		RequestCheckUtil::checkNotNull($this->partnerUid,"partnerUid");
		RequestCheckUtil::checkMinValue($this->partnerUid,1,"partnerUid");
		RequestCheckUtil::checkNotNull($this->taobaoUid,"taobaoUid");
		RequestCheckUtil::checkMinValue($this->taobaoUid,1,"taobaoUid");
		RequestCheckUtil::checkNotNull($this->tmallPoint,"tmallPoint");
		RequestCheckUtil::checkMinValue($this->tmallPoint,1,"tmallPoint");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
