<?php
/**
 * TOP API: taobao.tbql.query request
 * 
 * @author auto create
 * @since 1.0, 2010-06-13 00:00:00
 */
class TbqlQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.tbql.query";
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
