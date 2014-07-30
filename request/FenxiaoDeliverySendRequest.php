<?php
/**
 * TOP API: taobao.fenxiao.delivery.send request
 * 
 * @author auto create
 * @since 1.0, 2010-08-04 00:00:00
 */
class FenxiaoDeliverySendRequest
{
	/** 
	 * 物流公司代码，可选值：EMS(EMS)、STO(申通E物流)、YTO(圆通速递)、ZTO(中通速递)、ZJS(宅急送)、YUNDA(韵达快运)、 TTKDEX(天天快递)、FEDEX(联邦快递)、DBL(德邦物流)、HTKY(汇通快运)、HQ(华强物流)、SF(顺丰速运)、POST(邮政平邮)、OTHER(其他)，默认为OTHER。
	 **/
	private $companyCode;
	
	/** 
	 * 物流公司名称，公司代码为OTHER时必须填写公司名称，公司代码为其它时该字段忽略，取系统中定义的公司代码对应的公司名称。
	 **/
	private $companyName;
	
	/** 
	 * 采购单编号
	 **/
	private $orderId;
	
	/** 
	 * 运单号
	 **/
	private $outSid;
	
	private $apiParas = array();
	
	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOutSid($outSid)
	{
		$this->outSid = $outSid;
		$this->apiParas["out_sid"] = $outSid;
	}

	public function getOutSid()
	{
		return $this->outSid;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.delivery.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->outSid,"outSid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
