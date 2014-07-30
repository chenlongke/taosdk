<?php
/**
 * TOP API: taobao.lifeplace.localstore.get request
 * 
 * @author auto create
 * @since 1.0, 2012-08-28 00:00:00
 */
class LifeplaceLocalstoreGetRequest
{
	/** 
	 * 店铺id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
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
		return "taobao.lifeplace.localstore.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
