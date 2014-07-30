<?php
/**
 * TOP API: taobao.vas.customersign.search request
 * 
 * @author auto create
 * @since 1.0, 2012-11-09 00:00:00
 */
class VasCustomersignSearchRequest
{
	/** 
	 * 查询时间
	 **/
	private $endDate;
	
	/** 
	 * 用户名
	 **/
	private $nick;
	
	/** 
	 * 页码。取值范围：大于零的整数；默认值1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数，取值范围：大于零的整数,小与200的整数；
默认值是50
	 **/
	private $pageSize;
	
	/** 
	 * 合作伙伴编号
	 **/
	private $proxyCode;
	
	/** 
	 * 服务编码
	 **/
	private $servCode;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 查询时间
	 **/
	private $stratDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setProxyCode($proxyCode)
	{
		$this->proxyCode = $proxyCode;
		$this->apiParas["proxy_code"] = $proxyCode;
	}

	public function getProxyCode()
	{
		return $this->proxyCode;
	}

	public function setServCode($servCode)
	{
		$this->servCode = $servCode;
		$this->apiParas["serv_code"] = $servCode;
	}

	public function getServCode()
	{
		return $this->servCode;
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

	public function setStratDate($stratDate)
	{
		$this->stratDate = $stratDate;
		$this->apiParas["strat_date"] = $stratDate;
	}

	public function getStratDate()
	{
		return $this->stratDate;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.customersign.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkNotNull($this->proxyCode,"proxyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
