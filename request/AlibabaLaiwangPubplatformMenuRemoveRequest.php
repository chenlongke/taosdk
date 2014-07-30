<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.menu.remove request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class AlibabaLaiwangPubplatformMenuRemoveRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.menu.remove";
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
