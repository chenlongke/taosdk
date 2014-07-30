<?php
/**
 * TOP API: taobao.wlb.item.setting.add request
 * 
 * @author auto create
 * @since 1.0, 2011-03-29 00:00:00
 */
class WlbItemSettingAddRequest
{
	/** 
	 * 要设置规则的商品id
	 **/
	private $itemId;
	
	/** 
	 * 要设置的规则的仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 补货周期
	 **/
	private $supplementCycle;
	
	/** 
	 * 库存警戒值
	 **/
	private $warnQuantity;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function setSupplementCycle($supplementCycle)
	{
		$this->supplementCycle = $supplementCycle;
		$this->apiParas["supplement_cycle"] = $supplementCycle;
	}

	public function getSupplementCycle()
	{
		return $this->supplementCycle;
	}

	public function setWarnQuantity($warnQuantity)
	{
		$this->warnQuantity = $warnQuantity;
		$this->apiParas["warn_quantity"] = $warnQuantity;
	}

	public function getWarnQuantity()
	{
		return $this->warnQuantity;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.setting.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
