<?php
/**
 * TOP API: taobao.udp.promotion.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-09 00:00:00
 */
class UdpPromotionGetRequest
{
	/** 
	 * 营销活动ID
	 **/
	private $actid;
	
	/** 
	 * 开始时间
	 **/
	private $beginTime;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 指标ID(参阅指标编号)
	 **/
	private $fields;
	
	/** 
	 * 2407364
	 **/
	private $itemid;
	
	/** 
	 * 备用
	 **/
	private $parameters;
	
	private $apiParas = array();
	
	public function setActid($actid)
	{
		$this->actid = $actid;
		$this->apiParas["actid"] = $actid;
	}

	public function getActid()
	{
		return $this->actid;
	}

	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setItemid($itemid)
	{
		$this->itemid = $itemid;
		$this->apiParas["itemid"] = $itemid;
	}

	public function getItemid()
	{
		return $this->itemid;
	}

	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
		$this->apiParas["parameters"] = $parameters;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function getApiMethodName()
	{
		return "taobao.udp.promotion.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actid,"actid");
		RequestCheckUtil::checkMinValue($this->actid,1,"actid");
		RequestCheckUtil::checkNotNull($this->beginTime,"beginTime");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->fields,10,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
