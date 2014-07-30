<?php
/**
 * TOP API: taobao.lpmarket.inventory.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class LpmarketInventoryBatchupdateRequest
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
	
	/** 
	 * 更新方式：0为全量，1增量，默认0
	 **/
	private $type;
	
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.lpmarket.inventory.batchupdate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->city,30,"city");
		RequestCheckUtil::checkMaxLength($this->city,20,"city");
		RequestCheckUtil::checkNotNull($this->outSkuId,"outSkuId");
		RequestCheckUtil::checkMaxListSize($this->outSkuId,30,"outSkuId");
		RequestCheckUtil::checkMaxLength($this->outSkuId,64,"outSkuId");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkMaxListSize($this->quantity,30,"quantity");
		RequestCheckUtil::checkMaxValue($this->type,1,"type");
		RequestCheckUtil::checkMinValue($this->type,0,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
