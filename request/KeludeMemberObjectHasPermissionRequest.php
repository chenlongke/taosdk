<?php
/**
 * TOP API: taobao.kelude.member.object.has.permission request
 * 
 * @author auto create
 * @since 1.0, 2014-04-05 00:00:00
 */
class KeludeMemberObjectHasPermissionRequest
{
	/** 
	 * 权限项，逗号分隔，与角色的permissions字段对应
	 **/
	private $permissions;
	
	/** 
	 * 对象的id
	 **/
	private $targetId;
	
	/** 
	 * 对象的类型，与角色的stamp字段对应
	 **/
	private $targetType;
	
	/** 
	 * 用户id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setPermissions($permissions)
	{
		$this->permissions = $permissions;
		$this->apiParas["permissions"] = $permissions;
	}

	public function getPermissions()
	{
		return $this->permissions;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.member.object.has.permission";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetId,"targetId");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
