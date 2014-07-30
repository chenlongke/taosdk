<?php
/**
 * TOP API: alibaba.wangqi.organization.department.sublist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class AlibabaWangqiOrganizationDepartmentSublistGetRequest
{
	/** 
	 * 部门Id
	 **/
	private $departmentId;
	
	/** 
	 * 标记
	 **/
	private $flag;
	
	private $apiParas = array();
	
	public function setDepartmentId($departmentId)
	{
		$this->departmentId = $departmentId;
		$this->apiParas["department_id"] = $departmentId;
	}

	public function getDepartmentId()
	{
		return $this->departmentId;
	}

	public function setFlag($flag)
	{
		$this->flag = $flag;
		$this->apiParas["flag"] = $flag;
	}

	public function getFlag()
	{
		return $this->flag;
	}

	public function getApiMethodName()
	{
		return "alibaba.wangqi.organization.department.sublist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->departmentId,"departmentId");
		RequestCheckUtil::checkNotNull($this->flag,"flag");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
