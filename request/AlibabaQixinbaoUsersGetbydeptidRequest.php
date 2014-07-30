<?php
/**
 * TOP API: alibaba.qixinbao.users.getbydeptid request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoUsersGetbydeptidRequest
{
	/** 
	 * 部门id
	 **/
	private $deptId;
	
	private $apiParas = array();
	
	public function setDeptId($deptId)
	{
		$this->deptId = $deptId;
		$this->apiParas["dept_id"] = $deptId;
	}

	public function getDeptId()
	{
		return $this->deptId;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.users.getbydeptid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deptId,"deptId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
