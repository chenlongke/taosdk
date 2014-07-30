<?php
/**
 * TOP API: taobao.cart.item.update request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class CartItemUpdateRequest
{
	/** 
	 * 购物车中每条记录的ID
	 **/
	private $cartId;
	
	/** 
	 * 更新后的购物车某个商品的数量
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setCartId($cartId)
	{
		$this->cartId = $cartId;
		$this->apiParas["cart_id"] = $cartId;
	}

	public function getCartId()
	{
		return $this->cartId;
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
		return "taobao.cart.item.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cartId,"cartId");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
