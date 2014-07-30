<?php
/**
 * TOP API: taobao.bus.trade.refund request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class BusTradeRefundRequest
{
	/** 
	 * 是否同意退款
	 **/
	private $agreeRefund;
	
	/** 
	 * 订单id
	 **/
	private $mainBizOrderId;
	
	private $apiParas = array();
	
	public function setAgreeRefund($agreeRefund)
	{
		$this->agreeRefund = $agreeRefund;
		$this->apiParas["agree_refund"] = $agreeRefund;
	}

	public function getAgreeRefund()
	{
		return $this->agreeRefund;
	}

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
		return "taobao.bus.trade.refund";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agreeRefund,"agreeRefund");
		RequestCheckUtil::checkNotNull($this->mainBizOrderId,"mainBizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
