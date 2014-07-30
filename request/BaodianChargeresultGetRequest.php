<?php
/**
 * TOP API: taobao.baodian.chargeresult.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-26 00:00:00
 */
class BaodianChargeresultGetRequest
{
	/** 
	 * 宝点充值的淘宝订单号
	 **/
	private $tbOrderId;
	
	private $apiParas = array();
	
	public function setTbOrderId($tbOrderId)
	{
		$this->tbOrderId = $tbOrderId;
		$this->apiParas["tb_order_id"] = $tbOrderId;
	}

	public function getTbOrderId()
	{
		return $this->tbOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.baodian.chargeresult.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tbOrderId,"tbOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
