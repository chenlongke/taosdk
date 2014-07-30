<?php
/**
 * TOP API: taobao.tstar.pic.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-25 00:00:00
 */
class TstarPicDetailGetRequest
{
	/** 
	 * 图片id
	 **/
	private $pid;
	
	/** 
	 * 女郎ID
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
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
		return "taobao.tstar.pic.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pid,"pid");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
