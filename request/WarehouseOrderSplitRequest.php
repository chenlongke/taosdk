<?php
/**
 * TOP API: taobao.warehouse.order.split request
 * 
 * @author auto create
 * @since 1.0, 2011-01-12 00:00:00
 */
class WarehouseOrderSplitRequest
{
	/** 
	 * 物流订单LP号，与交易订单号和物流订单ID三者选其一，优先级别：交易订单号>物流订单LP号>物流订单ID
	 **/
	private $orderCode;
	
	/** 
	 * 物流订单ID，与交易订单号和物流订单LP号三者选其一，优先级别：交易订单号>物流订单LP号>物流订单ID
	 **/
	private $orderId;
	
	/** 
	 * 商家编码，以逗号隔开，一次最多500个商品
	 **/
	private $outerIds;
	
	/** 
	 * 交易订单号，与物流订单LP号和物流订单ID三者选其一，优先级别：交易订单号>物流订单LP号>物流订单ID
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

	public function setOuterIds($outerIds)
	{
		$this->outerIds = $outerIds;
		$this->apiParas["outer_ids"] = $outerIds;
	}

	public function getOuterIds()
	{
		return $this->outerIds;
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
		return "taobao.warehouse.order.split";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->orderCode,32,"orderCode");
		RequestCheckUtil::checkMinValue($this->orderId,1,"orderId");
		RequestCheckUtil::checkNotNull($this->outerIds,"outerIds");
		RequestCheckUtil::checkMaxListSize($this->outerIds,500,"outerIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
