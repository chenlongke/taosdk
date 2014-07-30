<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.basic request
 * 
 * @author auto create
 * @since 1.0, 2014-01-02 00:00:00
 */
class AlibabaLaiwangPubplatformBasicRequest
{
	/** 
	 * 客户端的appKey标识
	 **/
	private $appkey;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.basic";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
