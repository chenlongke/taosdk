<?php
/**
 * TOP API: alibaba.autonavi.lbi.poi.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-23 00:00:00
 */
class AlibabaAutonaviLbiPoiGetRequest
{
	/** 
	 * 业务日期，通常指的是某一天的数据版本
	 **/
	private $bizdate;
	
	/** 
	 * 国标POI编码(串)。为空时查询所有类型。
	 **/
	private $gbtype;
	
	/** 
	 * 地理区块id (串)。全球地理面会按照一个通用算法分成多个方形格子，每个格子有固定的id，格子的长宽根据精度要求可以分成100m/300m/1km/3km 等。
	 **/
	private $gid;
	
	/** 
	 * 限制返回结果数
	 **/
	private $limit;
	
	/** 
	 * 排序字段 可选 默认倒序
	 **/
	private $order;
	
	/** 
	 * 访问类型。1为零售POI查询，2为零售POI统计。
	 **/
	private $qtype;
	
	/** 
	 * 默认为b，b为精简版数据，d为详细版数据。
	 **/
	private $returntype;
	
	private $apiParas = array();
	
	public function setBizdate($bizdate)
	{
		$this->bizdate = $bizdate;
		$this->apiParas["bizdate"] = $bizdate;
	}

	public function getBizdate()
	{
		return $this->bizdate;
	}

	public function setGbtype($gbtype)
	{
		$this->gbtype = $gbtype;
		$this->apiParas["gbtype"] = $gbtype;
	}

	public function getGbtype()
	{
		return $this->gbtype;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setOrder($order)
	{
		$this->order = $order;
		$this->apiParas["order"] = $order;
	}

	public function getOrder()
	{
		return $this->order;
	}

	public function setQtype($qtype)
	{
		$this->qtype = $qtype;
		$this->apiParas["qtype"] = $qtype;
	}

	public function getQtype()
	{
		return $this->qtype;
	}

	public function setReturntype($returntype)
	{
		$this->returntype = $returntype;
		$this->apiParas["returntype"] = $returntype;
	}

	public function getReturntype()
	{
		return $this->returntype;
	}

	public function getApiMethodName()
	{
		return "alibaba.autonavi.lbi.poi.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizdate,"bizdate");
		RequestCheckUtil::checkMaxLength($this->bizdate,14,"bizdate");
		RequestCheckUtil::checkMaxLength($this->gbtype,409600,"gbtype");
		RequestCheckUtil::checkNotNull($this->gid,"gid");
		RequestCheckUtil::checkMaxLength($this->gid,409600,"gid");
		RequestCheckUtil::checkMaxLength($this->order,409600,"order");
		RequestCheckUtil::checkNotNull($this->qtype,"qtype");
		RequestCheckUtil::checkMaxLength($this->qtype,409600,"qtype");
		RequestCheckUtil::checkMaxLength($this->returntype,409600,"returntype");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
