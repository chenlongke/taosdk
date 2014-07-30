<?php
/**
 * TOP API: taobao.kelude.user.boss.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeUserBossGetRequest
{
	/** 
	 * 用户标示（可以为花名、域账号、工号、邮箱、ID）
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.user.boss.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->user,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
