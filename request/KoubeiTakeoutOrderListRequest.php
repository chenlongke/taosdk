<?php
/**
 * TOP API: taobao.koubei.takeout.order.list request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiTakeoutOrderListRequest
{
	/** 
	 * 认证键值
	 **/
	private $key;
	
	/** 
	 * 返回的最多记录数
	 **/
	private $maxSize;
	
	/** 
	 * 口碑外卖店铺ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setKey($key)
	{
		$this->key = $key;
		$this->apiParas["key"] = $key;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function setMaxSize($maxSize)
	{
		$this->maxSize = $maxSize;
		$this->apiParas["max_size"] = $maxSize;
	}

	public function getMaxSize()
	{
		return $this->maxSize;
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
		return "taobao.koubei.takeout.order.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->key,"key");
		RequestCheckUtil::checkMaxLength($this->key,50,"key");
		RequestCheckUtil::checkNotNull($this->maxSize,"maxSize");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
		RequestCheckUtil::checkMaxLength($this->storeId,40,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
