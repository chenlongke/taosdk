<?php
/**
 * TOP API: taobao.jipiao.refund.add request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoRefundAddRequest
{
	/** 
	 * 提交退票订单对应的票的乘机人姓名；会对一张订单最多支持9个乘机人进行校验
	 **/
	private $names;
	
	/** 
	 * 提交退票订单的id
	 **/
	private $orderId;
	
	/** 
	 * 提交退票的原因
	 **/
	private $reason;
	
	/** 
	 * 退票类型，自愿退票或者非自愿退票；true为非自愿退票，false为自愿退票
	 **/
	private $refundType;
	
	private $apiParas = array();
	
	public function setNames($names)
	{
		$this->names = $names;
		$this->apiParas["names"] = $names;
	}

	public function getNames()
	{
		return $this->names;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setRefundType($refundType)
	{
		$this->refundType = $refundType;
		$this->apiParas["refund_type"] = $refundType;
	}

	public function getRefundType()
	{
		return $this->refundType;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.refund.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->names,"names");
		RequestCheckUtil::checkMaxListSize($this->names,9,"names");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->refundType,"refundType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
