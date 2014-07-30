<?php
/**
 * TOP API: taobao.trip.scenic.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class TripScenicGetRequest
{
	/** 
	 * 景点id
	 **/
	private $scenicId;
	
	private $apiParas = array();
	
	public function setScenicId($scenicId)
	{
		$this->scenicId = $scenicId;
		$this->apiParas["scenic_id"] = $scenicId;
	}

	public function getScenicId()
	{
		return $this->scenicId;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.scenic.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scenicId,"scenicId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
