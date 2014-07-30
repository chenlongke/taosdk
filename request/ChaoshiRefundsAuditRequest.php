<?php
/**
 * TOP API: taobao.chaoshi.refunds.audit request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiRefundsAuditRequest
{
	/** 
	 * 同意退货的定单orderId数组 最大数据长度50
	 **/
	private $agreeRefundOrderIds;
	
	/** 
	 * 是否需要上门取件
	 **/
	private $isDeliveryRequired;
	
	/** 
	 * 主定单的id
	 **/
	private $parentOrderId;
	
	/** 
	 * 拒绝退货的定单orderId数组 最大数据长度50
	 **/
	private $refuseRefundOrderIds;
	
	private $apiParas = array();
	
	public function setAgreeRefundOrderIds($agreeRefundOrderIds)
	{
		$this->agreeRefundOrderIds = $agreeRefundOrderIds;
		$this->apiParas["agree_refund_order_ids"] = $agreeRefundOrderIds;
	}

	public function getAgreeRefundOrderIds()
	{
		return $this->agreeRefundOrderIds;
	}

	public function setIsDeliveryRequired($isDeliveryRequired)
	{
		$this->isDeliveryRequired = $isDeliveryRequired;
		$this->apiParas["is_delivery_required"] = $isDeliveryRequired;
	}

	public function getIsDeliveryRequired()
	{
		return $this->isDeliveryRequired;
	}

	public function setParentOrderId($parentOrderId)
	{
		$this->parentOrderId = $parentOrderId;
		$this->apiParas["parent_order_id"] = $parentOrderId;
	}

	public function getParentOrderId()
	{
		return $this->parentOrderId;
	}

	public function setRefuseRefundOrderIds($refuseRefundOrderIds)
	{
		$this->refuseRefundOrderIds = $refuseRefundOrderIds;
		$this->apiParas["refuse_refund_order_ids"] = $refuseRefundOrderIds;
	}

	public function getRefuseRefundOrderIds()
	{
		return $this->refuseRefundOrderIds;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.refunds.audit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->agreeRefundOrderIds,50,"agreeRefundOrderIds");
		RequestCheckUtil::checkMaxLength($this->agreeRefundOrderIds,1000,"agreeRefundOrderIds");
		RequestCheckUtil::checkNotNull($this->parentOrderId,"parentOrderId");
		RequestCheckUtil::checkMinValue($this->parentOrderId,0,"parentOrderId");
		RequestCheckUtil::checkMaxListSize($this->refuseRefundOrderIds,50,"refuseRefundOrderIds");
		RequestCheckUtil::checkMaxLength($this->refuseRefundOrderIds,1000,"refuseRefundOrderIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
