<?php
/**
 * TOP API: taobao.vas.customersign.info.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasCustomersignInfoGetRequest
{
	/** 
	 * 渠道商编码，代理商；注册的代理商编码
	 **/
	private $proxyCode;
	
	private $apiParas = array();
	
	public function setProxyCode($proxyCode)
	{
		$this->proxyCode = $proxyCode;
		$this->apiParas["proxy_code"] = $proxyCode;
	}

	public function getProxyCode()
	{
		return $this->proxyCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.customersign.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->proxyCode,"proxyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
