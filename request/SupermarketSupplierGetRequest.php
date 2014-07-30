<?php
/**
 * TOP API: taobao.supermarket.supplier.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-24 00:00:00
 */
class SupermarketSupplierGetRequest
{
	/** 
	 * 增量结束时间
	 **/
	private $endModified;
	
	/** 
	 * 当前页数，默认从1开始
	 **/
	private $pageIndex;
	
	/** 
	 * 总数
	 **/
	private $pageSize;
	
	/** 
	 * 增量获取开始时间
	 **/
	private $startModified;
	
	/** 
	 * 商家nick-集合
	 **/
	private $supplierList;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
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

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setSupplierList($supplierList)
	{
		$this->supplierList = $supplierList;
		$this->apiParas["supplier_list"] = $supplierList;
	}

	public function getSupplierList()
	{
		return $this->supplierList;
	}

	public function getApiMethodName()
	{
		return "taobao.supermarket.supplier.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMaxListSize($this->supplierList,100,"supplierList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
