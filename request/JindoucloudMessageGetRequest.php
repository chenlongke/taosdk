<?php
/**
 * TOP API: taobao.jindoucloud.message.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class JindoucloudMessageGetRequest
{
	/** 
	 * 传递客户端的信息
	 **/
	private $clientInfo;
	
	/** 
	 * 结束时间
	 **/
	private $endModified;
	
	/** 
	 * 一次性获取多少条数据
	 **/
	private $number;
	
	/** 
	 * 取消息的开始时间，如果不传的话默认是调用api时的系统当前时间。
	 **/
	private $startModified;
	
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

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
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
		return "taobao.jindoucloud.message.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->topic,"topic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
