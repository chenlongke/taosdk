<?php
/**
 * TOP API: taobao.logistics.station.info.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-23 00:00:00
 */
class LogisticsStationInfoGetRequest
{
	/** 
	 * 服务站编码，目前传入“xiaoyouju”即可
	 **/
	private $serviceProviderCode;
	
	/** 
	 * 服务站名称
	 **/
	private $stationName;
	
	/** 
	 * 淘宝用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setServiceProviderCode($serviceProviderCode)
	{
		$this->serviceProviderCode = $serviceProviderCode;
		$this->apiParas["service_provider_code"] = $serviceProviderCode;
	}

	public function getServiceProviderCode()
	{
		return $this->serviceProviderCode;
	}

	public function setStationName($stationName)
	{
		$this->stationName = $stationName;
		$this->apiParas["station_name"] = $stationName;
	}

	public function getStationName()
	{
		return $this->stationName;
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
		return "taobao.logistics.station.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceProviderCode,"serviceProviderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
