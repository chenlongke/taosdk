<?php
/**
 * TOP API: taobao.cart.item.query request
 * 
 * @author auto create
 * @since 1.0, 2013-03-20 00:00:00
 */
class CartItemQueryRequest
{
	/** 
	 * maintype默认为0，表示淘宝网店铺商品。不是必填项
	 **/
	private $mainType;
	
	private $apiParas = array();
	
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
		return "taobao.cart.item.query";
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
