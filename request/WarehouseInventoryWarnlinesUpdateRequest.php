<?php
/**
 * TOP API: taobao.warehouse.inventory.warnlines.update request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class WarehouseInventoryWarnlinesUpdateRequest
{
	/** 
	 * 库存警戒值
	 **/
	private $warnValue;
	
	private $apiParas = array();
	
	public function setWarnValue($warnValue)
	{
		$this->warnValue = $warnValue;
		$this->apiParas["warn_value"] = $warnValue;
	}

	public function getWarnValue()
	{
		return $this->warnValue;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.inventory.warnlines.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->warnValue,"warnValue");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
