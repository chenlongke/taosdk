<?php
/**
 * TOP API: taobao.tstar.model.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-25 00:00:00
 */
class TstarModelDetailGetRequest
{
	/** 
	 * 女郎ID
	 **/
	private $uid;
	
	private $apiParas = array();
	
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
		return "taobao.tstar.model.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
