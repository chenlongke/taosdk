<?php
/**
 * TOP API: taobao.sellercenter.subuser.authorize request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class SellercenterSubuserAuthorizeRequest
{
	/** 
	 * 子账号昵称(子账号的唯一标识)
	 **/
	private $nick;
	
	/** 
	 * 需要授权的权限点permission_code列表,以","分割.其code值可以通过调用taobao.sellercenter.user.permissions.get返回，其中permission.is_authorize=1的权限点可以通过本接口直接授权给子账号。
	 **/
	private $permissionCodes;
	
	/** 
	 * 需要赋予子账号的角色Id，以"，"分隔。其角色ID可以通过调用taobao.sellercenter.roles.get查询得到。通过该接口可将角色赋予子账号
	 **/
	private $roleIds;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setRoleIds($roleIds)
	{
		$this->roleIds = $roleIds;
		$this->apiParas["role_ids"] = $roleIds;
	}

	public function getRoleIds()
	{
		return $this->roleIds;
	}

	public function getApiMethodName()
	{
		return "taobao.sellercenter.subuser.authorize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxListSize($this->permissionCodes,2000,"permissionCodes");
		RequestCheckUtil::checkMaxListSize($this->roleIds,30,"roleIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
