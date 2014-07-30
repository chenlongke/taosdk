<?php
/**
 * TOP API: taobao.tstar.album.pic.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-25 00:00:00
 */
class TstarAlbumPicGetRequest
{
	/** 
	 * 相册ID
	 **/
	private $aid;
	
	/** 
	 * 女郎id
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setAid($aid)
	{
		$this->aid = $aid;
		$this->apiParas["aid"] = $aid;
	}

	public function getAid()
	{
		return $this->aid;
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
		return "taobao.tstar.album.pic.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->aid,"aid");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
