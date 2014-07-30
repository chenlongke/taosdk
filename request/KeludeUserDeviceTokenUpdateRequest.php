<?php
/**
 * TOP API: taobao.kelude.user.device.token.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeUserDeviceTokenUpdateRequest
{
	/** 
	 * iOS端的token值
	 **/
	private $iosToken;
	
	/** 
	 * Android端的token值
	 **/
	private $salt;
	
	/** 
	 * 用户标示（可以为花名、域账号、工号、邮箱、ID）
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setIosToken($iosToken)
	{
		$this->iosToken = $iosToken;
		$this->apiParas["ios_token"] = $iosToken;
	}

	public function getIosToken()
	{
		return $this->iosToken;
	}

	public function setSalt($salt)
	{
		$this->salt = $salt;
		$this->apiParas["salt"] = $salt;
	}

	public function getSalt()
	{
		return $this->salt;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.user.device.token.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->user,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
