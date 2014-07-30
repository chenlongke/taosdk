<?php
/**
 * TOP API: taobao.lpmarket.inventory.increase request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class LpmarketInventoryIncreaseRequest
{
	/** 
	 * sku所在的城市
	 **/
	private $city;
	
	/** 
	 * 增量更新的库存值
	 **/
	private $increment;
	
	/** 
	 * 麦德龙的skuid
	 **/
	private $outSkuId;
	
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

	public function setIncrement($increment)
	{
		$this->increment = $increment;
		$this->apiParas["increment"] = $increment;
	}

	public function getIncrement()
	{
		return $this->increment;
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

	public function getApiMethodName()
	{
		return "taobao.lpmarket.inventory.increase";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->city,20,"city");
		RequestCheckUtil::checkNotNull($this->increment,"increment");
		RequestCheckUtil::checkNotNull($this->outSkuId,"outSkuId");
		RequestCheckUtil::checkMaxLength($this->outSkuId,64,"outSkuId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
