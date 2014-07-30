<?php
/**
 * TOP API: taobao.train.agent.bookticket.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-09-26 00:00:00
 */
class TrainAgentBookticketConfirmRequest
{
	/** 
	 * 代理商id
	 **/
	private $agentId;
	
	/** 
	 * 出发日期
	 **/
	private $depDate;
	
	/** 
	 * 具体失败原因,没有填no
	 **/
	private $failMsg;
	
	/** 
	 * 主订单id
	 **/
	private $mainOrderId;
	
	/** 
	 * 退款是否成功
	 **/
	private $status;
	
	/** 
	 * 12306成功出票id
	 **/
	private $ticket12306Id;
	
	/** 
	 * 订单中包含的票数量
	 **/
	private $ticketNum;
	
	/** 
	 * 火车票id;单价;坐席;座次号;车次;乘车人姓名;证件类型;证件号码;保单号;保单价格

特别注意:票价、保险价格必须到分,例如10元,输入为1000.
	 **/
	private $tickets;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setFailMsg($failMsg)
	{
		$this->failMsg = $failMsg;
		$this->apiParas["fail_msg"] = $failMsg;
	}

	public function getFailMsg()
	{
		return $this->failMsg;
	}

	public function setMainOrderId($mainOrderId)
	{
		$this->mainOrderId = $mainOrderId;
		$this->apiParas["main_order_id"] = $mainOrderId;
	}

	public function getMainOrderId()
	{
		return $this->mainOrderId;
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

	public function setTicket12306Id($ticket12306Id)
	{
		$this->ticket12306Id = $ticket12306Id;
		$this->apiParas["ticket_12306_id"] = $ticket12306Id;
	}

	public function getTicket12306Id()
	{
		return $this->ticket12306Id;
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

	public function setTickets($tickets)
	{
		$this->tickets = $tickets;
		$this->apiParas["tickets"] = $tickets;
	}

	public function getTickets()
	{
		return $this->tickets;
	}

	public function getApiMethodName()
	{
		return "taobao.train.agent.bookticket.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkNotNull($this->failMsg,"failMsg");
		RequestCheckUtil::checkNotNull($this->mainOrderId,"mainOrderId");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->ticket12306Id,"ticket12306Id");
		RequestCheckUtil::checkNotNull($this->ticketNum,"ticketNum");
		RequestCheckUtil::checkNotNull($this->tickets,"tickets");
		RequestCheckUtil::checkMaxListSize($this->tickets,10,"tickets");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
