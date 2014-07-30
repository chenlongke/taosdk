<?php
/**
 * TOP API: tmall.brandsite.weibo.detailpage.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-21 00:00:00
 */
class TmallBrandsiteWeiboDetailpageGetRequest
{
	/** 
	 * 宝贝Id
	 **/
	private $itemId;
	
	/** 
	 * 需要关联宝贝的个数，最大不超过10
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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

	public function getApiMethodName()
	{
		return "tmall.brandsite.weibo.detailpage.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
