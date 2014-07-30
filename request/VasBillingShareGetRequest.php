<?php
/**
 * TOP API: taobao.vas.billing.share.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class VasBillingShareGetRequest
{
	/** 
	 * 开始时间
	 **/
	private $beginCycle;
	
	/** 
	 * 业务类型编号
	 **/
	private $bizType;
	
	/** 
	 * 结束时间
	 **/
	private $endCycle;
	
	/** 
	 * 用户编号
	 **/
	private $partnerUserId;
	
	private $apiParas = array();
	
	public function setBeginCycle($beginCycle)
	{
		$this->beginCycle = $beginCycle;
		$this->apiParas["begin_cycle"] = $beginCycle;
	}

	public function getBeginCycle()
	{
		return $this->beginCycle;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setEndCycle($endCycle)
	{
		$this->endCycle = $endCycle;
		$this->apiParas["end_cycle"] = $endCycle;
	}

	public function getEndCycle()
	{
		return $this->endCycle;
	}

	public function setPartnerUserId($partnerUserId)
	{
		$this->partnerUserId = $partnerUserId;
		$this->apiParas["partner_user_id"] = $partnerUserId;
	}

	public function getPartnerUserId()
	{
		return $this->partnerUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.billing.share.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->beginCycle,"beginCycle");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->endCycle,"endCycle");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
