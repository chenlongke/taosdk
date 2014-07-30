<?php
/**
 * TOP API: taobao.warehouse.order.cancel request
 * 
 * @author auto create
 * @since 1.0, 2011-05-17 00:00:00
 */
class WarehouseOrderCancelRequest
{
	/** 
	 * 物流订单ID(order_id可以根据接口taobao.warehouse.orders.page.get得到)
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.order.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
