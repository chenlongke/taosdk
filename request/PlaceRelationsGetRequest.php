<?php
/**
 * TOP API: taobao.place.relations.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-01 00:00:00
 */
class PlaceRelationsGetRequest
{
	/** 
	 * 请求的数据, 比如说聚划算本地商品为1，o2o 活动优惠券：1101
	 **/
	private $dataType;
	
	/** 
	 * 分页查询的页码
	 **/
	private $pageNo;
	
	/** 
	 * 分页查询一页含有记录数
	 **/
	private $pageSize;
	
	/** 
	 * 查询信息的结束时间
	 **/
	private $queryEndTime;
	
	/** 
	 * 查询信息的起始时间
	 **/
	private $queryStartTime;
	
	private $apiParas = array();
	
	public function setDataType($dataType)
	{
		$this->dataType = $dataType;
		$this->apiParas["data_type"] = $dataType;
	}

	public function getDataType()
	{
		return $this->dataType;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setQueryEndTime($queryEndTime)
	{
		$this->queryEndTime = $queryEndTime;
		$this->apiParas["query_end_time"] = $queryEndTime;
	}

	public function getQueryEndTime()
	{
		return $this->queryEndTime;
	}

	public function setQueryStartTime($queryStartTime)
	{
		$this->queryStartTime = $queryStartTime;
		$this->apiParas["query_start_time"] = $queryStartTime;
	}

	public function getQueryStartTime()
	{
		return $this->queryStartTime;
	}

	public function getApiMethodName()
	{
		return "taobao.place.relations.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dataType,"dataType");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,10,"pageSize");
		RequestCheckUtil::checkNotNull($this->queryEndTime,"queryEndTime");
		RequestCheckUtil::checkNotNull($this->queryStartTime,"queryStartTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
