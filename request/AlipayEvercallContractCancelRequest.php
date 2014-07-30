<?php
/**
 * TOP API: alipay.evercall.contract.cancel request
 * 
 * @author auto create
 * @since 1.0, 2013-02-16 00:00:00
 */
class AlipayEvercallContractCancelRequest
{
	/** 
	 * 支付宝给用户的授权。
	 **/
	private $authToken;
	
	/** 
	 * 签约手机号
	 **/
	private $mobileNo;
	
	/** 
	 * 解约渠道(SMS：短信方式  CLIENT：客户端  WAP：wap SITE：主站 OPENPLAT:开放平台  OTHER：其他)
	 **/
	private $unsignChannel;
	
	/** 
	 * 运营统计：taobao,alipay,telecom
	 **/
	private $unsignFrom;
	
	/** 
	 * 支付宝账户号
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function setMobileNo($mobileNo)
	{
		$this->mobileNo = $mobileNo;
		$this->apiParas["mobile_no"] = $mobileNo;
	}

	public function getMobileNo()
	{
		return $this->mobileNo;
	}

	public function setUnsignChannel($unsignChannel)
	{
		$this->unsignChannel = $unsignChannel;
		$this->apiParas["unsign_channel"] = $unsignChannel;
	}

	public function getUnsignChannel()
	{
		return $this->unsignChannel;
	}

	public function setUnsignFrom($unsignFrom)
	{
		$this->unsignFrom = $unsignFrom;
		$this->apiParas["unsign_from"] = $unsignFrom;
	}

	public function getUnsignFrom()
	{
		return $this->unsignFrom;
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
		return "alipay.evercall.contract.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->authToken,"authToken");
		RequestCheckUtil::checkNotNull($this->mobileNo,"mobileNo");
		RequestCheckUtil::checkNotNull($this->unsignChannel,"unsignChannel");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
