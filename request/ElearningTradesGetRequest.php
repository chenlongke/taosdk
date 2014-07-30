<?php
/**
 * TOP API: taobao.elearning.trades.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningTradesGetRequest
{
	/** 
	 * 订单ID（若传入orderId>0，则只返回指定的这一条订单）
	 **/
	private $orderId;
	
	/** 
	 * 当前页码（page_no>=1，若超出范围，则取默认值）
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回的结果数量（1<=page_size<=40，若超出范围，则取默认值）
	 **/
	private $pageSize;
	
	/** 
	 * 机构的淘宝ID
	 **/
	private $sellerId;
	
	/** 
	 * status订单状态(0代表不限，1代表未支付，2代表已支付，3代表已关闭)，
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
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

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
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

	public function getApiMethodName()
	{
		return "taobao.elearning.trades.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,40,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
