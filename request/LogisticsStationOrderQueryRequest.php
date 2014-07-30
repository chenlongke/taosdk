<?php
/**
 * TOP API: taobao.logistics.station.order.query request
 * 
 * @author auto create
 * @since 1.0, 2013-12-27 00:00:00
 */
class LogisticsStationOrderQueryRequest
{
	/** 
	 * 订单异常状态：超时订单 (500)；预警订单 (501)；外来订单 (502)： 新入库，地址拷贝；交易关闭 (503)： 买家退款退货；飞单 (504)： 卖家修改收货地址；其他 (599)；
	 **/
	private $errorStatus;
	
	/** 
	 * 开始时间
	 **/
	private $fromDate;
	
	/** 
	 * 分页中的限制个数
	 **/
	private $length;
	
	/** 
	 * 运单号信息
	 **/
	private $mailNo;
	
	/** 
	 * 面单上的手机号
	 **/
	private $mobile;
	
	/** 
	 * 面单上的收件人姓名
	 **/
	private $name;
	
	/** 
	 * 订单来源，-1为外部录入，0为来自交易,2为来自改派
	 **/
	private $orderSource;
	
	/** 
	 * 筛选多个订单来源的订单
	 **/
	private $orderSourceList;
	
	/** 
	 * 座机号
	 **/
	private $phone;
	
	/** 
	 * 代收订单ID
	 **/
	private $staOrderId;
	
	/** 
	 * 分页中的开始
	 **/
	private $start;
	
	/** 
	 * 服务站ID信息
	 **/
	private $stationId;
	
	/** 
	 * 状态描述符号
	 **/
	private $status;
	
	/** 
	 * 筛选多状态的订单
	 **/
	private $statusList;
	
	/** 
	 * 结束时间
	 **/
	private $toDate;
	
	/** 
	 * 交易号
	 **/
	private $tradeId;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setErrorStatus($errorStatus)
	{
		$this->errorStatus = $errorStatus;
		$this->apiParas["error_status"] = $errorStatus;
	}

	public function getErrorStatus()
	{
		return $this->errorStatus;
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

	public function setLength($length)
	{
		$this->length = $length;
		$this->apiParas["length"] = $length;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOrderSource($orderSource)
	{
		$this->orderSource = $orderSource;
		$this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource()
	{
		return $this->orderSource;
	}

	public function setOrderSourceList($orderSourceList)
	{
		$this->orderSourceList = $orderSourceList;
		$this->apiParas["order_source_list"] = $orderSourceList;
	}

	public function getOrderSourceList()
	{
		return $this->orderSourceList;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setStaOrderId($staOrderId)
	{
		$this->staOrderId = $staOrderId;
		$this->apiParas["sta_order_id"] = $staOrderId;
	}

	public function getStaOrderId()
	{
		return $this->staOrderId;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function setStationId($stationId)
	{
		$this->stationId = $stationId;
		$this->apiParas["station_id"] = $stationId;
	}

	public function getStationId()
	{
		return $this->stationId;
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

	public function setStatusList($statusList)
	{
		$this->statusList = $statusList;
		$this->apiParas["status_list"] = $statusList;
	}

	public function getStatusList()
	{
		return $this->statusList;
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

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.station.order.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->orderSource,2,"orderSource");
		RequestCheckUtil::checkMinValue($this->orderSource,-1,"orderSource");
		RequestCheckUtil::checkMaxListSize($this->orderSourceList,10,"orderSourceList");
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
		RequestCheckUtil::checkMaxListSize($this->statusList,10,"statusList");
		RequestCheckUtil::checkMaxLength($this->statusList,10,"statusList");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
