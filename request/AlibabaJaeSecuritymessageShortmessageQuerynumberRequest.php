<?php
/**
 * TOP API: alibaba.jae.securitymessage.shortmessage.querynumber request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageShortmessageQuerynumberRequest
{
	/** 
	 * 短信服务提供商的id
	 **/
	private $ispId;
	
	/** 
	 * 用户密码
	 **/
	private $password;
	
	/** 
	 * 短信服务商需要的签名
	 **/
	private $signature;
	
	/** 
	 * 用户名称
	 **/
	private $username;
	
	private $apiParas = array();
	
	public function setIspId($ispId)
	{
		$this->ispId = $ispId;
		$this->apiParas["isp_id"] = $ispId;
	}

	public function getIspId()
	{
		return $this->ispId;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setSignature($signature)
	{
		$this->signature = $signature;
		$this->apiParas["signature"] = $signature;
	}

	public function getSignature()
	{
		return $this->signature;
	}

	public function setUsername($username)
	{
		$this->username = $username;
		$this->apiParas["username"] = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getApiMethodName()
	{
		return "alibaba.jae.securitymessage.shortmessage.querynumber";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ispId,"ispId");
		RequestCheckUtil::checkNotNull($this->password,"password");
		RequestCheckUtil::checkMaxLength($this->password,40,"password");
		RequestCheckUtil::checkMaxLength($this->signature,70,"signature");
		RequestCheckUtil::checkNotNull($this->username,"username");
		RequestCheckUtil::checkMaxLength($this->username,40,"username");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
