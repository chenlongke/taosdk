<?php
/**
 * TOP API: taobao.chaoshi.order.get request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiOrderGetRequest
{
	/** 
	 * 要查看详情的订单id。
如果传入的是子订单Id，会自动按照它的父订单Id查询
	 **/
	private $bizOrderId;
	
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

	public function getApiMethodName()
	{
		return "taobao.chaoshi.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkMinValue($this->bizOrderId,1,"bizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
