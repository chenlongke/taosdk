<?php
/**
 * TOP API: taobao.items.video.getItems request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class ItemsVideoGetItemsRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.items.video.getItems";
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
