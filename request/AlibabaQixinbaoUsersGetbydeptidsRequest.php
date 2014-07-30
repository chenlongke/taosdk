<?php
/**
 * TOP API: alibaba.qixinbao.users.getbydeptids request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoUsersGetbydeptidsRequest
{
	/** 
	 * 部门id列表
	 **/
	private $deptIds;
	
	private $apiParas = array();
	
	public function setDeptIds($deptIds)
	{
		$this->deptIds = $deptIds;
		$this->apiParas["dept_ids"] = $deptIds;
	}

	public function getDeptIds()
	{
		return $this->deptIds;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.users.getbydeptids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deptIds,"deptIds");
		RequestCheckUtil::checkMaxListSize($this->deptIds,20,"deptIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
