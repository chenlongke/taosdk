<?php
/**
 * TOP API: taobao.fang.cservice.offline request
 * 
 * @author auto create
 * @since 1.0, 2013-09-03 00:00:00
 */
class FangCserviceOfflineRequest
{
	/** 
	 * 服务预约宝贝ID
	 **/
	private $serviceId;
	
	/** 
	 * -1代表上架 -2 代表下架
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setServiceId($serviceId)
	{
		$this->serviceId = $serviceId;
		$this->apiParas["service_id"] = $serviceId;
	}

	public function getServiceId()
	{
		return $this->serviceId;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.cservice.offline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceId,"serviceId");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
