<?php
/**
 * TOP API: taobao.tanx.creative.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-24 00:00:00
 */
class TanxCreativeGetRequest
{
	/** 
	 * 创意ID
	 **/
	private $creativeId;
	
	/** 
	 * DSP的memberId
	 **/
	private $memberId;
	
	/** 
	 * 当前时间戳，1970-01-01后的秒数
	 **/
	private $signTime;
	
	/** 
	 * dsp用户身份认证的TOKEN
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
		$this->apiParas["creative_id"] = $creativeId;
	}

	public function getCreativeId()
	{
		return $this->creativeId;
	}

	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

	public function setSignTime($signTime)
	{
		$this->signTime = $signTime;
		$this->apiParas["sign_time"] = $signTime;
	}

	public function getSignTime()
	{
		return $this->signTime;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.tanx.creative.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->creativeId,"creativeId");
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
		RequestCheckUtil::checkNotNull($this->signTime,"signTime");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
