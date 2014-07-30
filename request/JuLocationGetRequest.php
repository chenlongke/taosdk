<?php
/**
 * TOP API: taobao.ju.location.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-18 00:00:00
 */
class JuLocationGetRequest
{
	/** 
	 * 客户端请求的IP地址
	 **/
	private $ip;
	
	private $apiParas = array();
	
	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.location.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ip,"ip");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
