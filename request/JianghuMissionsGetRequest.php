<?php
/**
 * TOP API: taobao.jianghu.missions.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class JianghuMissionsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jianghu.missions.get";
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
