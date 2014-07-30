<?php
/**
 * TOP API: taobao.wireless.gamecenter.event.record request
 * 
 * @author auto create
 * @since 1.0, 2014-01-08 00:00:00
 */
class WirelessGamecenterEventRecordRequest
{
	/** 
	 * 事件标识
	 **/
	private $eventId;
	
	/** 
	 * 用户扩展参数
	 **/
	private $options;
	
	private $apiParas = array();
	
	public function setEventId($eventId)
	{
		$this->eventId = $eventId;
		$this->apiParas["event_id"] = $eventId;
	}

	public function getEventId()
	{
		return $this->eventId;
	}

	public function setOptions($options)
	{
		$this->options = $options;
		$this->apiParas["options"] = $options;
	}

	public function getOptions()
	{
		return $this->options;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.gamecenter.event.record";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->eventId,"eventId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
