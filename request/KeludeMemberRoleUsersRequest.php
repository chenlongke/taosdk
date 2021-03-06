<?php
/**
 * TOP API: taobao.kelude.member.role.users request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class KeludeMemberRoleUsersRequest
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
	 * 对象的类型，对应角色的stamp字段
	 **/
	private $targetType;
	
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

	public function getApiMethodName()
	{
		return "taobao.kelude.member.role.users";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
