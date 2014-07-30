<?php
/**
 * TOP API: taobao.weibo.member.registeruser request
 * 
 * @author auto create
 * @since 1.0, 2013-06-14 00:00:00
 */
class WeiboMemberRegisteruserRequest
{
	/** 
	 * 注册时使用的邮箱
	 **/
	private $email;
	
	/** 
	 * 注册时的IP
	 **/
	private $ip;
	
	/** 
	 * 注册手机号
	 **/
	private $mobile;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	/** 
	 * 密文密码
	 **/
	private $pwd;
	
	/** 
	 * 对内容串的签名
	 **/
	private $wbsign;
	
	/** 
	 * 微博账号ID
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setPwd($pwd)
	{
		$this->pwd = $pwd;
		$this->apiParas["pwd"] = $pwd;
	}

	public function getPwd()
	{
		return $this->pwd;
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
		return "taobao.weibo.member.registeruser";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ip,"ip");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->pwd,"pwd");
		RequestCheckUtil::checkNotNull($this->wbsign,"wbsign");
		RequestCheckUtil::checkNotNull($this->weiboId,"weiboId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
