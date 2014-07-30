<?php
/**
 * TOP API: taobao.hanoi.action.getall request
 * 
 * @author auto create
 * @since 1.0, 2013-04-23 00:00:00
 */
class HanoiActionGetallRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.hanoi.action.getall";
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
