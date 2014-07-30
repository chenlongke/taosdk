<?php
/**
 * TOP API: taobao.qianniu.tasklist.biz.latest request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class QianniuTasklistBizLatestRequest
{
	/** 
	 * 业务关键id，如交易任务里为订单id，客服任务里为客户nick。特别注意：只支持单个bizid查询。
	 **/
	private $bizId;
	
	/** 
	 * 业务类型.各插件只负责处理自身业务类型的任务。如订单插件只处理'trade'类型的任务。
	 **/
	private $bizType;
	
	/** 
	 * 接口返回的字段。具体字段名参见接口返回的qtask类型。(相比老接口，不需要填totalcount，直接在返回中包含了)
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
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

	public function getApiMethodName()
	{
		return "taobao.qianniu.tasklist.biz.latest";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
