<?php
/**
 * TOP API: alibaba.qixinbao.qxbid.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class AlibabaQixinbaoQxbidGetRequest
{
	/** 
	 * 域名后缀
	 **/
	private $domainSuffix;
	
	private $apiParas = array();
	
	public function setDomainSuffix($domainSuffix)
	{
		$this->domainSuffix = $domainSuffix;
		$this->apiParas["domain_suffix"] = $domainSuffix;
	}

	public function getDomainSuffix()
	{
		return $this->domainSuffix;
	}

	public function getApiMethodName()
	{
		return "alibaba.qixinbao.qxbid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domainSuffix,"domainSuffix");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
