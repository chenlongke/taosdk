<?php
/**
 * TOP API: alibaba.laiwang.internal.pp.message.send request
 * 
 * @author auto create
 * @since 1.0, 2014-03-03 00:00:00
 */
class AlibabaLaiwangInternalPpMessageSendRequest
{
	/** 
	 * 发送的消息体，使用json格式来进行发送.
	 **/
	private $message;
	
	/** 
	 * 发送账号的类型，比如淘宝彩票等等.
	 **/
	private $sourceType;
	
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

	public function setSourceType($sourceType)
	{
		$this->sourceType = $sourceType;
		$this->apiParas["source_type"] = $sourceType;
	}

	public function getSourceType()
	{
		return $this->sourceType;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.internal.pp.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->message,"message");
		RequestCheckUtil::checkNotNull($this->sourceType,"sourceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
