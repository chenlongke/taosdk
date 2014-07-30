<?php
/**
 * TOP API: tmall.wangwangfenliu.tasklist.get request
 * 
 * @author auto create
 * @since 1.0, 2012-08-10 00:00:00
 */
class TmallWangwangfenliuTasklistGetRequest
{
	/** 
	 * 查询end时间,查询end时间和start时间必须在3天以内
	 **/
	private $endDate;
	
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	/** 
	 * 查询起始时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.tasklist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
