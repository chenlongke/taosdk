<?php
/**
 * TOP API: tmall.campaign.campaigns.search request
 * 
 * @author auto create
 * @since 1.0, 2013-03-08 00:00:00
 */
class TmallCampaignCampaignsSearchRequest
{
	/** 
	 * 查询活动end时间，默认是7天后。只要活动的进行时间在查询开始和结束之间存在交集，就会显示该活动
	 **/
	private $endTime;
	
	/** 
	 * 根据活动的关键字来搜索
	 **/
	private $keywords;
	
	/** 
	 * 分页查询，设置查询的页数
	 **/
	private $pageNo;
	
	/** 
	 * 分页查询，每页最多查询的个数
	 **/
	private $pageSize;
	
	/** 
	 * 活动开始时间，默认是当前时间
	 **/
	private $startTime;
	
	/** 
	 * 活动类型，0是全部；1是小二；2是商家
	 **/
	private $type;
	
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

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		$this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords()
	{
		return $this->keywords;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "tmall.campaign.campaigns.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,500,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMaxValue($this->type,2,"type");
		RequestCheckUtil::checkMinValue($this->type,0,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
