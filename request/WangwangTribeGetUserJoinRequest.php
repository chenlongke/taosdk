<?php
/**
 * TOP API: taobao.wangwang.tribe.getUserJoin request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class WangwangTribeGetUserJoinRequest
{
	/** 
	 * 用户的长ID。格式：淘宝用户的NickName 前面加上前缀"cntaobao"，比如cntaobao测试
	 **/
	private $longId;
	
	private $apiParas = array();
	
	public function setLongId($longId)
	{
		$this->longId = $longId;
		$this->apiParas["long_id"] = $longId;
	}

	public function getLongId()
	{
		return $this->longId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.tribe.getUserJoin";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->longId,"longId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
