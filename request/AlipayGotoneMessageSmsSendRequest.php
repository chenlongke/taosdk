<?php
/**
 * TOP API: alipay.gotone.message.sms.send request
 * 
 * @author auto create
 * @since 1.0, 2013-01-21 00:00:00
 */
class AlipayGotoneMessageSmsSendRequest
{
	/** 
	 * 模板参数
	 **/
	private $arguments;
	
	/** 
	 * 接收短信手机号
	 **/
	private $mobile;
	
	/** 
	 * 短信模板对应的serviceCode
	 **/
	private $serviceCode;
	
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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
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
		return "alipay.gotone.message.sms.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
