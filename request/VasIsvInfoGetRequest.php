<?php
/**
 * TOP API: taobao.vas.isv.info.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasIsvInfoGetRequest
{
	/** 
	 * 下单时间，外部订单时间
	 **/
	private $buyerTime;
	
	/** 
	 * 外部订单号
	 **/
	private $outerOrderId;
	
	/** 
	 * 渠道商编号
	 **/
	private $proxyCode;
	
	private $apiParas = array();
	
	public function setBuyerTime($buyerTime)
	{
		$this->buyerTime = $buyerTime;
		$this->apiParas["buyer_time"] = $buyerTime;
	}

	public function getBuyerTime()
	{
		return $this->buyerTime;
	}

	public function setOuterOrderId($outerOrderId)
	{
		$this->outerOrderId = $outerOrderId;
		$this->apiParas["outer_order_id"] = $outerOrderId;
	}

	public function getOuterOrderId()
	{
		return $this->outerOrderId;
	}

	public function setProxyCode($proxyCode)
	{
		$this->proxyCode = $proxyCode;
		$this->apiParas["proxy_code"] = $proxyCode;
	}

	public function getProxyCode()
	{
		return $this->proxyCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.isv.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerTime,"buyerTime");
		RequestCheckUtil::checkNotNull($this->outerOrderId,"outerOrderId");
		RequestCheckUtil::checkNotNull($this->proxyCode,"proxyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
