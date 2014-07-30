<?php
/**
 * TOP API: taobao.fang.cservice.update request
 * 
 * @author auto create
 * @since 1.0, 2013-09-03 00:00:00
 */
class FangCserviceUpdateRequest
{
	/** 
	 * 服务ID
	 **/
	private $serviceId;
	
	/** 
	 * 看房服务---专车接送
	 **/
	private $specialVehicles;
	
	/** 
	 * 我是看房红包，单位是元
	 **/
	private $viewGift;
	
	/** 
	 * 我是看房服务内容
	 **/
	private $viewServiceContent;
	
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

	public function setSpecialVehicles($specialVehicles)
	{
		$this->specialVehicles = $specialVehicles;
		$this->apiParas["special_vehicles"] = $specialVehicles;
	}

	public function getSpecialVehicles()
	{
		return $this->specialVehicles;
	}

	public function setViewGift($viewGift)
	{
		$this->viewGift = $viewGift;
		$this->apiParas["view_gift"] = $viewGift;
	}

	public function getViewGift()
	{
		return $this->viewGift;
	}

	public function setViewServiceContent($viewServiceContent)
	{
		$this->viewServiceContent = $viewServiceContent;
		$this->apiParas["view_service_content"] = $viewServiceContent;
	}

	public function getViewServiceContent()
	{
		return $this->viewServiceContent;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.cservice.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceId,"serviceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
