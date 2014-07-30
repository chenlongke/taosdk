<?php
/**
 * TOP API: taobao.sales.sku.statis.get request
 * 
 * @author auto create
 * @since 1.0, 2013-03-22 00:00:00
 */
class SalesSkuStatisGetRequest
{
	/** 
	 * 查询结束时间，用于指定查询历史数据的结束时间
	 **/
	private $endDate;
	
	/** 
	 * 待查询指标：SkuSalesStatisDaily数据结构的公开信息字段列表，以半角逗号（,）分割
	 **/
	private $fields;
	
	/** 
	 * SKU数字ID
	 **/
	private $skuId;
	
	/** 
	 * 查询起始时间，用于指定查询历史数据的起始时间
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
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
		return "taobao.sales.sku.statis.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->skuId,"skuId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
