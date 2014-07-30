<?php
/**
 * TOP API: taobao.kelude.user.subordinatelist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeUserSubordinatelistGetRequest
{
	/** 
	 * 是否包含离职人员
	 **/
	private $includeLeave;
	
	/** 
	 * 用户标示
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setIncludeLeave($includeLeave)
	{
		$this->includeLeave = $includeLeave;
		$this->apiParas["include_leave"] = $includeLeave;
	}

	public function getIncludeLeave()
	{
		return $this->includeLeave;
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

	public function getApiMethodName()
	{
		return "taobao.kelude.user.subordinatelist.get";
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
