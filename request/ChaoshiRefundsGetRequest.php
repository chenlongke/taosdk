<?php
/**
 * TOP API: taobao.chaoshi.refunds.get request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiRefundsGetRequest
{
	/** 
	 * 主定单订单的id
	 **/
	private $parentOrderId;
	
	/** 
	 * 该主定单下指定主退单refundId（可选，当不传，时默认查询主定单下的所有主退单）
	 **/
	private $parentRefundId;
	
	private $apiParas = array();
	
	public function setParentOrderId($parentOrderId)
	{
		$this->parentOrderId = $parentOrderId;
		$this->apiParas["parent_order_id"] = $parentOrderId;
	}

	public function getParentOrderId()
	{
		return $this->parentOrderId;
	}

	public function setParentRefundId($parentRefundId)
	{
		$this->parentRefundId = $parentRefundId;
		$this->apiParas["parent_refund_id"] = $parentRefundId;
	}

	public function getParentRefundId()
	{
		return $this->parentRefundId;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.refunds.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->parentOrderId,"parentOrderId");
		RequestCheckUtil::checkMinValue($this->parentOrderId,0,"parentOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
