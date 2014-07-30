<?php
/**
 * TOP API: alibaba.jae.securitymessage.extendcode.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageExtendcodeAddRequest
{
	/** 
	 * 默认为ISV在ISP系统的[身份标识符号]+[业务拓展码]，比如ISV的身份标示符是1111，业务拓展码是001，就可以传1111001
	 **/
	private $extendCode;
	
	/** 
	 * ISP的唯一ID，由JAE开发平台提供已经接入开发平台的第三方服务方id
	 **/
	private $ispId;
	
	/** 
	 * 短信模板用户nick，如果是crm，就是卖家nick
	 **/
	private $templateUserNick;
	
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

	public function setTemplateUserNick($templateUserNick)
	{
		$this->templateUserNick = $templateUserNick;
		$this->apiParas["template_user_nick"] = $templateUserNick;
	}

	public function getTemplateUserNick()
	{
		return $this->templateUserNick;
	}

	public function getApiMethodName()
	{
		return "alibaba.jae.securitymessage.extendcode.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->extendCode,"extendCode");
		RequestCheckUtil::checkNotNull($this->ispId,"ispId");
		RequestCheckUtil::checkNotNull($this->templateUserNick,"templateUserNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
