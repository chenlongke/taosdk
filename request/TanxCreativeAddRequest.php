<?php
/**
 * TOP API: taobao.tanx.creative.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-21 00:00:00
 */
class TanxCreativeAddRequest
{
	/** 
	 * 创意代码
	 **/
	private $adboardData;
	
	/** 
	 * 创意尺寸,中间以小写字母x分隔
	 **/
	private $adboardSize;
	
	/** 
	 * 广告类目 如果有多个，以逗号分隔
	 **/
	private $adboardType;
	
	/** 
	 * 创意id
	 **/
	private $creativeId;
	
	/** 
	 * 目标地址
	 **/
	private $destinationUrl;
	
	/** 
	 * DSP的memberId
	 **/
	private $memberId;
	
	/** 
	 * 敏感词类目，多个的话以逗号分隔
	 **/
	private $sensitiveType;
	
	/** 
	 * 当前时间戳，1970-01-01后的秒数
	 **/
	private $signTime;
	
	/** 
	 * dsp用户身份认证的TOKEN
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setAdboardData($adboardData)
	{
		$this->adboardData = $adboardData;
		$this->apiParas["adboard_data"] = $adboardData;
	}

	public function getAdboardData()
	{
		return $this->adboardData;
	}

	public function setAdboardSize($adboardSize)
	{
		$this->adboardSize = $adboardSize;
		$this->apiParas["adboard_size"] = $adboardSize;
	}

	public function getAdboardSize()
	{
		return $this->adboardSize;
	}

	public function setAdboardType($adboardType)
	{
		$this->adboardType = $adboardType;
		$this->apiParas["adboard_type"] = $adboardType;
	}

	public function getAdboardType()
	{
		return $this->adboardType;
	}

	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
		$this->apiParas["creative_id"] = $creativeId;
	}

	public function getCreativeId()
	{
		return $this->creativeId;
	}

	public function setDestinationUrl($destinationUrl)
	{
		$this->destinationUrl = $destinationUrl;
		$this->apiParas["destination_url"] = $destinationUrl;
	}

	public function getDestinationUrl()
	{
		return $this->destinationUrl;
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

	public function setSensitiveType($sensitiveType)
	{
		$this->sensitiveType = $sensitiveType;
		$this->apiParas["sensitive_type"] = $sensitiveType;
	}

	public function getSensitiveType()
	{
		return $this->sensitiveType;
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
		return "taobao.tanx.creative.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adboardData,"adboardData");
		RequestCheckUtil::checkNotNull($this->adboardSize,"adboardSize");
		RequestCheckUtil::checkNotNull($this->adboardType,"adboardType");
		RequestCheckUtil::checkNotNull($this->creativeId,"creativeId");
		RequestCheckUtil::checkNotNull($this->destinationUrl,"destinationUrl");
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
		RequestCheckUtil::checkNotNull($this->signTime,"signTime");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
