<?php
/**
 * TOP API: taobao.vas.commsettls.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class VasCommsettlsGetRequest
{
	/** 
	 * 结算单查询开始时间。格式：yyyy-MM-dd HH:mm:ss，如2009-11-01 00:00:00，对于小于10的月/日/时/分/秒，请务必在前面加0
	 **/
	private $beginDate;
	
	/** 
	 * 结算单查询结束时间。格式：yyyy-MM-dd HH:mm:ss，如2009-11-02 00:00:00，对于小于10的月/日/时/分/秒，请务必在前面加0
	 **/
	private $endDate;
	
	/** 
	 * 订单编号，查询某条特定订单的结算记录
	 **/
	private $orderId;
	
	/** 
	 * 查询第几页。固定每页返回20条记录。
	 **/
	private $pageNo;
	
	/** 
	 * 对应结算单的服务码。比如：APP_SERVICE_SHOPEX（ShopEX店掌柜独立网店系统）
	 **/
	private $serviceCode;
	
	private $apiParas = array();
	
	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
		$this->apiParas["begin_date"] = $beginDate;
	}

	public function getBeginDate()
	{
		return $this->beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.commsettls.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->beginDate,"beginDate");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
