<?php
/**
 * TOP API: taobao.profile.cartusercounts.get request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class ProfileCartusercountsGetRequest
{
	/** 
	 * 查询日期区间之结束日期
	 **/
	private $endDate;
	
	/** 
	 * 查询日期区间之开始日期
	 **/
	private $startDate;
	
	/** 
	 * Member为会员,Visitor为游客
	 **/
	private $type;
	
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
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
		return "taobao.profile.cartusercounts.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
