<?php
/**
 * TOP API: alibaba.qixinbao.departments.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-05 00:00:00
 */
class AlibabaQixinbaoDepartmentsGetRequest
{
	/** 
	 * 公司id
	 **/
	private $companyId;
	
	private $apiParas = array();
	
	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
		$this->apiParas["company_id"] = $companyId;
	}

	public function getCompanyId()
	{
		return $this->companyId;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.departments.get";
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
