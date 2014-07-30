<?php
/**
 * TOP API: alibaba.jae.securitymessage.shortmessage.send request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageShortmessageSendRequest
{
	/** 
	 * 消息动态数据，kv值对
	 **/
	private $dataContent;
	
	/** 
	 * 短信服务提供商的id
	 **/
	private $ispId;
	
	/** 
	 * 发送短信到该手机号码
	 **/
	private $mobile;
	
	/** 
	 * 用户密码
	 **/
	private $password;
	
	/** 
	 * 短信服务商需要的签名
	 **/
	private $signature;
	
	/** 
	 * 模板id
	 **/
	private $templateId;
	
	/** 
	 * 模板的提交者昵称
	 **/
	private $templateUserNick;
	
	/** 
	 * 用户名称
	 **/
	private $username;
	
	private $apiParas = array();
	
	public function setDataContent($dataContent)
	{
		$this->dataContent = $dataContent;
		$this->apiParas["data_content"] = $dataContent;
	}

	public function getDataContent()
	{
		return $this->dataContent;
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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setSignature($signature)
	{
		$this->signature = $signature;
		$this->apiParas["signature"] = $signature;
	}

	public function getSignature()
	{
		return $this->signature;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
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

	public function setUsername($username)
	{
		$this->username = $username;
		$this->apiParas["username"] = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getApiMethodName()
	{
		return "alibaba.jae.securitymessage.shortmessage.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->dataContent,100,"dataContent");
		RequestCheckUtil::checkNotNull($this->ispId,"ispId");
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkMaxLength($this->mobile,11,"mobile");
		RequestCheckUtil::checkNotNull($this->password,"password");
		RequestCheckUtil::checkMaxLength($this->password,40,"password");
		RequestCheckUtil::checkMaxLength($this->signature,70,"signature");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkMaxValue($this->templateId,10000000000,"templateId");
		RequestCheckUtil::checkMinValue($this->templateId,0,"templateId");
		RequestCheckUtil::checkNotNull($this->templateUserNick,"templateUserNick");
		RequestCheckUtil::checkMaxLength($this->templateUserNick,20,"templateUserNick");
		RequestCheckUtil::checkNotNull($this->username,"username");
		RequestCheckUtil::checkMaxLength($this->username,40,"username");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
