<?php
/**
 * TOP API: taobao.baodian.charge.enable request
 * 
 * @author auto create
 * @since 1.0, 2014-03-26 00:00:00
 */
class BaodianChargeEnableRequest
{
	/** 
	 * 用户确认购买的宝点数量
	 **/
	private $amount;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function getApiMethodName()
	{
		return "taobao.baodian.charge.enable";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
