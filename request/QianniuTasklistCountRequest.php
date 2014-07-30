<?php
/**
 * TOP API: taobao.qianniu.tasklist.count request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class QianniuTasklistCountRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.qianniu.tasklist.count";
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
