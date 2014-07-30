<?php
/**
 * TOP API: alibaba.wangqi.organization.accountlist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class AlibabaWangqiOrganizationAccountlistGetRequest
{
	/** 
	 * 部门id
	 **/
	private $departmentId;
	
	/** 
	 * 0，直属员工； 1， 所有员工
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
		return "alibaba.wangqi.organization.accountlist.get";
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
