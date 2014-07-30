<?php
/**
 * TOP API: alibaba.qixinbao.applink.instanceid.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoApplinkInstanceidGetRequest
{
	/** 
	 * 应用域名
	 **/
	private $domain;
	
	private $apiParas = array();
	
	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.applink.instanceid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domain,"domain");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
