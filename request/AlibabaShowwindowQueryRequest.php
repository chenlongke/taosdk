<?php
/**
 * TOP API: alibaba.showwindow.query request
 * 
 * @author auto create
 * @since 1.0, 2014-03-10 00:00:00
 */
class AlibabaShowwindowQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.showwindow.query";
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
