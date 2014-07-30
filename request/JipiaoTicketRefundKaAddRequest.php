<?php
/**
 * TOP API: taobao.jipiao.ticket.refund.ka.add request
 * 
 * @author auto create
 * @since 1.0, 2012-06-13 00:00:00
 */
class JipiaoTicketRefundKaAddRequest
{
	/** 
	 * 外部唯一标识号
	 **/
	private $bookCode;
	
	/** 
	 * 退票订单号
	 **/
	private $orderId;
	
	/** 
	 * 退票列表，多条用半角逗号分隔，单条信息json格式，包括：reason（退票原因）; answer（公司答复）; status（退票状态，1:待处理，2:接受，3:拒绝，4:失败，5:退票成功）; refund_ticket_money（退款金额:分）; refund_insurer_money（退航意险金额:分）; ticket_no（票号）; pnr（订座记录）; passenger_name（乘客姓名）; dep_airport（起飞机场）; arr_airport（到达机场）; airline_code（承运人）; trip_type（0:单程,1:往返）; trip_segment（1:去程,2:回程）; ticket_price（票价:分）; fees（总费用:分）; batch_no（外部唯一批次号）; submit_time（首次提交时间,格式:"yyyy-MM-dd HH:mm:ss"）; audit_time（审核完成时间,格式:"yyyy-MM-dd HH:mm:ss"）
------示例-------
{reason="堵车耽误";answer="不能退改签";status="1";refund_ticket_money="25000";refund_insurer_money="2000";ticket_no="880-012345678";pnr="NWWW2G";passenger_name="张四";dep_airport="PEK";arr_airport="CAN";airline_code="CZ";trip_type="0";trip_segment="1";ticket_price=50000;fees=2500;batch_no="batch-no-12345";submit_time="2011-11-11 11:11:11"; audit_time="2011-11-11 11:12:13"},{...}
	 **/
	private $refundTickets;
	
	private $apiParas = array();
	
	public function setBookCode($bookCode)
	{
		$this->bookCode = $bookCode;
		$this->apiParas["book_code"] = $bookCode;
	}

	public function getBookCode()
	{
		return $this->bookCode;
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

	public function setRefundTickets($refundTickets)
	{
		$this->refundTickets = $refundTickets;
		$this->apiParas["refund_tickets"] = $refundTickets;
	}

	public function getRefundTickets()
	{
		return $this->refundTickets;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.ticket.refund.ka.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookCode,"bookCode");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->refundTickets,"refundTickets");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
