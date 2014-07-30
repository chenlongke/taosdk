<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.menu.test.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-24 00:00:00
 */
class AlibabaLaiwangPubplatformMenuTestGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.menu.test.get";
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
