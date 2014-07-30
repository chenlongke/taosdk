<?php
/**
 * TOP API: taobao.widget.cartcount.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-31 00:00:00
 */
class WidgetCartcountGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.widget.cartcount.get";
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
