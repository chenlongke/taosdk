<?php
/**
 * TOP API: taobao.jipiao.modify.add request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoModifyAddRequest
{
	/** 
	 * 提交改签订单对应的票的乘机人姓名数组；会对一张票最多支持9个乘机人进行校验
	 **/
	private $names;
	
	/** 
	 * 提交改签的机票订单id
	 **/
	private $orderId;
	
	/** 
	 * 提交机票航班改签的原因
	 **/
	private $reason;
	
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

	public function getApiMethodName()
	{
		return "taobao.jipiao.modify.add";
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
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
