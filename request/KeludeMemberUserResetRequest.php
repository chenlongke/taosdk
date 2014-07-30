<?php
/**
 * TOP API: taobao.kelude.member.user.reset request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeMemberUserResetRequest
{
	/** 
	 * 角色id
	 **/
	private $roleId;
	
	/** 
	 * 对象的id
	 **/
	private $targetId;
	
	/** 
	 * 对象的类型，和角色的stamp对应
	 **/
	private $targetType;
	
	/** 
	 * 用户的id列表
	 **/
	private $userIds;
	
	private $apiParas = array();
	
	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
		$this->apiParas["role_id"] = $roleId;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
		$this->apiParas["target_id"] = $targetId;
	}

	public function getTargetId()
	{
		return $this->targetId;
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

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.member.user.reset";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roleId,"roleId");
		RequestCheckUtil::checkNotNull($this->targetId,"targetId");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
		RequestCheckUtil::checkNotNull($this->userIds,"userIds");
		RequestCheckUtil::checkMaxListSize($this->userIds,20,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
