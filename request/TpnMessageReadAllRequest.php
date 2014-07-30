<?php
/**
 * TOP API: taobao.tpn.message.read.all request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class TpnMessageReadAllRequest
{
	/** 
	 * 传递客户端的信息
	 **/
	private $clientInfo;
	
	/** 
	 * 消息的类型，比如：商品类型为item
	 **/
	private $topic;
	
	/** 
	 * 客户端使用的版本号
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
	}

	public function setTopic($topic)
	{
		$this->topic = $topic;
		$this->apiParas["topic"] = $topic;
	}

	public function getTopic()
	{
		return $this->topic;
	}

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.tpn.message.read.all";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
