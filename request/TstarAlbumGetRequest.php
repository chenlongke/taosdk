<?php
/**
 * TOP API: taobao.tstar.album.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-25 00:00:00
 */
class TstarAlbumGetRequest
{
	/** 
	 * 女郎id
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
		return "taobao.tstar.album.get";
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
