<?php
/**
 * TOP API: taobao.fang.cservice.publish request
 * 
 * @author auto create
 * @since 1.0, 2013-09-03 00:00:00
 */
class FangCservicePublishRequest
{
	/** 
	 * 楼盘的id
	 **/
	private $buildingId;
	
	/** 
	 * 看房服务---专车接送
	 **/
	private $specialVehicles;
	
	/** 
	 * -1 上架  -2 下架  -3 删除
	 **/
	private $status;
	
	/** 
	 * 我是看房红包，单位是元
	 **/
	private $viewGift;
	
	/** 
	 * 我是看房服务内容
	 **/
	private $viewServiceContent;
	
	private $apiParas = array();
	
	public function setBuildingId($buildingId)
	{
		$this->buildingId = $buildingId;
		$this->apiParas["building_id"] = $buildingId;
	}

	public function getBuildingId()
	{
		return $this->buildingId;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.fang.cservice.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
