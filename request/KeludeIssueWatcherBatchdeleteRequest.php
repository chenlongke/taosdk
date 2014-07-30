<?php
/**
 * TOP API: taobao.kelude.issue.watcher.batchdelete request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeIssueWatcherBatchdeleteRequest
{
	/** 
	 * 缺陷ID列表
	 **/
	private $issueIdList;
	
	/** 
	 * 关注人ID列表
	 **/
	private $watcherIdList;
	
	private $apiParas = array();
	
	public function setIssueIdList($issueIdList)
	{
		$this->issueIdList = $issueIdList;
		$this->apiParas["issue_id_list"] = $issueIdList;
	}

	public function getIssueIdList()
	{
		return $this->issueIdList;
	}

	public function setWatcherIdList($watcherIdList)
	{
		$this->watcherIdList = $watcherIdList;
		$this->apiParas["watcher_id_list"] = $watcherIdList;
	}

	public function getWatcherIdList()
	{
		return $this->watcherIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.watcher.batchdelete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->issueIdList,"issueIdList");
		RequestCheckUtil::checkMaxListSize($this->issueIdList,50,"issueIdList");
		RequestCheckUtil::checkNotNull($this->watcherIdList,"watcherIdList");
		RequestCheckUtil::checkMaxListSize($this->watcherIdList,50,"watcherIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
