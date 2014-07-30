<?php
/**
 * TOP API: alibaba.tae.thirdsite.points.batch.query request
 * 
 * @author auto create
 * @since 1.0, 2014-03-31 00:00:00
 */
class AlibabaTaeThirdsitePointsBatchQueryRequest
{
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 页码
	 **/
	private $pageSize;
	
	/** 
	 * 1->无限数量类型积分. 0->有限数量类型积分
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.tae.thirdsite.points.batch.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
