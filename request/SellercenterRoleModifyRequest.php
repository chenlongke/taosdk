<?php
/**
 * TOP API: taobao.sellercenter.role.modify request
 * 
 * @author auto create
 * @since 1.0, 2012-03-07 00:00:00
 */
class SellercenterRoleModifyRequest
{
	/** 
	 * 角色描述
	 **/
	private $description;
	
	/** 
	 * 角色名
	 **/
	private $name;
	
	/** 
	 * 需要授权的权限点permission_code列表,以","分割.其code值可以通过调用taobao.sellercenter.user.permissions.get返回，其中permission.is_authorize=1的权限点可以通过本接口授权给对应角色
	 **/
	private $permissionCodes;
	
	/** 
	 * 角色id
	 **/
	private $roleId;
	
	private $apiParas = array();
	
	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPermissionCodes($permissionCodes)
	{
		$this->permissionCodes = $permissionCodes;
		$this->apiParas["permission_codes"] = $permissionCodes;
	}

	public function getPermissionCodes()
	{
		return $this->permissionCodes;
	}

	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
		$this->apiParas["role_id"] = $roleId;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	public function getApiMethodName()
	{
		return "taobao.sellercenter.role.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->description,20,"description");
		RequestCheckUtil::checkMaxLength($this->name,20,"name");
		RequestCheckUtil::checkMaxListSize($this->permissionCodes,2000,"permissionCodes");
		RequestCheckUtil::checkNotNull($this->roleId,"roleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
