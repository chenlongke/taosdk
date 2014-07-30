<?php
/**
 * TOP API: taobao.notify.user.authorize request
 * 
 * @author auto create
 * @since 1.0, 2011-10-28 00:00:00
 */
class NotifyUserAuthorizeRequest
{
	/** 
	 * 用户授权的时间，以周计算。可选值为1和2，不传默认授权时间为1周。用户授权到期时间不能超过ISV服务到期时间。否则授权会报错。
	 **/
	private $duration;
	
	/** 
	 * 授权用户的邮件地址。
	 **/
	private $email;
	
	private $apiParas = array();
	
	public function setDuration($duration)
	{
		$this->duration = $duration;
		$this->apiParas["duration"] = $duration;
	}

	public function getDuration()
	{
		return $this->duration;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getApiMethodName()
	{
		return "taobao.notify.user.authorize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->duration,2,"duration");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
