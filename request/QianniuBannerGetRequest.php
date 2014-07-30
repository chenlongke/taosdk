<?php
/**
 * TOP API: taobao.qianniu.banner.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class QianniuBannerGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.qianniu.banner.get";
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
