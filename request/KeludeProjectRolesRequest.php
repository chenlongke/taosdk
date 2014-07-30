<?php
/**
 * TOP API: taobao.kelude.project.roles request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeProjectRolesRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.kelude.project.roles";
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
