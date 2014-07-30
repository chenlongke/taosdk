<?php
/**
 * TOP API: taobao.qianniu.relationship.fm.follow request
 * 
 * @author auto create
 * @since 1.0, 2014-02-27 00:00:00
 */
class QianniuRelationshipFmFollowRequest
{
	/** 
	 * 被关注的服务号的id
	 **/
	private $serviceId;
	
	/** 
	 * 被关注的服务号的name
	 **/
	private $serviceName;
	
	/** 
	 * 发起关注的用户的子账号userid,如果是主账号，则设为0,如果是子账号，则是该子账号对应的userId
	 **/
	private $subUserId;
	
	/** 
	 * 发起关注的用户userid,如果是主账号，则是主账号的userId,如果是子账号，则是该子账号对应的主账号的userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setServiceId($serviceId)
	{
		$this->serviceId = $serviceId;
		$this->apiParas["service_id"] = $serviceId;
	}

	public function getServiceId()
	{
		return $this->serviceId;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function setSubUserId($subUserId)
	{
		$this->subUserId = $subUserId;
		$this->apiParas["sub_user_id"] = $subUserId;
	}

	public function getSubUserId()
	{
		return $this->subUserId;
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
		return "taobao.qianniu.relationship.fm.follow";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceId,"serviceId");
		RequestCheckUtil::checkNotNull($this->serviceName,"serviceName");
		RequestCheckUtil::checkNotNull($this->subUserId,"subUserId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
