<?php
/**
 * TOP API: taobao.vas.pagesubs.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasPagesubsGetRequest
{
	/** 
	 * 修改日期
	 **/
	private $modifiedTime;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 单页数量，最大不超过200
	 **/
	private $pageSize;
	
	/** 
	 * 汇金的服务code
	 **/
	private $serviceCode;
	
	private $apiParas = array();
	
	public function setModifiedTime($modifiedTime)
	{
		$this->modifiedTime = $modifiedTime;
		$this->apiParas["modified_time"] = $modifiedTime;
	}

	public function getModifiedTime()
	{
		return $this->modifiedTime;
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
		return "taobao.vas.pagesubs.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
