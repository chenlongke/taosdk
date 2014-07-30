<?php
/**
 * TOP API: taobao.vas.customersign.url.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasCustomersignUrlGetRequest
{
	/** 
	 * 渠道商编码，代理商；注册的代理商编码
	 **/
	private $proxyCode;
	
	/** 
	 * 签订协议的所属服务信息的编码
	 **/
	private $servCode;
	
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

	public function setServCode($servCode)
	{
		$this->servCode = $servCode;
		$this->apiParas["serv_code"] = $servCode;
	}

	public function getServCode()
	{
		return $this->servCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.customersign.url.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->proxyCode,"proxyCode");
		RequestCheckUtil::checkMaxLength($this->proxyCode,32,"proxyCode");
		RequestCheckUtil::checkNotNull($this->servCode,"servCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
