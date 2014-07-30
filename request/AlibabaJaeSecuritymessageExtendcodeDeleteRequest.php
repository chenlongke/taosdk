<?php
/**
 * TOP API: alibaba.jae.securitymessage.extendcode.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageExtendcodeDeleteRequest
{
	/** 
	 * isp的id
	 **/
	private $ispId;
	
	/** 
	 * 短信使用者id
	 **/
	private $templateUserNick;
	
	private $apiParas = array();
	
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
		return "alibaba.jae.securitymessage.extendcode.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ispId,"ispId");
		RequestCheckUtil::checkNotNull($this->templateUserNick,"templateUserNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
