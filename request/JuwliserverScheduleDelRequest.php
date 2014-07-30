<?php
/**
 * TOP API: taobao.juwliserver.schedule.del request
 * 
 * @author auto create
 * @since 1.0, 2012-11-16 00:00:00
 */
class JuwliserverScheduleDelRequest
{
	/** 
	 * 预下单号
	 **/
	private $scheduleId;
	
	private $apiParas = array();
	
	public function setScheduleId($scheduleId)
	{
		$this->scheduleId = $scheduleId;
		$this->apiParas["schedule_id"] = $scheduleId;
	}

	public function getScheduleId()
	{
		return $this->scheduleId;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.schedule.del";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scheduleId,"scheduleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
