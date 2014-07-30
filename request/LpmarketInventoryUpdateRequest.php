<?php
/**
 * TOP API: taobao.lpmarket.inventory.update request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class LpmarketInventoryUpdateRequest
{
	/** 
	 * sku所在的城市
	 **/
	private $city;
	
	/** 
	 * 麦德龙的skuid
	 **/
	private $outSkuId;
	
	/** 
	 * 更新的库存
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setOutSkuId($outSkuId)
	{
		$this->outSkuId = $outSkuId;
		$this->apiParas["out_sku_id"] = $outSkuId;
	}

	public function getOutSkuId()
	{
		return $this->outSkuId;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getApiMethodName()
	{
		return "taobao.lpmarket.inventory.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->city,20,"city");
		RequestCheckUtil::checkNotNull($this->outSkuId,"outSkuId");
		RequestCheckUtil::checkMaxLength($this->outSkuId,64,"outSkuId");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
