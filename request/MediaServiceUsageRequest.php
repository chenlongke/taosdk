<?php
/**
 * TOP API: taobao.media.service.usage request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class MediaServiceUsageRequest
{
	/** 
	 * 要查询的用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
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
		return "taobao.media.service.usage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
		RequestCheckUtil::checkMinValue($this->userId,1,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
