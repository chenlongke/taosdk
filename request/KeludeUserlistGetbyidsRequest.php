<?php
/**
 * TOP API: taobao.kelude.userlist.getbyids request
 * 
 * @author auto create
 * @since 1.0, 2014-04-15 00:00:00
 */
class KeludeUserlistGetbyidsRequest
{
	/** 
	 * 用户id列表
	 **/
	private $userIds;
	
	private $apiParas = array();
	
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
		return "taobao.kelude.userlist.getbyids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userIds,"userIds");
		RequestCheckUtil::checkMaxListSize($this->userIds,200,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
