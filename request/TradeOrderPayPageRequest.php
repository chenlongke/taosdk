<?php
/**
 * TOP API: taobao.trade.order.pay.page request
 * 
 * @author auto create
 * @since 1.0, 2012-01-09 00:00:00
 */
class TradeOrderPayPageRequest
{
	/** 
	 * 业务订单编号
	 **/
	private $bizOrderId;
	
	/** 
	 * 业务订单类型，流程页面API业务类型都为620
	 **/
	private $bizType;
	
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

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.order.pay.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
