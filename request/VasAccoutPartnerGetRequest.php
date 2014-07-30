<?php
/**
 * TOP API: taobao.vas.accout.partner.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class VasAccoutPartnerGetRequest
{
	/** 
	 * 业务类型 3010 elink 3020 商超
	 **/
	private $bizType;
	
	/** 
	 * 合作伙伴用户id
	 **/
	private $partnerUserId;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
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
		return "taobao.vas.accout.partner.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->partnerUserId,"partnerUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
