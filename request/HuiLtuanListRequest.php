<?php
/**
 * TOP API: taobao.hui.ltuan.list request
 * 
 * @author auto create
 * @since 1.0, 2011-12-22 00:00:00
 */
class HuiLtuanListRequest
{
	/** 
	 * 地址搜索地区的代号
	 **/
	private $areaCode;
	
	/** 
	 * 宝贝搜索类型，1:仓库中宝贝[-2, -3, -5], 2:上架宝贝[0, 1, -9], 3:在线宝贝[0, 1], must
	 **/
	private $auctionSearchType;
	
	/** 
	 * 后台类目
	 **/
	private $catId;
	
	/** 
	 * 地址搜索城市的代号
	 **/
	private $cityCode;
	
	/** 
	 * 是否降序获取记录？默认降序
	 **/
	private $descOrder;
	
	/** 
	 * 商家编码
	 **/
	private $itemNo;
	
	/** 
	 * 查询的页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数
	 **/
	private $pageSize;
	
	/** 
	 * 橱窗推荐 * 0：正常 * 1：橱窗推荐(卖家操作) * 2：推荐(小二操作)
	 **/
	private $promotedStatus;
	
	/** 
	 * 地址搜索省的代号
	 **/
	private $provCode;
	
	/** 
	 * 按销量排序,默认按创建时间排序
	 **/
	private $sortByQuantity;
	
	/** 
	 * 供应商名称
	 **/
	private $supplierName;
	
	/** 
	 * 商品标题
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAreaCode($areaCode)
	{
		$this->areaCode = $areaCode;
		$this->apiParas["area_code"] = $areaCode;
	}

	public function getAreaCode()
	{
		return $this->areaCode;
	}

	public function setAuctionSearchType($auctionSearchType)
	{
		$this->auctionSearchType = $auctionSearchType;
		$this->apiParas["auction_search_type"] = $auctionSearchType;
	}

	public function getAuctionSearchType()
	{
		return $this->auctionSearchType;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setDescOrder($descOrder)
	{
		$this->descOrder = $descOrder;
		$this->apiParas["desc_order"] = $descOrder;
	}

	public function getDescOrder()
	{
		return $this->descOrder;
	}

	public function setItemNo($itemNo)
	{
		$this->itemNo = $itemNo;
		$this->apiParas["item_no"] = $itemNo;
	}

	public function getItemNo()
	{
		return $this->itemNo;
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

	public function setPromotedStatus($promotedStatus)
	{
		$this->promotedStatus = $promotedStatus;
		$this->apiParas["promoted_status"] = $promotedStatus;
	}

	public function getPromotedStatus()
	{
		return $this->promotedStatus;
	}

	public function setProvCode($provCode)
	{
		$this->provCode = $provCode;
		$this->apiParas["prov_code"] = $provCode;
	}

	public function getProvCode()
	{
		return $this->provCode;
	}

	public function setSortByQuantity($sortByQuantity)
	{
		$this->sortByQuantity = $sortByQuantity;
		$this->apiParas["sort_by_quantity"] = $sortByQuantity;
	}

	public function getSortByQuantity()
	{
		return $this->sortByQuantity;
	}

	public function setSupplierName($supplierName)
	{
		$this->supplierName = $supplierName;
		$this->apiParas["supplier_name"] = $supplierName;
	}

	public function getSupplierName()
	{
		return $this->supplierName;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.hui.ltuan.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionSearchType,"auctionSearchType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
