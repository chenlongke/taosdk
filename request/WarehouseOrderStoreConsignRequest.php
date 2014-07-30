<?php
/**
 * TOP API: taobao.warehouse.order.storeConsign request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseOrderStoreConsignRequest
{
	/** 
	 * 此字段为物流订单编号。订单id、淘宝交易号、物流订单编号这三个至少有个一不为空。优先级为 淘宝交易号 > 物流订单编号 > 订单id。(若淘宝交易号不为空，则就用淘宝交易号来查,其他两个字段忽略;若淘宝交易号为空，物流订单编号不为空，则用物流订单编号来查，订单id字段忽略;若淘宝交易号和物流订单编号都为空，订单id不为空，则用订单id来查;三者都为空返回错误信息。)
	 **/
	private $orderCode;
	
	/** 
	 * 此字段为订单id。
订单id、淘宝交易号、物流订单编号这三个至少有个一不为空。优先级为 淘宝交易号 > 物流订单编号 > 订单id。(若淘宝交易号不为空，则就用淘宝交易号来查,其他两个字段忽略;若淘宝交易号为空，物流订单编号不为空，则用物流订单编号来查，订单id字段忽略;若淘宝交易号和物流订单编号都为空，订单id不为空，则用订单id来查;三者都为空返回错误信息。)
	 **/
	private $orderId;
	
	/** 
	 * 发货仓储id可以从接口taobao.warehouse.sellerstores.get中得到
	 **/
	private $sellerStoreId;
	
	/** 
	 * 此字段为淘宝交易号。订单id、淘宝交易号、物流订单编号这三个至少有个一不为空。优先级为 淘宝交易号 > 物流订单编号 > 订单id。(若淘宝交易号不为空，则就用淘宝交易号来查,其他两个字段忽略;若淘宝交易号为空，物流订单编号不为空，则用物流订单编号来查，订单id字段忽略;若淘宝交易号和物流订单编号都为空，订单id不为空，则用订单id来查;三者都为空返回错误信息。)
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
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

	public function setSellerStoreId($sellerStoreId)
	{
		$this->sellerStoreId = $sellerStoreId;
		$this->apiParas["seller_store_id"] = $sellerStoreId;
	}

	public function getSellerStoreId()
	{
		return $this->sellerStoreId;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.order.storeConsign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->orderCode,40,"orderCode");
		RequestCheckUtil::checkNotNull($this->sellerStoreId,"sellerStoreId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
