<?php
/**
 * TOP API: taobao.fenxiao.dealer.order.pay request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class FenxiaoDealerOrderPayRequest
{
	/** 
	 * 经销采购单id
	 **/
	private $dealerOrderId;
	
	/** 
	 * 支付信息（经销采购单采用线下转账支付时必填，字数10-100个）
	 **/
	private $payMessage;
	
	/** 
	 * 支付方式（已有支付方式按已有的来。没有选择过支付方式的，按以下常量选择：ALIPAY_SURETY（支付宝担保交易） TRANSFER（线下转账） PREPAY（预存款） IMMEDIATELY（即时到账））
	 **/
	private $payType;
	
	private $apiParas = array();
	
	public function setDealerOrderId($dealerOrderId)
	{
		$this->dealerOrderId = $dealerOrderId;
		$this->apiParas["dealer_order_id"] = $dealerOrderId;
	}

	public function getDealerOrderId()
	{
		return $this->dealerOrderId;
	}

	public function setPayMessage($payMessage)
	{
		$this->payMessage = $payMessage;
		$this->apiParas["pay_message"] = $payMessage;
	}

	public function getPayMessage()
	{
		return $this->payMessage;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->apiParas["pay_type"] = $payType;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.dealer.order.pay";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dealerOrderId,"dealerOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
