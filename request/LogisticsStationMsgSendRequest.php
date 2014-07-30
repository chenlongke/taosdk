<?php
/**
 * TOP API: taobao.logistics.station.msg.send request
 * 
 * @author auto create
 * @since 1.0, 2012-11-13 00:00:00
 */
class LogisticsStationMsgSendRequest
{
	/** 
	 * 信息发送的内容
	 **/
	private $content;
	
	/** 
	 * 信息发送的类型，如1，标示发送短信
	 **/
	private $msgType;
	
	/** 
	 * 发送渠道信息，例如发送短信，则为手机号，发送旺旺，这位旺旺ID
	 **/
	private $receiverWay;
	
	/** 
	 * 服务站编码
	 **/
	private $serviceProviderCode;
	
	/** 
	 * 服务站ID
	 **/
	private $stationId;
	
	/** 
	 * 服务站ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setMsgType($msgType)
	{
		$this->msgType = $msgType;
		$this->apiParas["msg_type"] = $msgType;
	}

	public function getMsgType()
	{
		return $this->msgType;
	}

	public function setReceiverWay($receiverWay)
	{
		$this->receiverWay = $receiverWay;
		$this->apiParas["receiver_way"] = $receiverWay;
	}

	public function getReceiverWay()
	{
		return $this->receiverWay;
	}

	public function setServiceProviderCode($serviceProviderCode)
	{
		$this->serviceProviderCode = $serviceProviderCode;
		$this->apiParas["service_provider_code"] = $serviceProviderCode;
	}

	public function getServiceProviderCode()
	{
		return $this->serviceProviderCode;
	}

	public function setStationId($stationId)
	{
		$this->stationId = $stationId;
		$this->apiParas["station_id"] = $stationId;
	}

	public function getStationId()
	{
		return $this->stationId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.station.msg.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->msgType,"msgType");
		RequestCheckUtil::checkNotNull($this->receiverWay,"receiverWay");
		RequestCheckUtil::checkNotNull($this->serviceProviderCode,"serviceProviderCode");
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
