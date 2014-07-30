<?php
/**
 * TOP API: taobao.kelude.issue.mywatch request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeIssueMywatchRequest
{
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 每页条目数
	 **/
	private $pageSize;
	
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
	/** 
	 * 缺陷状态
	 **/
	private $statusList;
	
	/** 
	 * 用户标识
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function setStatusList($statusList)
	{
		$this->statusList = $statusList;
		$this->apiParas["status_list"] = $statusList;
	}

	public function getStatusList()
	{
		return $this->statusList;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.mywatch";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->projectId,"projectId");
		RequestCheckUtil::checkMaxListSize($this->statusList,20,"statusList");
		RequestCheckUtil::checkNotNull($this->user,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
