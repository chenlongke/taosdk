<?php
/**
 * TOP API: taobao.taobaoke.interval.report.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-17 00:00:00
 */
class TaobaokeIntervalReportGetRequest
{
	/** 
	 * 查询结束时间，格式为yyyy-MM-dd HH:mm:ss.
	 **/
	private $endDate;
	
	/** 
	 * 查询起始时间，格式为yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.interval.report.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
