<?php
/**
 * TOP API: taobao.kelude.issue.group.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeIssueGroupSearchRequest
{
	/** 
	 * 指派人用户标识
	 **/
	private $assignTo;
	
	/** 
	 * 作者用户标识
	 **/
	private $author;
	
	/** 
	 * 自定义属性列表
	 **/
	private $cfList;
	
	/** 
	 * 提交时间开始
	 **/
	private $commitAtFrom;
	
	/** 
	 * 提交时间截止
	 **/
	private $commitAtTo;
	
	/** 
	 * 指定缺陷必须经过的状态
	 **/
	private $filterStatus;
	
	/** 
	 * 产生filterStatus的变更记录的用户标识
	 **/
	private $filterStatusUser;
	
	/** 
	 * 分组字段
	 **/
	private $groupBy;
	
	/** 
	 * ID列表
	 **/
	private $idList;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 每页条目数
	 **/
	private $pageSize;
	
	/** 
	 * 优先级
	 **/
	private $priorityList;
	
	/** 
	 * 产品线ID
	 **/
	private $productLineId;
	
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
	/** 
	 * 严重程度
	 **/
	private $seriousLevelList;
	
	/** 
	 * 状态列表
	 **/
	private $statusList;
	
	/** 
	 * 缺陷标题
	 **/
	private $subject;
	
	/** 
	 * 模板ID
	 **/
	private $templateId;
	
	/** 
	 * 更新时间开始
	 **/
	private $updatedAtFrom;
	
	/** 
	 * 更新时间截止
	 **/
	private $updatedAtTo;
	
	/** 
	 * 版本ID
	 **/
	private $versionId;
	
	private $apiParas = array();
	
	public function setAssignTo($assignTo)
	{
		$this->assignTo = $assignTo;
		$this->apiParas["assign_to"] = $assignTo;
	}

	public function getAssignTo()
	{
		return $this->assignTo;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setCfList($cfList)
	{
		$this->cfList = $cfList;
		$this->apiParas["cf_list"] = $cfList;
	}

	public function getCfList()
	{
		return $this->cfList;
	}

	public function setCommitAtFrom($commitAtFrom)
	{
		$this->commitAtFrom = $commitAtFrom;
		$this->apiParas["commit_at_from"] = $commitAtFrom;
	}

	public function getCommitAtFrom()
	{
		return $this->commitAtFrom;
	}

	public function setCommitAtTo($commitAtTo)
	{
		$this->commitAtTo = $commitAtTo;
		$this->apiParas["commit_at_to"] = $commitAtTo;
	}

	public function getCommitAtTo()
	{
		return $this->commitAtTo;
	}

	public function setFilterStatus($filterStatus)
	{
		$this->filterStatus = $filterStatus;
		$this->apiParas["filter_status"] = $filterStatus;
	}

	public function getFilterStatus()
	{
		return $this->filterStatus;
	}

	public function setFilterStatusUser($filterStatusUser)
	{
		$this->filterStatusUser = $filterStatusUser;
		$this->apiParas["filter_status_user"] = $filterStatusUser;
	}

	public function getFilterStatusUser()
	{
		return $this->filterStatusUser;
	}

	public function setGroupBy($groupBy)
	{
		$this->groupBy = $groupBy;
		$this->apiParas["group_by"] = $groupBy;
	}

	public function getGroupBy()
	{
		return $this->groupBy;
	}

	public function setIdList($idList)
	{
		$this->idList = $idList;
		$this->apiParas["id_list"] = $idList;
	}

	public function getIdList()
	{
		return $this->idList;
	}

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

	public function setPriorityList($priorityList)
	{
		$this->priorityList = $priorityList;
		$this->apiParas["priority_list"] = $priorityList;
	}

	public function getPriorityList()
	{
		return $this->priorityList;
	}

	public function setProductLineId($productLineId)
	{
		$this->productLineId = $productLineId;
		$this->apiParas["product_line_id"] = $productLineId;
	}

	public function getProductLineId()
	{
		return $this->productLineId;
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

	public function setSeriousLevelList($seriousLevelList)
	{
		$this->seriousLevelList = $seriousLevelList;
		$this->apiParas["serious_level_list"] = $seriousLevelList;
	}

	public function getSeriousLevelList()
	{
		return $this->seriousLevelList;
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

	public function setSubject($subject)
	{
		$this->subject = $subject;
		$this->apiParas["subject"] = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function setUpdatedAtFrom($updatedAtFrom)
	{
		$this->updatedAtFrom = $updatedAtFrom;
		$this->apiParas["updated_at_from"] = $updatedAtFrom;
	}

	public function getUpdatedAtFrom()
	{
		return $this->updatedAtFrom;
	}

	public function setUpdatedAtTo($updatedAtTo)
	{
		$this->updatedAtTo = $updatedAtTo;
		$this->apiParas["updated_at_to"] = $updatedAtTo;
	}

	public function getUpdatedAtTo()
	{
		return $this->updatedAtTo;
	}

	public function setVersionId($versionId)
	{
		$this->versionId = $versionId;
		$this->apiParas["version_id"] = $versionId;
	}

	public function getVersionId()
	{
		return $this->versionId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.group.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->cfList,20,"cfList");
		RequestCheckUtil::checkNotNull($this->groupBy,"groupBy");
		RequestCheckUtil::checkMaxListSize($this->idList,100,"idList");
		RequestCheckUtil::checkMaxListSize($this->priorityList,20,"priorityList");
		RequestCheckUtil::checkMaxListSize($this->seriousLevelList,20,"seriousLevelList");
		RequestCheckUtil::checkMaxListSize($this->statusList,20,"statusList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
