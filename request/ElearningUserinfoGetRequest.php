<?php
/**
 * TOP API: taobao.elearning.userinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2012-11-15 00:00:00
 */
class ElearningUserinfoGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.elearning.userinfo.get";
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
