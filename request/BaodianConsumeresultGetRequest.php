<?php
/**
 * TOP API: taobao.baodian.consumeresult.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-26 00:00:00
 */
class BaodianConsumeresultGetRequest
{
	/** 
	 * 外部合作伙伴发起消费申请时得到的消费token
	 **/
	private $consumeToken;
	
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

	public function getApiMethodName()
	{
		return "taobao.baodian.consumeresult.get";
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
