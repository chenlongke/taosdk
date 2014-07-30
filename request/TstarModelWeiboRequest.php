<?php
/**
 * TOP API: taobao.tstar.model.weibo request
 * 
 * @author auto create
 * @since 1.0, 2012-08-02 00:00:00
 */
class TstarModelWeiboRequest
{
	/** 
	 * 微博类型1：新浪，2腾讯
	 **/
	private $type;
	
	/** 
	 * 淘女郎ID
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "taobao.tstar.model.weibo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
