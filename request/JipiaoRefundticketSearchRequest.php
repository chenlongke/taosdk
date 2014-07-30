<?php
/**
 * TOP API: taobao.jipiao.refundticket.search request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoRefundticketSearchRequest
{
	/** 
	 * 退票记录最近修改时间，所在区间的终点；注意，时间格式要求 yyyy-mm-dd 默认日期，当前时间
	 **/
	private $endCreateDate;
	
	/** 
	 * 返回结果结束行，默认50
	 **/
	private $endRow;
	
	/** 
	 * 乘客姓名
	 **/
	private $passengerName;
	
	/** 
	 * 支付状态 1.未支付 2.失败 3.成功；默认3
	 **/
	private $payStatus;
	
	/** 
	 * 退票记录最近修改时间，所在区间的起点；注意，时间格式要求 yyyy-mm-dd 默认日期 7天内
	 **/
	private $startCreateDate;
	
	/** 
	 * 返回结果开始行，默认0
	 **/
	private $startRow;
	
	/** 
	 * 退改签订单状态： 1:待处理 2:接受 3:拒绝 4:失败 5.退票成功；默认为1
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndCreateDate($endCreateDate)
	{
		$this->endCreateDate = $endCreateDate;
		$this->apiParas["end_create_date"] = $endCreateDate;
	}

	public function getEndCreateDate()
	{
		return $this->endCreateDate;
	}

	public function setEndRow($endRow)
	{
		$this->endRow = $endRow;
		$this->apiParas["end_row"] = $endRow;
	}

	public function getEndRow()
	{
		return $this->endRow;
	}

	public function setPassengerName($passengerName)
	{
		$this->passengerName = $passengerName;
		$this->apiParas["passenger_name"] = $passengerName;
	}

	public function getPassengerName()
	{
		return $this->passengerName;
	}

	public function setPayStatus($payStatus)
	{
		$this->payStatus = $payStatus;
		$this->apiParas["pay_status"] = $payStatus;
	}

	public function getPayStatus()
	{
		return $this->payStatus;
	}

	public function setStartCreateDate($startCreateDate)
	{
		$this->startCreateDate = $startCreateDate;
		$this->apiParas["start_create_date"] = $startCreateDate;
	}

	public function getStartCreateDate()
	{
		return $this->startCreateDate;
	}

	public function setStartRow($startRow)
	{
		$this->startRow = $startRow;
		$this->apiParas["start_row"] = $startRow;
	}

	public function getStartRow()
	{
		return $this->startRow;
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
		return "taobao.jipiao.refundticket.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endCreateDate,"endCreateDate");
		RequestCheckUtil::checkNotNull($this->startCreateDate,"startCreateDate");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
