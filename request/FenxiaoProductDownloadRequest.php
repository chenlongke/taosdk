<?php
/**
 * TOP API: taobao.fenxiao.product.download request
 * 
 * @author auto create
 * @since 1.0, 2012-12-05 00:00:00
 */
class FenxiaoProductDownloadRequest
{
	/** 
	 * 要下载的产品id
	 **/
	private $productId;
	
	/** 
	 * 商品的一口价
	 **/
	private $retailPrice;
	
	/** 
	 * 产品的sku的id列表,用逗号分割
	 **/
	private $skuIds;
	
	/** 
	 * 下载后商品对应的sku的零售价，用逗号分割，要与sku_ids对应
	 **/
	private $skuRetailPrices;
	
	/** 
	 * 分销类型 agent：代销 dealer：经销
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setRetailPrice($retailPrice)
	{
		$this->retailPrice = $retailPrice;
		$this->apiParas["retail_price"] = $retailPrice;
	}

	public function getRetailPrice()
	{
		return $this->retailPrice;
	}

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
	}

	public function setSkuRetailPrices($skuRetailPrices)
	{
		$this->skuRetailPrices = $skuRetailPrices;
		$this->apiParas["sku_retail_prices"] = $skuRetailPrices;
	}

	public function getSkuRetailPrices()
	{
		return $this->skuRetailPrices;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.download";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
