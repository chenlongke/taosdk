<?php
/**
 * TOP API: alipay.gotone.message.mail.send request
 * 
 * @author auto create
 * @since 1.0, 2013-01-07 00:00:00
 */
class AlipayGotoneMessageMailSendRequest
{
	/** 
	 * 模板参数
	 **/
	private $arguments;
	
	/** 
	 * 收件人邮箱地址
	 **/
	private $receiver;
	
	/** 
	 * 邮件模板对应的serviceCode
	 **/
	private $serviceCode;
	
	/** 
	 * 邮件主题
	 **/
	private $subject;
	
	/** 
	 * 用户的支付宝ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setArguments($arguments)
	{
		$this->arguments = $arguments;
		$this->apiParas["arguments"] = $arguments;
	}

	public function getArguments()
	{
		return $this->arguments;
	}

	public function setReceiver($receiver)
	{
		$this->receiver = $receiver;
		$this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver()
	{
		return $this->receiver;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
		$this->apiParas["subject"] = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.gotone.message.mail.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->receiver,"receiver");
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
