<?php
/**
 * TOP API: taobao.elink.logi.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkLogiOrderConfirmRequest
{
	/** 
	 * 发票价格
	 **/
	private $invoicePrice;
	
	/** 
	 * 发票抬头
	 **/
	private $invoiceTitle;
	
	/** 
	 * 需要确认的物流订单ID
	 **/
	private $logisticsOrderId;
	
	/** 
	 * 备注信息
	 **/
	private $remark;
	
	private $apiParas = array();
	
	public function setInvoicePrice($invoicePrice)
	{
		$this->invoicePrice = $invoicePrice;
		$this->apiParas["invoice_price"] = $invoicePrice;
	}

	public function getInvoicePrice()
	{
		return $this->invoicePrice;
	}

	public function setInvoiceTitle($invoiceTitle)
	{
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParas["invoice_title"] = $invoiceTitle;
	}

	public function getInvoiceTitle()
	{
		return $this->invoiceTitle;
	}

	public function setLogisticsOrderId($logisticsOrderId)
	{
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParas["logistics_order_id"] = $logisticsOrderId;
	}

	public function getLogisticsOrderId()
	{
		return $this->logisticsOrderId;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.logi.order.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsOrderId,"logisticsOrderId");
		RequestCheckUtil::checkMaxValue($this->logisticsOrderId,9223372036854775807,"logisticsOrderId");
		RequestCheckUtil::checkMinValue($this->logisticsOrderId,0,"logisticsOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
