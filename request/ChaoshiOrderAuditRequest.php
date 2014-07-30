<?php
/**
 * TOP API: taobao.chaoshi.order.audit request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiOrderAuditRequest
{
	/** 
	 * 主订单ID
	 **/
	private $bizOrderId;
	
	/** 
	 * 审核COD订单是否通过，通过：true，拒绝：false
	 **/
	private $isAgree;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setIsAgree($isAgree)
	{
		$this->isAgree = $isAgree;
		$this->apiParas["is_agree"] = $isAgree;
	}

	public function getIsAgree()
	{
		return $this->isAgree;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.order.audit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->isAgree,"isAgree");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
