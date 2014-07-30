<?php
/**
 * TOP API: taobao.jindoucloud.messagecount.clear request
 * 
 * @author auto create
 * @since 1.0, 2014-03-14 00:00:00
 */
class JindoucloudMessagecountClearRequest
{
	/** 
	 * 客户端的版本
	 **/
	private $clientInfo;
	
	/** 
	 * 需要关闭的topic
	 **/
	private $topics;
	
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

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function getApiMethodName()
	{
		return "taobao.jindoucloud.messagecount.clear";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->topics,"topics");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
