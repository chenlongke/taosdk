<?php
/**
 * TOP API: taobao.logistics.ordertrace.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-29 00:00:00
 */
class LogisticsOrdertraceGetRequest
{
	/** 
	 * 是否缓存
	 **/
	private $cache;
	
	/** 
	 * 物流公司编码
	 **/
	private $companyCode;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	private $apiParas = array();
	
	public function setCache($cache)
	{
		$this->cache = $cache;
		$this->apiParas["cache"] = $cache;
	}

	public function getCache()
	{
		return $this->cache;
	}

	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.ordertrace.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cache,"cache");
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
