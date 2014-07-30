<?php
/**
 * TOP API: taobao.trade.acquire.closeorder request
 * 
 * @author auto create
 * @since 1.0, 2014-01-14 00:00:00
 */
class TradeAcquireCloseorderRequest
{
	/** 
	 * 支付宝订单号，最短16位，最长64位。
外部订单号与支付宝订单号（交易号）这2个入口参数必须二选一提供一个参数，二者同时存在，外部订单号为准
	 **/
	private $alipayOrderId;
	
	/** 
	 * 卖家的操作员ID，长度不超过64位
	 **/
	private $operatorId;
	
	/** 
	 * 外部商户订单号，需要商家保证其外部订单号已经存在系统内，否则会报错
	 **/
	private $outId;
	
	private $apiParas = array();
	
	public function setAlipayOrderId($alipayOrderId)
	{
		$this->alipayOrderId = $alipayOrderId;
		$this->apiParas["alipay_order_id"] = $alipayOrderId;
	}

	public function getAlipayOrderId()
	{
		return $this->alipayOrderId;
	}

	public function setOperatorId($operatorId)
	{
		$this->operatorId = $operatorId;
		$this->apiParas["operator_id"] = $operatorId;
	}

	public function getOperatorId()
	{
		return $this->operatorId;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.acquire.closeorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->alipayOrderId,64,"alipayOrderId");
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkMaxLength($this->operatorId,64,"operatorId");
		RequestCheckUtil::checkMaxLength($this->outId,64,"outId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
