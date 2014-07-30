<?php
/**
 * TOP API: taobao.kelude.issue.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class KeludeIssueCreateRequest
{
	/** 
	 * 指派人用户标识
	 **/
	private $assignedTo;
	
	/** 
	 * 附件ID列表
	 **/
	private $attachmentIds;
	
	/** 
	 * 作者用户标识
	 **/
	private $author;
	
	/** 
	 * 自定义属性列表。如果有多个自定义属性，则传入字符串列表。每一个字符串的格式如下："自定义属性ID:自定义属性值1,自定义属性值2"。如：["1:chrome,ie","2:前端bug"]
	 **/
	private $cfList;
	
	/** 
	 * 缺陷描述
	 **/
	private $description;
	
	/** 
	 * 期望解决时间
	 **/
	private $expectedAt;
	
	/** 
	 * 逻辑状态
	 **/
	private $logicalStatus;
	
	/** 
	 * 模块ID
	 **/
	private $moduleIds;
	
	/** 
	 * 优先级ID
	 **/
	private $priorityId;
	
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
	/** 
	 * 严重级别ID
	 **/
	private $seriousLevelId;
	
	/** 
	 * 缺陷标题
	 **/
	private $subject;
	
	/** 
	 * 模板ID
	 **/
	private $templateId;
	
	/** 
	 * 用例ID
	 **/
	private $testsuiteId;
	
	/** 
	 * 版本列表
	 **/
	private $versionIds;
	
	/** 
	 * 关注者用户标识
	 **/
	private $watcherUsers;
	
	private $apiParas = array();
	
	public function setAssignedTo($assignedTo)
	{
		$this->assignedTo = $assignedTo;
		$this->apiParas["assigned_to"] = $assignedTo;
	}

	public function getAssignedTo()
	{
		return $this->assignedTo;
	}

	public function setAttachmentIds($attachmentIds)
	{
		$this->attachmentIds = $attachmentIds;
		$this->apiParas["attachment_ids"] = $attachmentIds;
	}

	public function getAttachmentIds()
	{
		return $this->attachmentIds;
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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setExpectedAt($expectedAt)
	{
		$this->expectedAt = $expectedAt;
		$this->apiParas["expected_at"] = $expectedAt;
	}

	public function getExpectedAt()
	{
		return $this->expectedAt;
	}

	public function setLogicalStatus($logicalStatus)
	{
		$this->logicalStatus = $logicalStatus;
		$this->apiParas["logical_status"] = $logicalStatus;
	}

	public function getLogicalStatus()
	{
		return $this->logicalStatus;
	}

	public function setModuleIds($moduleIds)
	{
		$this->moduleIds = $moduleIds;
		$this->apiParas["module_ids"] = $moduleIds;
	}

	public function getModuleIds()
	{
		return $this->moduleIds;
	}

	public function setPriorityId($priorityId)
	{
		$this->priorityId = $priorityId;
		$this->apiParas["priority_id"] = $priorityId;
	}

	public function getPriorityId()
	{
		return $this->priorityId;
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

	public function setSeriousLevelId($seriousLevelId)
	{
		$this->seriousLevelId = $seriousLevelId;
		$this->apiParas["serious_level_id"] = $seriousLevelId;
	}

	public function getSeriousLevelId()
	{
		return $this->seriousLevelId;
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

	public function setTestsuiteId($testsuiteId)
	{
		$this->testsuiteId = $testsuiteId;
		$this->apiParas["testsuite_id"] = $testsuiteId;
	}

	public function getTestsuiteId()
	{
		return $this->testsuiteId;
	}

	public function setVersionIds($versionIds)
	{
		$this->versionIds = $versionIds;
		$this->apiParas["version_ids"] = $versionIds;
	}

	public function getVersionIds()
	{
		return $this->versionIds;
	}

	public function setWatcherUsers($watcherUsers)
	{
		$this->watcherUsers = $watcherUsers;
		$this->apiParas["watcher_users"] = $watcherUsers;
	}

	public function getWatcherUsers()
	{
		return $this->watcherUsers;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->assignedTo,"assignedTo");
		RequestCheckUtil::checkMaxListSize($this->attachmentIds,20,"attachmentIds");
		RequestCheckUtil::checkNotNull($this->author,"author");
		RequestCheckUtil::checkMaxListSize($this->cfList,20,"cfList");
		RequestCheckUtil::checkMaxListSize($this->moduleIds,20,"moduleIds");
		RequestCheckUtil::checkNotNull($this->subject,"subject");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkNotNull($this->versionIds,"versionIds");
		RequestCheckUtil::checkMaxListSize($this->versionIds,20,"versionIds");
		RequestCheckUtil::checkMaxListSize($this->watcherUsers,20,"watcherUsers");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
