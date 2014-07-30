<?php
/**
 * TOP API: taobao.kelude.issue.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeIssueBatchupdateRequest
{
	/** 
	 * 修改的目标ID列表
	 **/
	private $targetIds;
	
	/** 
	 * 修改的类型，默认为Issue
	 **/
	private $targetType;
	
	/** 
	 * 触发操作的用户ID
	 **/
	private $user;
	
	/** 
	 * 版本列表
	 **/
	private $versionIds;
	
	private $apiParas = array();
	
	public function setTargetIds($targetIds)
	{
		$this->targetIds = $targetIds;
		$this->apiParas["target_ids"] = $targetIds;
	}

	public function getTargetIds()
	{
		return $this->targetIds;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
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

	public function setVersionIds($versionIds)
	{
		$this->versionIds = $versionIds;
		$this->apiParas["version_ids"] = $versionIds;
	}

	public function getVersionIds()
	{
		return $this->versionIds;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.batchupdate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetIds,"targetIds");
		RequestCheckUtil::checkMaxListSize($this->targetIds,50,"targetIds");
		RequestCheckUtil::checkNotNull($this->user,"user");
		RequestCheckUtil::checkNotNull($this->versionIds,"versionIds");
		RequestCheckUtil::checkMaxListSize($this->versionIds,50,"versionIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
