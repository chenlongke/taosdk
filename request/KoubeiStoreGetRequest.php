<?php
/**
 * TOP API: taobao.koubei.store.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiStoreGetRequest
{
	/** 
	 * 城市id
	 **/
	private $cityId;
	
	/** 
	 * 店铺id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setCityId($cityId)
	{
		$this->cityId = $cityId;
		$this->apiParas["city_id"] = $cityId;
	}

	public function getCityId()
	{
		return $this->cityId;
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
		return "taobao.koubei.store.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cityId,"cityId");
		RequestCheckUtil::checkMaxValue($this->cityId,10000,"cityId");
		RequestCheckUtil::checkMinValue($this->cityId,1,"cityId");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
		RequestCheckUtil::checkMaxLength($this->storeId,35,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
