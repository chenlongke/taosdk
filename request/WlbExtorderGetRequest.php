<?php
/**
 * TOP API: taobao.wlb.extorder.get request
 * 
 * @author auto create
 * @since 1.0, 2011-03-29 00:00:00
 */
class WlbExtorderGetRequest
{
	/** 
	 * 外部订单编号
	 **/
	private $extOrderId;
	
	/** 
	 * 外部订单状态
	 **/
	private $extOrderStatus;
	
	/** 
	 * 外部订单类型
	 **/
	private $extOrderType;
	
	private $apiParas = array();
	
	public function setExtOrderId($extOrderId)
	{
		$this->extOrderId = $extOrderId;
		$this->apiParas["ext_order_id"] = $extOrderId;
	}

	public function getExtOrderId()
	{
		return $this->extOrderId;
	}

	public function setExtOrderStatus($extOrderStatus)
	{
		$this->extOrderStatus = $extOrderStatus;
		$this->apiParas["ext_order_status"] = $extOrderStatus;
	}

	public function getExtOrderStatus()
	{
		return $this->extOrderStatus;
	}

	public function setExtOrderType($extOrderType)
	{
		$this->extOrderType = $extOrderType;
		$this->apiParas["ext_order_type"] = $extOrderType;
	}

	public function getExtOrderType()
	{
		return $this->extOrderType;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.extorder.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
