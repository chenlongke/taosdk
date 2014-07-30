<?php
/**
 * TOP API: taobao.kelude.issue.watcherlist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeIssueWatcherlistGetRequest
{
	/** 
	 * 缺陷ID
	 **/
	private $issueId;
	
	private $apiParas = array();
	
	public function setIssueId($issueId)
	{
		$this->issueId = $issueId;
		$this->apiParas["issue_id"] = $issueId;
	}

	public function getIssueId()
	{
		return $this->issueId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.watcherlist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->issueId,"issueId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
