<?php
/**
 * TOP API: taobao.jipiao.order.ka.cancel request
 * 
 * @author auto create
 * @since 1.0, 2012-06-13 00:00:00
 */
class JipiaoOrderKaCancelRequest
{
	/** 
	 * 航空公司订单外部唯一标识
	 **/
	private $bookCode;
	
	/** 
	 * 淘宝订单号
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setBookCode($bookCode)
	{
		$this->bookCode = $bookCode;
		$this->apiParas["book_code"] = $bookCode;
	}

	public function getBookCode()
	{
		return $this->bookCode;
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

	public function getApiMethodName()
	{
		return "taobao.jipiao.order.ka.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookCode,"bookCode");
		RequestCheckUtil::checkMaxLength($this->bookCode,40,"bookCode");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
