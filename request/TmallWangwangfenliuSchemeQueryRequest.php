<?php
/**
 * TOP API: tmall.wangwangfenliu.scheme.query request
 * 
 * @author auto create
 * @since 1.0, 2013-04-22 00:00:00
 */
class TmallWangwangfenliuSchemeQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.scheme.query";
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
