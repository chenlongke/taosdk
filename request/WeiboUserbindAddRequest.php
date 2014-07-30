<?php
/**
 * TOP API: taobao.weibo.userbind.add request
 * 
 * @author auto create
 * @since 1.0, 2013-08-13 00:00:00
 */
class WeiboUserbindAddRequest
{
	/** 
	 * 附带信息，包括ip和source（来源）
	 **/
	private $slot;
	
	/** 
	 * 淘宝传给新浪的一个令牌，新浪调用淘宝的接口时需要传过来，淘宝验证通过之后才允许调用
	 **/
	private $tbcode;
	
	/** 
	 * 淘宝用户id
	 **/
	private $tbuserid;
	
	/** 
	 * 微博top令牌
	 **/
	private $wbaccesstoken;
	
	/** 
	 * 签名，用于验证请求来源的安全
	 **/
	private $wbsign;
	
	/** 
	 * 新浪微博用户id
	 **/
	private $wbuserid;
	
	private $apiParas = array();
	
	public function setSlot($slot)
	{
		$this->slot = $slot;
		$this->apiParas["slot"] = $slot;
	}

	public function getSlot()
	{
		return $this->slot;
	}

	public function setTbcode($tbcode)
	{
		$this->tbcode = $tbcode;
		$this->apiParas["tbcode"] = $tbcode;
	}

	public function getTbcode()
	{
		return $this->tbcode;
	}

	public function setTbuserid($tbuserid)
	{
		$this->tbuserid = $tbuserid;
		$this->apiParas["tbuserid"] = $tbuserid;
	}

	public function getTbuserid()
	{
		return $this->tbuserid;
	}

	public function setWbaccesstoken($wbaccesstoken)
	{
		$this->wbaccesstoken = $wbaccesstoken;
		$this->apiParas["wbaccesstoken"] = $wbaccesstoken;
	}

	public function getWbaccesstoken()
	{
		return $this->wbaccesstoken;
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

	public function setWbuserid($wbuserid)
	{
		$this->wbuserid = $wbuserid;
		$this->apiParas["wbuserid"] = $wbuserid;
	}

	public function getWbuserid()
	{
		return $this->wbuserid;
	}

	public function getApiMethodName()
	{
		return "taobao.weibo.userbind.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tbcode,"tbcode");
		RequestCheckUtil::checkNotNull($this->tbuserid,"tbuserid");
		RequestCheckUtil::checkNotNull($this->wbaccesstoken,"wbaccesstoken");
		RequestCheckUtil::checkNotNull($this->wbsign,"wbsign");
		RequestCheckUtil::checkNotNull($this->wbuserid,"wbuserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
