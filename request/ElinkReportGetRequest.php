<?php
/**
 * TOP API: taobao.elink.report.get request
 * 
 * @author auto create
 * @since 1.0, 2011-03-25 00:00:00
 */
class ElinkReportGetRequest
{
	/** 
	 * 结束时间(零售商提交采购时间)
	 **/
	private $endTime;
	
	/** 
	 * 返回ReportTrade数据结构中所有字段
	 **/
	private $fields;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认20，最大50,超过50默认20
	 **/
	private $pageSize;
	
	/** 
	 * 采购单编号
	 **/
	private $purchaseOid;
	
	/** 
	 * 零售商淘宝帐号
	 **/
	private $retailersNick;
	
	/** 
	 * 开始时间(零售商提交采购时间)
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setPurchaseOid($purchaseOid)
	{
		$this->purchaseOid = $purchaseOid;
		$this->apiParas["purchase_oid"] = $purchaseOid;
	}

	public function getPurchaseOid()
	{
		return $this->purchaseOid;
	}

	public function setRetailersNick($retailersNick)
	{
		$this->retailersNick = $retailersNick;
		$this->apiParas["retailers_nick"] = $retailersNick;
	}

	public function getRetailersNick()
	{
		return $this->retailersNick;
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
		return "taobao.elink.report.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
