<?php
/**
 * TOP API: taobao.ju.deposits.search request
 * 
 * @author auto create
 * @since 1.0, 2013-07-25 00:00:00
 */
class JuDepositsSearchRequest
{
	/** 
	 * 保证金id列表
	 **/
	private $depositIds;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setDepositIds($depositIds)
	{
		$this->depositIds = $depositIds;
		$this->apiParas["deposit_ids"] = $depositIds;
	}

	public function getDepositIds()
	{
		return $this->depositIds;
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

	public function getApiMethodName()
	{
		return "taobao.ju.deposits.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->depositIds,"depositIds");
		RequestCheckUtil::checkMaxListSize($this->depositIds,100,"depositIds");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
