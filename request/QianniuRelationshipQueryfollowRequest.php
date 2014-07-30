<?php
/**
 * TOP API: taobao.qianniu.relationship.queryfollow request
 * 
 * @author auto create
 * @since 1.0, 2014-02-21 00:00:00
 */
class QianniuRelationshipQueryfollowRequest
{
	/** 
	 * 要查询的用户id
	 **/
	private $followId;
	
	private $apiParas = array();
	
	public function setFollowId($followId)
	{
		$this->followId = $followId;
		$this->apiParas["follow_id"] = $followId;
	}

	public function getFollowId()
	{
		return $this->followId;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.relationship.queryfollow";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->followId,"followId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
