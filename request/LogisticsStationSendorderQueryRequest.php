<?php
/**
 * TOP API: taobao.logistics.station.sendorder.query request
 * 
 * @author auto create
 * @since 1.0, 2012-11-13 00:00:00
 */
class LogisticsStationSendorderQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endDate;
	
	/** 
	 * 长度
	 **/
	private $length;
	
	/** 
	 * 运单编号
	 **/
	private $mailNo;
	
	/** 
	 * 收件人姓名
	 **/
	private $recName;
	
	/** 
	 * 订单ID
	 **/
	private $staSendorderId;
	
	/** 
	 * 开始
	 **/
	private $start;
	
	/** 
	 * 开始时间
	 **/
	private $startDate;
	
	/** 
	 * 服务站ID
	 **/
	private $stationId;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
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

	public function setRecName($recName)
	{
		$this->recName = $recName;
		$this->apiParas["rec_name"] = $recName;
	}

	public function getRecName()
	{
		return $this->recName;
	}

	public function setStaSendorderId($staSendorderId)
	{
		$this->staSendorderId = $staSendorderId;
		$this->apiParas["sta_sendorder_id"] = $staSendorderId;
	}

	public function getStaSendorderId()
	{
		return $this->staSendorderId;
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
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
		return "taobao.logistics.station.sendorder.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
