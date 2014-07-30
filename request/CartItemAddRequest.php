<?php
/**
 * TOP API: taobao.cart.item.add request
 * 
 * @author auto create
 * @since 1.0, 2013-05-09 00:00:00
 */
class CartItemAddRequest
{
	/** 
	 * 添加到购物车的商品数字id
	 **/
	private $itemId;
	
	/** 
	 * maintype默认为0，表示淘宝网商品。可选项
	 **/
	private $mainType;
	
	/** 
	 * 淘客pid,若有pid，则建议传递。在返利的时候会根据这个id进行操作
	 **/
	private $pid;
	
	/** 
	 * 购物车商品数量，前面的参数拼写错误，建议采用这个参数
	 **/
	private $quantity;
	
	/** 
	 * 添加到购物车中的某种商品数量,参数拼写错误，建议使用新的数量参数：quantity
	 **/
	private $qunatity;
	
	/** 
	 * 添加到购物车商品的卖家id，可选
	 **/
	private $sellerId;
	
	/** 
	 * 添加到购物车商品的skuid，若有该商品有skuid则必须填。若无：则不用填
	 **/
	private $skuId;
	
	/** 
	 * 淘客联盟Id，由数字和字母组成，且长度小于或者等于32，可选
	 **/
	private $unionId;
	
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

	public function setMainType($mainType)
	{
		$this->mainType = $mainType;
		$this->apiParas["main_type"] = $mainType;
	}

	public function getMainType()
	{
		return $this->mainType;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
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

	public function setQunatity($qunatity)
	{
		$this->qunatity = $qunatity;
		$this->apiParas["qunatity"] = $qunatity;
	}

	public function getQunatity()
	{
		return $this->qunatity;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setUnionId($unionId)
	{
		$this->unionId = $unionId;
		$this->apiParas["union_id"] = $unionId;
	}

	public function getUnionId()
	{
		return $this->unionId;
	}

	public function getApiMethodName()
	{
		return "taobao.cart.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
