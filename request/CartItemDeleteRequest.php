<?php
/**
 * TOP API: taobao.cart.item.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class CartItemDeleteRequest
{
	/** 
	 * 购物车Id-数组
	 **/
	private $cartIds;
	
	/** 
	 * maintype默认为0，表示淘宝网店铺商品。非必填项
	 **/
	private $mainType;
	
	private $apiParas = array();
	
	public function setCartIds($cartIds)
	{
		$this->cartIds = $cartIds;
		$this->apiParas["cart_ids"] = $cartIds;
	}

	public function getCartIds()
	{
		return $this->cartIds;
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

	public function getApiMethodName()
	{
		return "taobao.cart.item.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cartIds,"cartIds");
		RequestCheckUtil::checkMaxListSize($this->cartIds,50,"cartIds");
		RequestCheckUtil::checkMaxLength($this->cartIds,50,"cartIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
