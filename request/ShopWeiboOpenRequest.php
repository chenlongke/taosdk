<?php
/**
 * TOP API: taobao.shop.weibo.open request
 * 
 * @author auto create
 * @since 1.0, 2013-10-16 00:00:00
 */
class ShopWeiboOpenRequest
{
	/** 
	 * 卖家的淘宝用户id
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
		return "taobao.shop.weibo.open";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
