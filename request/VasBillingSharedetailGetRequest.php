<?php
/**
 * TOP API: taobao.vas.billing.sharedetail.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class VasBillingSharedetailGetRequest
{
	/** 
	 * 用户编号
	 **/
	private $partnerUserId;
	
	/** 
	 * 分成汇总编号
	 **/
	private $scBillId;
	
	private $apiParas = array();
	
	public function setPartnerUserId($partnerUserId)
	{
		$this->partnerUserId = $partnerUserId;
		$this->apiParas["partner_user_id"] = $partnerUserId;
	}

	public function getPartnerUserId()
	{
		return $this->partnerUserId;
	}

	public function setScBillId($scBillId)
	{
		$this->scBillId = $scBillId;
		$this->apiParas["sc_bill_id"] = $scBillId;
	}

	public function getScBillId()
	{
		return $this->scBillId;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.billing.sharedetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scBillId,"scBillId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
