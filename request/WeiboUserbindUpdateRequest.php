<?php
/**
 * TOP API: taobao.weibo.userbind.update request
 * 
 * @author auto create
 * @since 1.0, 2013-08-13 00:00:00
 */
class WeiboUserbindUpdateRequest
{
	/** 
	 * 是否需要判断参数合法性
	 **/
	private $needcheck;
	
	/** 
	 * 附带信息，包括ip和source（来源）
	 **/
	private $slot;
	
	/** 
	 * 签名，用于验证请求来源的安全
	 **/
	private $wbsign;
	
	/** 
	 * 新浪微博用户id
	 **/
	private $wbuserid;
	
	private $apiParas = array();
	
	public function setNeedcheck($needcheck)
	{
		$this->needcheck = $needcheck;
		$this->apiParas["needcheck"] = $needcheck;
	}

	public function getNeedcheck()
	{
		return $this->needcheck;
	}

	public function setSlot($slot)
	{
		$this->slot = $slot;
		$this->apiParas["slot"] = $slot;
	}

	public function getSlot()
	{
		return $this->slot;
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
		return "taobao.weibo.userbind.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->needcheck,"needcheck");
		RequestCheckUtil::checkNotNull($this->wbsign,"wbsign");
		RequestCheckUtil::checkNotNull($this->wbuserid,"wbuserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
