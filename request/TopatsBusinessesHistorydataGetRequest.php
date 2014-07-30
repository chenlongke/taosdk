<?php
/**
 * TOP API: taobao.topats.businesses.historydata.get request
 * 
 * @author auto create
 * @since 1.0, 2013-01-04 00:00:00
 */
class TopatsBusinessesHistorydataGetRequest
{
	/** 
	 * 统计时间，格式为[yyyyMMdd]，范围为昨天（T）至昨天往前推7天（T-6），比如今天是20121112，那么20121105≤statDate≤20121111
	 **/
	private $statDate;
	
	/** 
	 * 时间参数（昨天：DAY、前一周：7DAY ）单选
	 **/
	private $timeSlot;
	
	private $apiParas = array();
	
	public function setStatDate($statDate)
	{
		$this->statDate = $statDate;
		$this->apiParas["stat_date"] = $statDate;
	}

	public function getStatDate()
	{
		return $this->statDate;
	}

	public function setTimeSlot($timeSlot)
	{
		$this->timeSlot = $timeSlot;
		$this->apiParas["time_slot"] = $timeSlot;
	}

	public function getTimeSlot()
	{
		return $this->timeSlot;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.businesses.historydata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->statDate,"statDate");
		RequestCheckUtil::checkNotNull($this->timeSlot,"timeSlot");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
