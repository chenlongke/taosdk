<?php
/**
 * TOP API: taobao.elink.trades.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkTradesGetRequest
{
	/** 
	 * 零售商确认发货结束时间
	 **/
	private $createdEnd;
	
	/** 
	 * 零售商确认发货开始时间
	 **/
	private $createdStart;
	
	/** 
	 * 物流订单类型:共享库存(SHARED),采购单(PURCHASE)
	 **/
	private $logisticsType;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:20;
最大值:100,超过100默认20
	 **/
	private $pageSize;
	
	/** 
	 * 采购单编号
	 **/
	private $purchaseOid;
	
	/** 
	 * 零售商帐号
	 **/
	private $retailersNick;
	
	/** 
	 * 物流订单状态。可选值：*WAIT_SEND_GOODS(等待发货)：*WAIT_CONFIRM_GOODS(已发货)。默认获取WAIT_SEND_GOODS(等待发货的订单)
	 **/
	private $status;
	
	/** 
	 * 淘宝订单ID
	 **/
	private $tid;
	
	/** 
	 * 发货类型:供货商需发货订单：TRADE_GHS
	 **/
	private $type;
	
	/** 
	 * 物流订单ID
	 **/
	private $wlbOrderid;
	
	private $apiParas = array();
	
	public function setCreatedEnd($createdEnd)
	{
		$this->createdEnd = $createdEnd;
		$this->apiParas["created_end"] = $createdEnd;
	}

	public function getCreatedEnd()
	{
		return $this->createdEnd;
	}

	public function setCreatedStart($createdStart)
	{
		$this->createdStart = $createdStart;
		$this->apiParas["created_start"] = $createdStart;
	}

	public function getCreatedStart()
	{
		return $this->createdStart;
	}

	public function setLogisticsType($logisticsType)
	{
		$this->logisticsType = $logisticsType;
		$this->apiParas["logistics_type"] = $logisticsType;
	}

	public function getLogisticsType()
	{
		return $this->logisticsType;
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

	public function setPurchaseOid($purchaseOid)
	{
		$this->purchaseOid = $purchaseOid;
		$this->apiParas["purchase_oid"] = $purchaseOid;
	}

	public function getPurchaseOid()
	{
		return $this->purchaseOid;
	}

	public function setRetailersNick($retailersNick)
	{
		$this->retailersNick = $retailersNick;
		$this->apiParas["retailers_nick"] = $retailersNick;
	}

	public function getRetailersNick()
	{
		return $this->retailersNick;
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

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
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

	public function setWlbOrderid($wlbOrderid)
	{
		$this->wlbOrderid = $wlbOrderid;
		$this->apiParas["wlb_orderid"] = $wlbOrderid;
	}

	public function getWlbOrderid()
	{
		return $this->wlbOrderid;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.trades.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
