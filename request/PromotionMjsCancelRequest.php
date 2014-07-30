<?php
/**
 * TOP API: taobao.promotion.mjs.cancel request
 * 
 * @author auto create
 * @since 1.0, 2011-06-20 00:00:00
 */
class PromotionMjsCancelRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.promotion.mjs.cancel";
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
