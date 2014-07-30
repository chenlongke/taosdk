<?php
/**
 * TOP API: taobao.promotionmisc.tcif.tag.batchquery request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionmiscTcifTagBatchqueryRequest
{
	/** 
	 * 分页查询的当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 查询的一页记录数
	 **/
	private $pageSize;
	
	/** 
	 * 要查询的人群标签名称
	 **/
	private $tagName;
	
	/** 
	 * 人群标签类型 1:特殊的人群标签 2:勋章标签
	 **/
	private $tagType;
	
	private $apiParas = array();
	
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

	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function setTagType($tagType)
	{
		$this->tagType = $tagType;
		$this->apiParas["tag_type"] = $tagType;
	}

	public function getTagType()
	{
		return $this->tagType;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.tcif.tag.batchquery";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
