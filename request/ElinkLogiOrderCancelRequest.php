<?php
/**
 * TOP API: taobao.elink.logi.order.cancel request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkLogiOrderCancelRequest
{
	/** 
	 * 需要取消的物流订单ID
	 **/
	private $logisticsOrderId;
	
	private $apiParas = array();
	
	public function setLogisticsOrderId($logisticsOrderId)
	{
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParas["logistics_order_id"] = $logisticsOrderId;
	}

	public function getLogisticsOrderId()
	{
		return $this->logisticsOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.logi.order.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsOrderId,"logisticsOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
