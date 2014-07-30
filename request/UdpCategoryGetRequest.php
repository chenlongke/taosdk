<?php
/**
 * TOP API: taobao.udp.category.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-05 00:00:00
 */
class UdpCategoryGetRequest
{
	/** 
	 * 开始时间
	 **/
	private $beginTime;
	
	/** 
	 * 类目编号
	 **/
	private $catid;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 指标ID(参阅指标编号)
	 **/
	private $fields;
	
	/** 
	 * 备用
	 **/
	private $parameters;
	
	/** 
	 * 星级编号
	 **/
	private $starid;
	
	private $apiParas = array();
	
	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
	}

	public function setCatid($catid)
	{
		$this->catid = $catid;
		$this->apiParas["catid"] = $catid;
	}

	public function getCatid()
	{
		return $this->catid;
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

	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
		$this->apiParas["parameters"] = $parameters;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function setStarid($starid)
	{
		$this->starid = $starid;
		$this->apiParas["starid"] = $starid;
	}

	public function getStarid()
	{
		return $this->starid;
	}

	public function getApiMethodName()
	{
		return "taobao.udp.category.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
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
