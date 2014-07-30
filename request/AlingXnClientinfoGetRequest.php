<?php
/**
 * TOP API: taobao.aling.xn.clientinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class AlingXnClientinfoGetRequest
{
	/** 
	 * 客户端版本.如果有值返回对应版本的信息；空则返回最新版本信息.
	 **/
	private $clientVersion;
	
	private $apiParas = array();
	
	public function setClientVersion($clientVersion)
	{
		$this->clientVersion = $clientVersion;
		$this->apiParas["client_version"] = $clientVersion;
	}

	public function getClientVersion()
	{
		return $this->clientVersion;
	}

	public function getApiMethodName()
	{
		return "taobao.aling.xn.clientinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->clientVersion,100,"clientVersion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
