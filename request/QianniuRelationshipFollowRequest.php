<?php
/**
 * TOP API: taobao.qianniu.relationship.follow request
 * 
 * @author auto create
 * @since 1.0, 2014-02-21 00:00:00
 */
class QianniuRelationshipFollowRequest
{
	/** 
	 * 被关注着uid
	 **/
	private $followeeUid;
	
	/** 
	 * 默认不传的话或者true 表示 follow   false 表示cancelFollow
	 **/
	private $isCancel;
	
	private $apiParas = array();
	
	public function setFolloweeUid($followeeUid)
	{
		$this->followeeUid = $followeeUid;
		$this->apiParas["followee_uid"] = $followeeUid;
	}

	public function getFolloweeUid()
	{
		return $this->followeeUid;
	}

	public function setIsCancel($isCancel)
	{
		$this->isCancel = $isCancel;
		$this->apiParas["is_cancel"] = $isCancel;
	}

	public function getIsCancel()
	{
		return $this->isCancel;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.relationship.follow";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->followeeUid,"followeeUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
