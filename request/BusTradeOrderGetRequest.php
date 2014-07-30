<?php
/**
 * TOP API: taobao.bus.trade.order.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class BusTradeOrderGetRequest
{
	/** 
	 * 主订单号
	 **/
	private $mainBizOrderId;
	
	private $apiParas = array();
	
	public function setMainBizOrderId($mainBizOrderId)
	{
		$this->mainBizOrderId = $mainBizOrderId;
		$this->apiParas["main_biz_order_id"] = $mainBizOrderId;
	}

	public function getMainBizOrderId()
	{
		return $this->mainBizOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.bus.trade.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainBizOrderId,"mainBizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
