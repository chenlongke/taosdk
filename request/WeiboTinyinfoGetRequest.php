<?php
/**
 * TOP API: taobao.weibo.tinyinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-25 00:00:00
 */
class WeiboTinyinfoGetRequest
{
	/** 
	 * 淘宝用户id
	 **/
	private $tbuserid;
	
	private $apiParas = array();
	
	public function setTbuserid($tbuserid)
	{
		$this->tbuserid = $tbuserid;
		$this->apiParas["tbuserid"] = $tbuserid;
	}

	public function getTbuserid()
	{
		return $this->tbuserid;
	}

	public function getApiMethodName()
	{
		return "taobao.weibo.tinyinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tbuserid,"tbuserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
