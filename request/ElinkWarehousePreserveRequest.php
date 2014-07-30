<?php
/**
 * TOP API: taobao.elink.warehouse.preserve request
 * 
 * @author auto create
 * @since 1.0, 2011-11-14 00:00:00
 */
class ElinkWarehousePreserveRequest
{
	/** 
	 * 供货商外部仓库代号
	 **/
	private $storeCode;
	
	/** 
	 * 仓库名称
	 **/
	private $storeName;
	
	private $apiParas = array();
	
	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
		$this->apiParas["store_name"] = $storeName;
	}

	public function getStoreName()
	{
		return $this->storeName;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.warehouse.preserve";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
		RequestCheckUtil::checkNotNull($this->storeName,"storeName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
