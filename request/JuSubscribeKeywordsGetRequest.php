<?php
/**
 * TOP API: taobao.ju.subscribe.keywords.get request
 * 
 * @author auto create
 * @since 1.0, 2013-03-20 00:00:00
 */
class JuSubscribeKeywordsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ju.subscribe.keywords.get";
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
