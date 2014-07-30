<?php
/**
 * TOP API: alibaba.jae.securitymessage.extendcode.init request
 * 
 * @author auto create
 * @since 1.0, 2014-01-14 00:00:00
 */
class AlibabaJaeSecuritymessageExtendcodeInitRequest
{
	/** 
	 * 默认为ISV在ISP系统的[身份标识符号]+[业务拓展码]，比如ISV的身份标示符是1111，业务拓展码是001，就可以传1111001
	 **/
	private $extendCode;
	
	/** 
	 * ISP的唯一ID，由JAE开发平台提供已经接入开发平台的第三方服务方id
	 **/
	private $ispId;
	
	private $apiParas = array();
	
	public function setExtendCode($extendCode)
	{
		$this->extendCode = $extendCode;
		$this->apiParas["extend_code"] = $extendCode;
	}

	public function getExtendCode()
	{
		return $this->extendCode;
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

	public function getApiMethodName()
	{
		return "alibaba.jae.securitymessage.extendcode.init";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->extendCode,"extendCode");
		RequestCheckUtil::checkNotNull($this->ispId,"ispId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
