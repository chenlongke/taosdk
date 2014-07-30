<?php
/**
 * TOP API: taobao.kelude.message.send request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeMessageSendRequest
{
	/** 
	 * 消息的唯一标识符
	 **/
	private $keyString;
	
	/** 
	 * 消息类型，只有wangwang和email两种
	 **/
	private $noticeType;
	
	/** 
	 * 消息的内容，json化的string格式。Map<String,Object> payload = new HashMap<String,Object>();wangwang example: payload.put("subject",String);payload.put("content",String);payload.put("userIds",List<Integer>); 0r payload.put("wangwangs",List<String>);	email example: 	payload.put("subject",String);payload.put("content",String);payload.put("emails",List<String>);payload.put("ccEmails",List<String>);payload.put("bccEmails",List<String>);payload.put("userIds",List<Integer>);payload.put("ccUserIds",List<Integer>);payload.put("bccUserIds",List<Integer>);	String strPayload = JsonXmlUtils.toJSONString(payload);
	 **/
	private $strPayload;
	
	private $apiParas = array();
	
	public function setKeyString($keyString)
	{
		$this->keyString = $keyString;
		$this->apiParas["key_string"] = $keyString;
	}

	public function getKeyString()
	{
		return $this->keyString;
	}

	public function setNoticeType($noticeType)
	{
		$this->noticeType = $noticeType;
		$this->apiParas["notice_type"] = $noticeType;
	}

	public function getNoticeType()
	{
		return $this->noticeType;
	}

	public function setStrPayload($strPayload)
	{
		$this->strPayload = $strPayload;
		$this->apiParas["str_payload"] = $strPayload;
	}

	public function getStrPayload()
	{
		return $this->strPayload;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->keyString,"keyString");
		RequestCheckUtil::checkNotNull($this->noticeType,"noticeType");
		RequestCheckUtil::checkNotNull($this->strPayload,"strPayload");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
