<?php
/**
 * TOP API: taobao.guarantyfunds.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class GuarantyfundsGetRequest
{
	/** 
	 * 查询保证金操作记录创建时间开始，格式为:yyyy-MM-dd
	 **/
	private $beginDate;
	
	/** 
	 * 查询保证金操作记录创建时间结束，格式为:yyyy-MM-dd
	 **/
	private $endDate;
	
	private $apiParas = array();
	
	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
		$this->apiParas["begin_date"] = $beginDate;
	}

	public function getBeginDate()
	{
		return $this->beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function getApiMethodName()
	{
		return "taobao.guarantyfunds.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
