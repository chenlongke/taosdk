<?php
/**
 * TOP API: taobao.shop.showcase.remainCount request
 * 
 * @author auto create
 * @since 1.0, 2013-02-18 00:00:00
 */
class ShopShowcaseRemainCountRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.shop.showcase.remainCount";
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
