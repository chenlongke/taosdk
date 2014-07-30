<?php
/**
 * TOP API: taobao.weibo.member.activeuser request
 * 
 * @author auto create
 * @since 1.0, 2013-06-14 00:00:00
 */
class WeiboMemberActiveuserRequest
{
	/** 
	 * 电子邮箱
	 **/
	private $email;
	
	/** 
	 * 激活时候的IP
	 **/
	private $ip;
	
	/** 
	 * 手机号码
	 **/
	private $mobile;
	
	/** 
	 * 微博的签名串
	 **/
	private $wbsign;
	
	/** 
	 * 微博ID
	 **/
	private $weiboId;
	
	private $apiParas = array();
	
	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
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

	public function setWbsign($wbsign)
	{
		$this->wbsign = $wbsign;
		$this->apiParas["wbsign"] = $wbsign;
	}

	public function getWbsign()
	{
		return $this->wbsign;
	}

	public function setWeiboId($weiboId)
	{
		$this->weiboId = $weiboId;
		$this->apiParas["weibo_id"] = $weiboId;
	}

	public function getWeiboId()
	{
		return $this->weiboId;
	}

	public function getApiMethodName()
	{
		return "taobao.weibo.member.activeuser";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ip,"ip");
		RequestCheckUtil::checkNotNull($this->wbsign,"wbsign");
		RequestCheckUtil::checkNotNull($this->weiboId,"weiboId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
