<?php
/**
 * TOP API: taobao.productstat.search request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class ProductstatSearchRequest
{
	/** 
	 * 商品类目ID。
	 **/
	private $cid;
	
	/** 
	 * 排序方式。格式为column:asc/desc,column可选值为: sale_num(销量);price(价格); rate_num(评论数);level(星级)。price(价格)支持asc/desc 排序；sale_num(销量)，rate_num(评论数)，level(星级)仅支持desc排序。默认为按销量倒序排序。
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据（当输入超过上下限时，取默认值）。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值：200；默认值：10（当输入超过上下限时，取默认值）。
	 **/
	private $pageSize;
	
	/** 
	 * 属性导航，当前搜索的属性列表。格式：pid:vid;pid:vid。
	 **/
	private $propPath;
	
	/** 
	 * 搜索字段。 用来搜索产品的title以及关键属性值的名称。
	 **/
	private $q;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
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

	public function setPropPath($propPath)
	{
		$this->propPath = $propPath;
		$this->apiParas["prop_path"] = $propPath;
	}

	public function getPropPath()
	{
		return $this->propPath;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function getApiMethodName()
	{
		return "taobao.productstat.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->q,"q");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
