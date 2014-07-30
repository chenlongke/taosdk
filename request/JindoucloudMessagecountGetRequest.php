<?php
/**
 * TOP API: taobao.jindoucloud.messagecount.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-08 00:00:00
 */
class JindoucloudMessagecountGetRequest
{
	/** 
	 * 客户端的版本信息
	 **/
	private $clientInfo;
	
	/** 
	 * 需要的字段
	 **/
	private $fields;
	
	/** 
	 * 是否需要详细的数字和最后一条消息
	 **/
	private $needDetail;
	
	/** 
	 * 查询的计数器的类型，比如：item，表示商品类型，可以传递多个类型，多个类型之间用英文逗号分隔
	 **/
	private $topic;
	
	/** 
	 * 如果是子账号，则用:拼接，第一位是主账号，第二位是子账号，如果是主账号，则没有:
	 **/
	private $userIds;
	
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNeedDetail($needDetail)
	{
		$this->needDetail = $needDetail;
		$this->apiParas["need_detail"] = $needDetail;
	}

	public function getNeedDetail()
	{
		return $this->needDetail;
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

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["user_ids"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "taobao.jindoucloud.messagecount.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
