<?php
/**
 * TOP API: taobao.jianghu.friends.areFriends request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuFriendsAreFriendsRequest
{
	/** 
	 * 用户1数字id
	 **/
	private $uid1;
	
	/** 
	 * 用户2数字id
	 **/
	private $uid2;
	
	private $apiParas = array();
	
	public function setUid1($uid1)
	{
		$this->uid1 = $uid1;
		$this->apiParas["uid1"] = $uid1;
	}

	public function getUid1()
	{
		return $this->uid1;
	}

	public function setUid2($uid2)
	{
		$this->uid2 = $uid2;
		$this->apiParas["uid2"] = $uid2;
	}

	public function getUid2()
	{
		return $this->uid2;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.friends.areFriends";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->uid1,"uid1");
		RequestCheckUtil::checkNotNull($this->uid2,"uid2");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
