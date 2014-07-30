<?php
/**
 * TOP API: taobao.top.api.sync request
 * 
 * @author auto create
 * @since 1.0, 2013-08-16 00:00:00
 */
class TopApiSyncRequest
{
	/** 
	 * 要同步的api的名称
	 **/
	private $apiName;
	
	/** 
	 * 环境。可选值：SANDBOX(沙箱)、DAILY(Daily)、PREPUBLISH(预发)、PRODUCTION(生产)
	 **/
	private $environment;
	
	private $apiParas = array();
	
	public function setApiName($apiName)
	{
		$this->apiName = $apiName;
		$this->apiParas["api_name"] = $apiName;
	}

	public function getApiName()
	{
		return $this->apiName;
	}

	public function setEnvironment($environment)
	{
		$this->environment = $environment;
		$this->apiParas["environment"] = $environment;
	}

	public function getEnvironment()
	{
		return $this->environment;
	}

	public function getApiMethodName()
	{
		return "taobao.top.api.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->apiName,"apiName");
		RequestCheckUtil::checkNotNull($this->environment,"environment");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
