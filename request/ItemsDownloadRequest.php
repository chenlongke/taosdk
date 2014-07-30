<?php
/**
 * TOP API: taobao.items.download request
 * 
 * @author auto create
 * @since 1.0, 2012-11-11 00:00:00
 */
class ItemsDownloadRequest
{
	/** 
	 * 在售(onsale)、仓库中(instock)、违规(irregular)
	 **/
	private $approveStatus;
	
	/** 
	 * 商品所属的类目ID
	 **/
	private $cid;
	
	/** 
	 * 开始时间最大值
	 **/
	private $endDate;
	
	/** 
	 * 页码。用此接口获取数据，当翻页获取的条数(page_no*page_size）超过10万条,为了保护后台搜索引擎，接口将报错。请大家尽可能的细化自己的搜索条件，或者转调taobao.items.onsale.get和taobao.items.inventory.get根据修改时间分段获取商品
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 匹配关键词（匹配类目标题）
	 **/
	private $q;
	
	/** 
	 * 商品所属的店铺内卖家自定义类目
	 **/
	private $sellerCids;
	
	/** 
	 * 开始时间最小值，商品的上架时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
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

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
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
		return "taobao.items.download";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
