<?php
/**
 * TOP API: taobao.jipiao.refund.record request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoRefundRecordRequest
{
	/** 
	 * 订单号
	 **/
	private $orderId;
	
	/** 
	 * 退票时的乘机人姓名
	 **/
	private $passengerName;
	
	/** 
	 * 退款金额，单位是分
	 **/
	private $price;
	
	/** 
	 * 退款时间
	 **/
	private $refundDate;
	
	/** 
	 * 票号；该参数能提供的时候要求尽量提供；不提供只针对某些特殊票可能没有票号
	 **/
	private $ticketNo;
	
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

	public function setPassengerName($passengerName)
	{
		$this->passengerName = $passengerName;
		$this->apiParas["passenger_name"] = $passengerName;
	}

	public function getPassengerName()
	{
		return $this->passengerName;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setRefundDate($refundDate)
	{
		$this->refundDate = $refundDate;
		$this->apiParas["refund_date"] = $refundDate;
	}

	public function getRefundDate()
	{
		return $this->refundDate;
	}

	public function setTicketNo($ticketNo)
	{
		$this->ticketNo = $ticketNo;
		$this->apiParas["ticket_no"] = $ticketNo;
	}

	public function getTicketNo()
	{
		return $this->ticketNo;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.refund.record";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->passengerName,"passengerName");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->refundDate,"refundDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
