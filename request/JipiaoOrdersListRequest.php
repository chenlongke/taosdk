<?php
/**
 * TOP API: taobao.jipiao.orders.list request
 * 
 * @author auto create
 * @since 1.0, 2012-04-18 00:00:00
 */
class JipiaoOrdersListRequest
{
	/** 
	 * 用户淘宝昵称，如果有值，就查属于改用户的订单
	 **/
	private $buyerNick;
	
	/** 
	 * 当前页号，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 查询开始时间（按订单最后编辑时间查）格式：yyyy-MM-dd
	 **/
	private $fromDate;
	
	/** 
	 * 每页显示多少条订单，默认15条，最大不超过30
	 **/
	private $pageSize;
	
	/** 
	 * 100:全部（默认）,
0:未提交,
2:受理中,
3:成功,
4:失败,
5:撤销,
6:失效,
8:确认出票
	 **/
	private $status;
	
	/** 
	 * 查询结束时间（按订单编辑时间查）格式：yyyy-MM-dd
	 **/
	private $toDate;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setFromDate($fromDate)
	{
		$this->fromDate = $fromDate;
		$this->apiParas["from_date"] = $fromDate;
	}

	public function getFromDate()
	{
		return $this->fromDate;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setToDate($toDate)
	{
		$this->toDate = $toDate;
		$this->apiParas["to_date"] = $toDate;
	}

	public function getToDate()
	{
		return $this->toDate;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.orders.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
