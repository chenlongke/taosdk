<?php
/**
 * TOP API: taobao.supermarket.activity.product.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-24 00:00:00
 */
class SupermarketActivityProductGetRequest
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
	 * 每页记录数
	 **/
	private $pageSize;
	
	/** 
	 * 商品IDs
	 **/
	private $productList;
	
	/** 
	 * 增量获取开始时间
	 **/
	private $startModified;
	
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

	public function setProductList($productList)
	{
		$this->productList = $productList;
		$this->apiParas["product_list"] = $productList;
	}

	public function getProductList()
	{
		return $this->productList;
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

	public function getApiMethodName()
	{
		return "taobao.supermarket.activity.product.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMaxListSize($this->productList,100,"productList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
