<?php
/**
 * TOP API: taobao.trip.scenic.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class TripScenicSearchRequest
{
	/** 
	 * 当前页数
	 **/
	private $currentPage;
	
	/** 
	 * 基于坐标查询时使用，距离范围，单位为公里
	 **/
	private $distance;
	
	/** 
	 * 关键字，包括景点名 省 、市、国家等
	 **/
	private $keywords;
	
	/** 
	 * 是否需要包含电子票
	 **/
	private $needEticket;
	
	/** 
	 * 是否需要包含当日票
	 **/
	private $needTodayBooking;
	
	/** 
	 * 一次请求返回景点个数,最大为20
	 **/
	private $pageSize;
	
	/** 
	 * 景点类型筛选条件
	 **/
	private $scenicTypes;
	
	/** 
	 * 排序字段，默认1-景点销量排序，2-景点价格排序，3-按照景点距离排序（需要传源坐标）
	 **/
	private $sortField;
	
	/** 
	 * 景点排序方式：0-默认按照降序排列，1-按照升序排列
	 **/
	private $sortOrder;
	
	/** 
	 * 源坐标位置，基于坐标查询时使用，格式为（纬度,经度）
	 **/
	private $sourcePoint;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setDistance($distance)
	{
		$this->distance = $distance;
		$this->apiParas["distance"] = $distance;
	}

	public function getDistance()
	{
		return $this->distance;
	}

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		$this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords()
	{
		return $this->keywords;
	}

	public function setNeedEticket($needEticket)
	{
		$this->needEticket = $needEticket;
		$this->apiParas["need_eticket"] = $needEticket;
	}

	public function getNeedEticket()
	{
		return $this->needEticket;
	}

	public function setNeedTodayBooking($needTodayBooking)
	{
		$this->needTodayBooking = $needTodayBooking;
		$this->apiParas["need_today_booking"] = $needTodayBooking;
	}

	public function getNeedTodayBooking()
	{
		return $this->needTodayBooking;
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

	public function setScenicTypes($scenicTypes)
	{
		$this->scenicTypes = $scenicTypes;
		$this->apiParas["scenic_types"] = $scenicTypes;
	}

	public function getScenicTypes()
	{
		return $this->scenicTypes;
	}

	public function setSortField($sortField)
	{
		$this->sortField = $sortField;
		$this->apiParas["sort_field"] = $sortField;
	}

	public function getSortField()
	{
		return $this->sortField;
	}

	public function setSortOrder($sortOrder)
	{
		$this->sortOrder = $sortOrder;
		$this->apiParas["sort_order"] = $sortOrder;
	}

	public function getSortOrder()
	{
		return $this->sortOrder;
	}

	public function setSourcePoint($sourcePoint)
	{
		$this->sourcePoint = $sourcePoint;
		$this->apiParas["source_point"] = $sourcePoint;
	}

	public function getSourcePoint()
	{
		return $this->sourcePoint;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.scenic.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->distance,100,"distance");
		RequestCheckUtil::checkMinValue($this->distance,0,"distance");
		RequestCheckUtil::checkNotNull($this->keywords,"keywords");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
