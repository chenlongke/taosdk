<?php
/**
 * TOP API: taobao.chaoshi.refunds.agree request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiRefundsAgreeRequest
{
	/** 
	 * 主订单的id
	 **/
	private $parentOrderId;
	
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

	public function getApiMethodName()
	{
		return "taobao.chaoshi.refunds.agree";
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
