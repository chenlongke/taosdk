<?php
/**
 * TOP API: taobao.sales.category.statis.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-06 00:00:00
 */
class SalesCategoryStatisGetRequest
{
	/** 
	 * 叶子类目ID，只能使用叶子类目ID
	 **/
	private $cateId;
	
	/** 
	 * 查询结束时间，用于指定查询历史数据的结束时间。 一次最多可查1个月，可查询最近15个月的数据
	 **/
	private $endDate;
	
	/** 
	 * 可入参值为：alipay_auction_num。可返回指标：LeafCateSalesStatisDaily数据结构的公开信息字段列表，以半角逗号（,）分割
	 **/
	private $fields;
	
	/** 
	 * 指定商品的价格区间。此价格所在的价格区间的子类目信息将被返回。例如：如果某价格区间为【20-50】，则可以使用20~50之内的任何数字来表示此区间。
如果不设置，则返回此叶子类目下的汇总信息（信息不再区分价格区间）
	 **/
	private $price;
	
	/** 
	 * 查询起始时间，用于指定查询历史数据的起始时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setCateId($cateId)
	{
		$this->cateId = $cateId;
		$this->apiParas["cate_id"] = $cateId;
	}

	public function getCateId()
	{
		return $this->cateId;
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
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
		return "taobao.sales.category.statis.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cateId,"cateId");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
