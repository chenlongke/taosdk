<?php
/**
 * TOP API: alibaba.autonavi.lbi.locCluster.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-23 00:00:00
 */
class AlibabaAutonaviLbiLocClusterGetRequest
{
	/** 
	 * 业务日期，通常指的是某一天的数据版本
	 **/
	private $bizdate;
	
	/** 
	 * 地理区块id (串)。全球地理面会按照一个通用算法分成多个方形格子，每个格子有固定的id，格子的长宽根据精度要求可以分成100m/300m/1km/3km 等。
	 **/
	private $gid;
	
	/** 
	 * 返回结果数 为空时查询所有。
	 **/
	private $limit;
	
	/** 
	 * 排序字段 默认倒序。
	 **/
	private $order;
	
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

	public function getApiMethodName()
	{
		return "alibaba.autonavi.lbi.locCluster.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizdate,"bizdate");
		RequestCheckUtil::checkMaxLength($this->bizdate,14,"bizdate");
		RequestCheckUtil::checkNotNull($this->gid,"gid");
		RequestCheckUtil::checkMaxLength($this->gid,409600,"gid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
