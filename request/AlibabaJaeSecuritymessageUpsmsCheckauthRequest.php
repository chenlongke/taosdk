<?php
/**
 * TOP API: alibaba.jae.securitymessage.upsms.checkauth request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageUpsmsCheckauthRequest
{
	/** 
	 * 业务附加码
	 **/
	private $appendId;
	
	/** 
	 * 短信内容
	 **/
	private $content;
	
	/** 
	 * isp的id，必须是真实存在的
	 **/
	private $ispId;
	
	/** 
	 * 签名
	 **/
	private $ispSignature;
	
	/** 
	 * 手机号码
	 **/
	private $mobile;
	
	/** 
	 * 发送的时间
	 **/
	private $recvTime;
	
	/** 
	 * 上行发送时间
	 **/
	private $time;
	
	private $apiParas = array();
	
	public function setAppendId($appendId)
	{
		$this->appendId = $appendId;
		$this->apiParas["append_id"] = $appendId;
	}

	public function getAppendId()
	{
		return $this->appendId;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setIspId($ispId)
	{
		$this->ispId = $ispId;
		$this->apiParas["isp_id"] = $ispId;
	}

	public function getIspId()
	{
		return $this->ispId;
	}

	public function setIspSignature($ispSignature)
	{
		$this->ispSignature = $ispSignature;
		$this->apiParas["isp_signature"] = $ispSignature;
	}

	public function getIspSignature()
	{
		return $this->ispSignature;
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

	public function setRecvTime($recvTime)
	{
		$this->recvTime = $recvTime;
		$this->apiParas["recv_time"] = $recvTime;
	}

	public function getRecvTime()
	{
		return $this->recvTime;
	}

	public function setTime($time)
	{
		$this->time = $time;
		$this->apiParas["time"] = $time;
	}

	public function getTime()
	{
		return $this->time;
	}

	public function getApiMethodName()
	{
		return "alibaba.jae.securitymessage.upsms.checkauth";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appendId,"appendId");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->ispId,"ispId");
		RequestCheckUtil::checkNotNull($this->ispSignature,"ispSignature");
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkNotNull($this->recvTime,"recvTime");
		RequestCheckUtil::checkNotNull($this->time,"time");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
