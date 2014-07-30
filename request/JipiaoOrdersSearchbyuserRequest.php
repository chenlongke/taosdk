<?php
/**
 * TOP API: taobao.jipiao.orders.searchbyuser request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoOrdersSearchbyuserRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 当前页号
	 **/
	private $currentPage;
	
	/** 
	 * 出发日期
	 **/
	private $depDate;
	
	/** 
	 * 出发城市代码
	 **/
	private $fromCity;
	
	/** 
	 * 每页显示数量
	 **/
	private $pageSize;
	
	/** 
	 * 到达城市代码
	 **/
	private $toCity;
	
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

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setFromCity($fromCity)
	{
		$this->fromCity = $fromCity;
		$this->apiParas["from_city"] = $fromCity;
	}

	public function getFromCity()
	{
		return $this->fromCity;
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

	public function setToCity($toCity)
	{
		$this->toCity = $toCity;
		$this->apiParas["to_city"] = $toCity;
	}

	public function getToCity()
	{
		return $this->toCity;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.orders.searchbyuser";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
