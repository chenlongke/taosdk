<?php
/**
 * TOP API: taobao.kelude.issue.relation.create request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeIssueRelationCreateRequest
{
	/** 
	 * 关联的缺陷ID
	 **/
	private $fromId;
	
	/** 
	 * 关系ID
	 **/
	private $relationId;
	
	/** 
	 * 被关联的缺陷ID
	 **/
	private $toId;
	
	private $apiParas = array();
	
	public function setFromId($fromId)
	{
		$this->fromId = $fromId;
		$this->apiParas["from_id"] = $fromId;
	}

	public function getFromId()
	{
		return $this->fromId;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setToId($toId)
	{
		$this->toId = $toId;
		$this->apiParas["to_id"] = $toId;
	}

	public function getToId()
	{
		return $this->toId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.relation.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fromId,"fromId");
		RequestCheckUtil::checkNotNull($this->relationId,"relationId");
		RequestCheckUtil::checkNotNull($this->toId,"toId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
