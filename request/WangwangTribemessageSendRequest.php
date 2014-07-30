<?php
/**
 * TOP API: taobao.wangwang.tribemessage.send request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class WangwangTribemessageSendRequest
{
	/** 
	 * 消息内容
	 **/
	private $messageContent;
	
	/** 
	 * 消息类型，由业务方事先约定
	 **/
	private $messageType;
	
	/** 
	 * 群ID
	 **/
	private $tribeId;
	
	private $apiParas = array();
	
	public function setMessageContent($messageContent)
	{
		$this->messageContent = $messageContent;
		$this->apiParas["message_content"] = $messageContent;
	}

	public function getMessageContent()
	{
		return $this->messageContent;
	}

	public function setMessageType($messageType)
	{
		$this->messageType = $messageType;
		$this->apiParas["message_type"] = $messageType;
	}

	public function getMessageType()
	{
		return $this->messageType;
	}

	public function setTribeId($tribeId)
	{
		$this->tribeId = $tribeId;
		$this->apiParas["tribe_id"] = $tribeId;
	}

	public function getTribeId()
	{
		return $this->tribeId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.tribemessage.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->messageContent,"messageContent");
		RequestCheckUtil::checkNotNull($this->messageType,"messageType");
		RequestCheckUtil::checkNotNull($this->tribeId,"tribeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
