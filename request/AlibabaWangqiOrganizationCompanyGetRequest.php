<?php
/**
 * TOP API: alibaba.wangqi.organization.company.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class AlibabaWangqiOrganizationCompanyGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.wangqi.organization.company.get";
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
