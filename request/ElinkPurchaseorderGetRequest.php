<?php
/**
 * TOP API: taobao.elink.purchaseorder.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkPurchaseorderGetRequest
{
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认20，最大50,超过50默认20
	 **/
	private $pageSize;
	
	/** 
	 * 结束时间【零售商提交采购单时间】;默认返回最近七天内的数据
	 **/
	private $purchaseEnd;
	
	/** 
	 * 采购单编号
	 **/
	private $purchaseOid;
	
	/** 
	 * 起始时间【零售商提交采购单时间】;默认返回最近七天内的数据
	 **/
	private $purchaseStart;
	
	/** 
	 * 零售商淘宝帐号
	 **/
	private $retailersNick;
	
	/** 
	 * 采购单状态。可选值：*PURCHASE_CREATE(零售商已创建)*PURCHASE_AGREE(供货商已同意)*PURCHASE_GOODS(供货商已发货)*PURCHASE_CLOSED(到期未发货);默认获取所有状态
	 **/
	private $status;
	
	/** 
	 * 合作模式。*DISTRIBUTE(经销)*VENDOR(代销)
	 **/
	private $tpType;
	
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

	public function setPurchaseEnd($purchaseEnd)
	{
		$this->purchaseEnd = $purchaseEnd;
		$this->apiParas["purchase_end"] = $purchaseEnd;
	}

	public function getPurchaseEnd()
	{
		return $this->purchaseEnd;
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

	public function setPurchaseStart($purchaseStart)
	{
		$this->purchaseStart = $purchaseStart;
		$this->apiParas["purchase_start"] = $purchaseStart;
	}

	public function getPurchaseStart()
	{
		return $this->purchaseStart;
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

	public function setTpType($tpType)
	{
		$this->tpType = $tpType;
		$this->apiParas["tp_type"] = $tpType;
	}

	public function getTpType()
	{
		return $this->tpType;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.purchaseorder.get";
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
