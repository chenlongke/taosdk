<?php
/**
 * TOP API: taobao.baodian.charge.chargetoconsume request
 * 
 * @author auto create
 * @since 1.0, 2014-03-26 00:00:00
 */
class BaodianChargeChargetoconsumeRequest
{
	/** 
	 * 用户确认购买的宝点数量
	 **/
	private $amount;
	
	/** 
	 * consumeToken
	 **/
	private $consumeToken;
	
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

	public function setConsumeToken($consumeToken)
	{
		$this->consumeToken = $consumeToken;
		$this->apiParas["consume_token"] = $consumeToken;
	}

	public function getConsumeToken()
	{
		return $this->consumeToken;
	}

	public function getApiMethodName()
	{
		return "taobao.baodian.charge.chargetoconsume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->consumeToken,"consumeToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
