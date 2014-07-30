<?php
/**
 * TOP API: taobao.logistics.station.order.status request
 * 
 * @author auto create
 * @since 1.0, 2012-07-13 00:00:00
 */
class LogisticsStationOrderStatusRequest
{
	/** 
	 * 状态信息的备注
	 **/
	private $remark;
	
	/** 
	 * 服务站的Id信息
	 **/
	private $stationId;
	
	/** 
	 * 代收货订单的ID
	 **/
	private $stationOrderId;
	
	/** 
	 * 状态的时间
	 **/
	private $statusDate;
	
	/** 
	 * 状态类型
	 **/
	private $statusType;
	
	private $apiParas = array();
	
	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
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

	public function setStationOrderId($stationOrderId)
	{
		$this->stationOrderId = $stationOrderId;
		$this->apiParas["station_order_id"] = $stationOrderId;
	}

	public function getStationOrderId()
	{
		return $this->stationOrderId;
	}

	public function setStatusDate($statusDate)
	{
		$this->statusDate = $statusDate;
		$this->apiParas["status_date"] = $statusDate;
	}

	public function getStatusDate()
	{
		return $this->statusDate;
	}

	public function setStatusType($statusType)
	{
		$this->statusType = $statusType;
		$this->apiParas["status_type"] = $statusType;
	}

	public function getStatusType()
	{
		return $this->statusType;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.station.order.status";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
		RequestCheckUtil::checkNotNull($this->stationOrderId,"stationOrderId");
		RequestCheckUtil::checkNotNull($this->statusDate,"statusDate");
		RequestCheckUtil::checkNotNull($this->statusType,"statusType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
