<?php
/**
 * TOP API: taobao.fenxiao.product.unlink request
 * 
 * @author auto create
 * @since 1.0, 2013-04-15 00:00:00
 */
class FenxiaoProductUnlinkRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
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

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.unlink";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
