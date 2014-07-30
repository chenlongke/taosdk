<?php
/**
 * TOP API: taobao.logistics.station.order.querybydate request
 * 
 * @author auto create
 * @since 1.0, 2012-07-13 00:00:00
 */
class LogisticsStationOrderQuerybydateRequest
{
	/** 
	 * 开始的时间
	 **/
	private $fromDate;
	
	/** 
	 * 服务站编码
	 **/
	private $serviceProviderCode;
	
	/** 
	 * 截止的时间
	 **/
	private $toDate;
	
	private $apiParas = array();
	
	public function setFromDate($fromDate)
	{
		$this->fromDate = $fromDate;
		$this->apiParas["from_date"] = $fromDate;
	}

	public function getFromDate()
	{
		return $this->fromDate;
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

	public function setToDate($toDate)
	{
		$this->toDate = $toDate;
		$this->apiParas["to_date"] = $toDate;
	}

	public function getToDate()
	{
		return $this->toDate;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.station.order.querybydate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fromDate,"fromDate");
		RequestCheckUtil::checkNotNull($this->serviceProviderCode,"serviceProviderCode");
		RequestCheckUtil::checkNotNull($this->toDate,"toDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
