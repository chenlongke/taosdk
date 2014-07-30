<?php
/**
 * TOP API: taobao.chaoshi.promotionitem.search request
 * 
 * @author auto create
 * @since 1.0, 2013-08-26 00:00:00
 */
class ChaoshiPromotionitemSearchRequest
{
	/** 
	 * 需查询时间范围的结束时间（按照商品修改时间查询）。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endTime;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围：1~20，默认值：15
	 **/
	private $pageSize;
	
	/** 
	 * 活动编码
	 **/
	private $promId;
	
	/** 
	 * 需查询时间范围的开始时间（按照商品修改时间查询）。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setPromId($promId)
	{
		$this->promId = $promId;
		$this->apiParas["prom_id"] = $promId;
	}

	public function getPromId()
	{
		return $this->promId;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.promotionitem.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->promId,"promId");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
