<?php
/**
 * TOP API: taobao.chaoshi.order.cancel request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiOrderCancelRequest
{
	/** 
	 * 要取消的主订单id。
	 **/
	private $bizOrderId;
	
	/** 
	 * 执行此操作的客户端ip
	 **/
	private $clientIp;
	
	/** 
	 * 订单取消原因
	 **/
	private $closeReason;
	
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

	public function setClientIp($clientIp)
	{
		$this->clientIp = $clientIp;
		$this->apiParas["client_ip"] = $clientIp;
	}

	public function getClientIp()
	{
		return $this->clientIp;
	}

	public function setCloseReason($closeReason)
	{
		$this->closeReason = $closeReason;
		$this->apiParas["close_reason"] = $closeReason;
	}

	public function getCloseReason()
	{
		return $this->closeReason;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.order.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->clientIp,"clientIp");
		RequestCheckUtil::checkNotNull($this->closeReason,"closeReason");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
