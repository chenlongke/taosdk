<?php
/**
 * TOP API: taobao.dd.takeout.delivery request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class DdTakeoutDeliveryRequest
{
	/** 
	 * 纬度
	 **/
	private $lat;
	
	/** 
	 * 经度
	 **/
	private $lon;
	
	/** 
	 * 店铺id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setLat($lat)
	{
		$this->lat = $lat;
		$this->apiParas["lat"] = $lat;
	}

	public function getLat()
	{
		return $this->lat;
	}

	public function setLon($lon)
	{
		$this->lon = $lon;
		$this->apiParas["lon"] = $lon;
	}

	public function getLon()
	{
		return $this->lon;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.takeout.delivery";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lat,"lat");
		RequestCheckUtil::checkNotNull($this->lon,"lon");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
