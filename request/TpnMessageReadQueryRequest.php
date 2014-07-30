<?php
/**
 * TOP API: taobao.tpn.message.read.query request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class TpnMessageReadQueryRequest
{
	/** 
	 * 消息的bizId,如果有多个bizId，则以英文逗号分隔
	 **/
	private $bizIds;
	
	/** 
	 * 传递客户端的信息
	 **/
	private $clientInfo;
	
	/** 
	 * 客户端使用的版本号
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setBizIds($bizIds)
	{
		$this->bizIds = $bizIds;
		$this->apiParas["biz_ids"] = $bizIds;
	}

	public function getBizIds()
	{
		return $this->bizIds;
	}

	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
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
		return "taobao.tpn.message.read.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizIds,"bizIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
