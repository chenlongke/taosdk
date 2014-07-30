<?php
/**
 * TOP API: taobao.vas.sellerbills.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class VasSellerbillsGetRequest
{
	/** 
	 * 账单开始时间。格式：yyyy-MM-dd HH:mm:ss。开始时间必须为3个月内的一个时间。
	 **/
	private $beginDate;
	
	/** 
	 * 账单结束时间。格式：yyyy-MM-dd HH:mm:ss。
	 **/
	private $endDate;
	
	/** 
	 * 服务类型。如：B2C_CMI_ONLINE
	 **/
	private $serviceCode;
	
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

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.sellerbills.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->beginDate,"beginDate");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
