<?php
/**
 * TOP API: taobao.kelude.bugs.search request
 * 
 * @author auto create
 * @since 1.0, 2013-12-02 00:00:00
 */
class KeludeBugsSearchRequest
{
	/** 
	 * 缺陷指派人
	 **/
	private $assignedTo;
	
	/** 
	 * 缺陷创建者
	 **/
	private $author;
	
	/** 
	 * 自定义属性过滤。xx表示自定义属性的编号。常用如下：
cf_47:缺陷的发现阶段 值：["1-PRD评审前" "2-PRD评审时" "3-PRD评审后UC评审前" "4-UC评审时" "5-UC评审后测试执行前" "6-测试执行期间" "7-预发期间" "8-发布后" "9-daily回归" "10-测试用例评审时" "11-发布前遗留"]
cf_57:缺陷深度，值：["1-很容易发现"  "2-正常发现" "3-很难发现"]
更多自定义属性，请查询kelude后台管理->自定义属性
	 **/
	private $cfXx;
	
	/** 
	 * 小于等于缺陷的提交时间
	 **/
	private $commitDateEnd;
	
	/** 
	 * 大于等于缺陷的提交时间
	 **/
	private $commitDateStart;
	
	/** 
	 * 缺陷ID,可指定多个
	 **/
	private $ids;
	
	/** 
	 * 产品线ID
	 **/
	private $lineId;
	
	/** 
	 * 页码，不传表示第一页
	 **/
	private $page;
	
	/** 
	 * 每页显示多少条记录，默认50
	 **/
	private $perPage;
	
	/** 
	 * 产品ID
	 **/
	private $projectId;
	
	/** 
	 * 严重程度。可选值：1-Blocker，2-Major，3-Normal，4-Trivial。可传多个
	 **/
	private $seriousLevel;
	
	/** 
	 * 缺陷状态。可选值：New，Reopen，Open，Fixed，Won'tfix，Closed，Later，Worksforme，Duplicate，Invalid。可以传入多个。
	 **/
	private $status;
	
	/** 
	 * 缺陷名称，完整匹配
	 **/
	private $subject;
	
	/** 
	 * 测试模板的类型
	 **/
	private $trackerId;
	
	/** 
	 * 小于等于缺陷的更新时间
	 **/
	private $updateDateEnd;
	
	/** 
	 * 大于等于缺陷的更新时间
	 **/
	private $updateDateStart;
	
	/** 
	 * 项目/日常ID
	 **/
	private $versionId;
	
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

	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setCfXx($cfXx)
	{
		$this->cfXx = $cfXx;
		$this->apiParas["cf_xx"] = $cfXx;
	}

	public function getCfXx()
	{
		return $this->cfXx;
	}

	public function setCommitDateEnd($commitDateEnd)
	{
		$this->commitDateEnd = $commitDateEnd;
		$this->apiParas["commit_date_end"] = $commitDateEnd;
	}

	public function getCommitDateEnd()
	{
		return $this->commitDateEnd;
	}

	public function setCommitDateStart($commitDateStart)
	{
		$this->commitDateStart = $commitDateStart;
		$this->apiParas["commit_date_start"] = $commitDateStart;
	}

	public function getCommitDateStart()
	{
		return $this->commitDateStart;
	}

	public function setIds($ids)
	{
		$this->ids = $ids;
		$this->apiParas["ids"] = $ids;
	}

	public function getIds()
	{
		return $this->ids;
	}

	public function setLineId($lineId)
	{
		$this->lineId = $lineId;
		$this->apiParas["line_id"] = $lineId;
	}

	public function getLineId()
	{
		return $this->lineId;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPerPage($perPage)
	{
		$this->perPage = $perPage;
		$this->apiParas["per_page"] = $perPage;
	}

	public function getPerPage()
	{
		return $this->perPage;
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

	public function setSeriousLevel($seriousLevel)
	{
		$this->seriousLevel = $seriousLevel;
		$this->apiParas["serious_level"] = $seriousLevel;
	}

	public function getSeriousLevel()
	{
		return $this->seriousLevel;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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

	public function setTrackerId($trackerId)
	{
		$this->trackerId = $trackerId;
		$this->apiParas["tracker_id"] = $trackerId;
	}

	public function getTrackerId()
	{
		return $this->trackerId;
	}

	public function setUpdateDateEnd($updateDateEnd)
	{
		$this->updateDateEnd = $updateDateEnd;
		$this->apiParas["update_date_end"] = $updateDateEnd;
	}

	public function getUpdateDateEnd()
	{
		return $this->updateDateEnd;
	}

	public function setUpdateDateStart($updateDateStart)
	{
		$this->updateDateStart = $updateDateStart;
		$this->apiParas["update_date_start"] = $updateDateStart;
	}

	public function getUpdateDateStart()
	{
		return $this->updateDateStart;
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
		return "taobao.kelude.bugs.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->cfXx,5,"cfXx");
		RequestCheckUtil::checkMaxListSize($this->ids,100,"ids");
		RequestCheckUtil::checkMaxListSize($this->seriousLevel,10,"seriousLevel");
		RequestCheckUtil::checkMaxLength($this->seriousLevel,10,"seriousLevel");
		RequestCheckUtil::checkMaxListSize($this->status,15,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
