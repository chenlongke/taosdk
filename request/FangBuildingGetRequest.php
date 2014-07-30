<?php
/**
 * TOP API: taobao.fang.building.get request
 * 
 * @author auto create
 * @since 1.0, 2013-08-12 00:00:00
 */
class FangBuildingGetRequest
{
	/** 
	 * 要获取的淘宝楼盘数量
	 **/
	private $count;
	
	/** 
	 * 最后一次获取的淘宝楼盘ID
	 **/
	private $lastTbBuildingId;
	
	private $apiParas = array();
	
	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setLastTbBuildingId($lastTbBuildingId)
	{
		$this->lastTbBuildingId = $lastTbBuildingId;
		$this->apiParas["last_tb_building_id"] = $lastTbBuildingId;
	}

	public function getLastTbBuildingId()
	{
		return $this->lastTbBuildingId;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.building.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->lastTbBuildingId,"lastTbBuildingId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
