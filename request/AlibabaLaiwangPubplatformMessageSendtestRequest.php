<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.message.sendtest request
 * 
 * @author auto create
 * @since 1.0, 2014-01-15 00:00:00
 */
class AlibabaLaiwangPubplatformMessageSendtestRequest
{
	/** 
	 * 发送的消息体，使用json格式来进行发送.
	 **/
	private $message;
	
	private $apiParas = array();
	
	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.message.sendtest";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->message,"message");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
