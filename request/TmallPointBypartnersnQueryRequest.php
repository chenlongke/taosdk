<?php
/**
 * TOP API: tmall.point.bypartnersn.query request
 * 
 * @author auto create
 * @since 1.0, 2014-03-11 00:00:00
 */
class TmallPointBypartnersnQueryRequest
{
	/** 
	 * 合作方ID，由天猫分配
	 **/
	private $partnerNo;
	
	/** 
	 * 合作方业务唯一流水号
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
	
	private $apiParas = array();
	
	public function setPartnerNo($partnerNo)
	{
		$this->partnerNo = $partnerNo;
		$this->apiParas["partner_no"] = $partnerNo;
	}

	public function getPartnerNo()
	{
		return $this->partnerNo;
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

	public function getApiMethodName()
	{
		return "tmall.point.bypartnersn.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->partnerNo,"partnerNo");
		RequestCheckUtil::checkMinValue($this->partnerNo,0,"partnerNo");
		RequestCheckUtil::checkNotNull($this->partnerTradeNo,"partnerTradeNo");
		RequestCheckUtil::checkNotNull($this->partnerUid,"partnerUid");
		RequestCheckUtil::checkMinValue($this->partnerUid,1,"partnerUid");
		RequestCheckUtil::checkNotNull($this->taobaoUid,"taobaoUid");
		RequestCheckUtil::checkMinValue($this->taobaoUid,1,"taobaoUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
