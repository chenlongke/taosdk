<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.menu.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-18 00:00:00
 */
class AlibabaLaiwangPubplatformMenuGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.menu.get";
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
