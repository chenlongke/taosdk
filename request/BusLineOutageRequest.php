<?php
/**
 * TOP API: taobao.bus.line.outage request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class BusLineOutageRequest
{
	/** 
	 * 班次号
	 **/
	private $scheduleNumber;
	
	private $apiParas = array();
	
	public function setScheduleNumber($scheduleNumber)
	{
		$this->scheduleNumber = $scheduleNumber;
		$this->apiParas["schedule_number"] = $scheduleNumber;
	}

	public function getScheduleNumber()
	{
		return $this->scheduleNumber;
	}

	public function getApiMethodName()
	{
		return "taobao.bus.line.outage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scheduleNumber,"scheduleNumber");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
