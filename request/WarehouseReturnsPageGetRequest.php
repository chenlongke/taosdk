<?php
/**
 * TOP API: taobao.warehouse.returns.page.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseReturnsPageGetRequest
{
	/** 
	 * 退货单号
	 **/
	private $crkCode;
	
	/** 
	 * 原物流订单号
	 **/
	private $orderCode;
	
	/** 
	 * 当前页(默认为1)
	 **/
	private $pageNo;
	
	/** 
	 * 分页参数,每页所包含的记录条数,正整数，默认20，最大50,超过50默认50.
	 **/
	private $pageSize;
	
	/** 
	 * 结束退货时间,查出当前时间之前的所有记录数
	 **/
	private $returnDateEnd;
	
	/** 
	 * 起始退货时间，查出从当前时间起的所有记录
	 **/
	private $returnDateStart;
	
	/** 
	 * 配送中心
	 **/
	private $sellerStoreId;
	
	/** 
	 * 原订单编号
	 **/
	private $taobaoTradeId;
	
	private $apiParas = array();
	
	public function setCrkCode($crkCode)
	{
		$this->crkCode = $crkCode;
		$this->apiParas["crk_code"] = $crkCode;
	}

	public function getCrkCode()
	{
		return $this->crkCode;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
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

	public function setReturnDateEnd($returnDateEnd)
	{
		$this->returnDateEnd = $returnDateEnd;
		$this->apiParas["return_date_end"] = $returnDateEnd;
	}

	public function getReturnDateEnd()
	{
		return $this->returnDateEnd;
	}

	public function setReturnDateStart($returnDateStart)
	{
		$this->returnDateStart = $returnDateStart;
		$this->apiParas["return_date_start"] = $returnDateStart;
	}

	public function getReturnDateStart()
	{
		return $this->returnDateStart;
	}

	public function setSellerStoreId($sellerStoreId)
	{
		$this->sellerStoreId = $sellerStoreId;
		$this->apiParas["seller_store_id"] = $sellerStoreId;
	}

	public function getSellerStoreId()
	{
		return $this->sellerStoreId;
	}

	public function setTaobaoTradeId($taobaoTradeId)
	{
		$this->taobaoTradeId = $taobaoTradeId;
		$this->apiParas["taobao_trade_id"] = $taobaoTradeId;
	}

	public function getTaobaoTradeId()
	{
		return $this->taobaoTradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.returns.page.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->crkCode,64,"crkCode");
		RequestCheckUtil::checkMaxLength($this->orderCode,40,"orderCode");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
