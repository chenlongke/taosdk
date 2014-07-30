<?php
/**
 * TOP API: taobao.ju.abroadarea.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-25 00:00:00
 */
class JuAbroadareaGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ju.abroadarea.get";
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
