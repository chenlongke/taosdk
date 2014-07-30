<?php
/**
 * TOP API: taobao.de.depubacc.menu request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class DeDepubaccMenuRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.de.depubacc.menu";
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
