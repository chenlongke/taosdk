<?php
/**
 * TOP API: taobao.bus.trade.ticket.book.confirm request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class BusTradeTicketBookConfirmRequest
{
	/** 
	 * 出票失败原因
	 **/
	private $failMsg;
	
	/** 
	 * 取票地点，如上海南站XXX
	 **/
	private $getTicketAddr;
	
	/** 
	 * 取票时间，如工作日9:00-17:00
	 **/
	private $getTicketTime;
	
	/** 
	 * 主订单id
	 **/
	private $mainBizOrderId;
	
	/** 
	 * 外部车次号
	 **/
	private $scheduleNumber;
	
	/** 
	 * 出票是否成功
	 **/
	private $status;
	
	/** 
	 * 购票张数
	 **/
	private $ticketNum;
	
	/** 
	 * 取票方式或凭证
	 **/
	private $tokenForTicket;
	
	private $apiParas = array();
	
	public function setFailMsg($failMsg)
	{
		$this->failMsg = $failMsg;
		$this->apiParas["fail_msg"] = $failMsg;
	}

	public function getFailMsg()
	{
		return $this->failMsg;
	}

	public function setGetTicketAddr($getTicketAddr)
	{
		$this->getTicketAddr = $getTicketAddr;
		$this->apiParas["get_ticket_addr"] = $getTicketAddr;
	}

	public function getGetTicketAddr()
	{
		return $this->getTicketAddr;
	}

	public function setGetTicketTime($getTicketTime)
	{
		$this->getTicketTime = $getTicketTime;
		$this->apiParas["get_ticket_time"] = $getTicketTime;
	}

	public function getGetTicketTime()
	{
		return $this->getTicketTime;
	}

	public function setMainBizOrderId($mainBizOrderId)
	{
		$this->mainBizOrderId = $mainBizOrderId;
		$this->apiParas["main_biz_order_id"] = $mainBizOrderId;
	}

	public function getMainBizOrderId()
	{
		return $this->mainBizOrderId;
	}

	public function setScheduleNumber($scheduleNumber)
	{
		$this->scheduleNumber = $scheduleNumber;
		$this->apiParas["schedule_number"] = $scheduleNumber;
	}

	public function getScheduleNumber()
	{
		return $this->scheduleNumber;
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

	public function setTicketNum($ticketNum)
	{
		$this->ticketNum = $ticketNum;
		$this->apiParas["ticket_num"] = $ticketNum;
	}

	public function getTicketNum()
	{
		return $this->ticketNum;
	}

	public function setTokenForTicket($tokenForTicket)
	{
		$this->tokenForTicket = $tokenForTicket;
		$this->apiParas["token_for_ticket"] = $tokenForTicket;
	}

	public function getTokenForTicket()
	{
		return $this->tokenForTicket;
	}

	public function getApiMethodName()
	{
		return "taobao.bus.trade.ticket.book.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mainBizOrderId,"mainBizOrderId");
		RequestCheckUtil::checkNotNull($this->scheduleNumber,"scheduleNumber");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->ticketNum,"ticketNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
