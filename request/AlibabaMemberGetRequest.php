<?php
/**
 * TOP API: alibaba.member.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-10 00:00:00
 */
class AlibabaMemberGetRequest
{
	/** 
	 * 自定义需要返回字段
	 **/
	private $fields;
	
	/** 
	 * 会员memberId
	 **/
	private $memberId;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["memberId"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

	public function getApiMethodName()
	{
		return "alibaba.member.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fields,100,"fields");
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
