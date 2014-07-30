<?php
/**
 * TOP API: taobao.kelude.member.objects.has.permission request
 * 
 * @author auto create
 * @since 1.0, 2014-04-05 00:00:00
 */
class KeludeMemberObjectsHasPermissionRequest
{
	/** 
	 * 权限项，逗号分隔，和roles表中的permissions字段对应
	 **/
	private $permissions;
	
	/** 
	 * 对象的id
	 **/
	private $targetIds;
	
	/** 
	 * 对象的标识，如Project，和角色中的stamp字段对应
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
		return "taobao.kelude.member.objects.has.permission";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->targetIds,20,"targetIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
