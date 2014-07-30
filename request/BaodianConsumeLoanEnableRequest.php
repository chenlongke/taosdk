<?php
/**
 * TOP API: taobao.baodian.consume.loan.enable request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class BaodianConsumeLoanEnableRequest
{
	/** 
	 * 外部合作伙伴发起消费申请时得到的消费token
	 **/
	private $consumeToken;
	
	/** 
	 * 客户端设备号
	 **/
	private $imei;
	
	private $apiParas = array();
	
	public function setConsumeToken($consumeToken)
	{
		$this->consumeToken = $consumeToken;
		$this->apiParas["consume_token"] = $consumeToken;
	}

	public function getConsumeToken()
	{
		return $this->consumeToken;
	}

	public function setImei($imei)
	{
		$this->imei = $imei;
		$this->apiParas["imei"] = $imei;
	}

	public function getImei()
	{
		return $this->imei;
	}

	public function getApiMethodName()
	{
		return "taobao.baodian.consume.loan.enable";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeToken,"consumeToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
