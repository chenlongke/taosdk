<?php
/**
 * TOP API: taobao.jipiao.ticket.modify.ka.add request
 * 
 * @author auto create
 * @since 1.0, 2012-06-13 00:00:00
 */
class JipiaoTicketModifyKaAddRequest
{
	/** 
	 * 订单外部唯一标识
	 **/
	private $bookCode;
	
	/** 
	 * 改签列表，多条用半角逗号分隔，单条信息json格式，包括：reason（改签原因）;answer（公司答复）;status（1:待处理，2:接受，3:拒绝，4:失败，5:退票成功）;ticket_no（新票号）; pnr（订座记录）;  old_ticket_no（老票号）;passenger_name（乘机人姓名）; passenger_ctype（0：身份证，1：护照，2：学生证，3：军人证，4：回乡证，5：台胞证，6：港澳台胞，7：国际海员，8：外国人永久居留证，9：其他）; passenger_cno（证件号码）; passenger_birthday（乘机人生日:yyyy-MM-dd）;airline_code（承运人）;  flight_no（航班号）;cabin_no（舱位）;dep_airport（起飞机场）; arr_airport（到达机场）; dep_time（航班起飞时间,格式:"yyyy-MM-dd HH:mm"）; arr_time（航班到达时间,格式:"yyyy-MM-dd HH:mm"）; trip_type（航程类型:0:单程，2:往返），trip_segment（1:去程,2:回程）; ticket_price（票价:分）; fees（总费用:分）; batch_no（外部唯一批次号）; submit_time（首次提交时间,格式:"yyyy-MM-dd HH:mm:ss"）; audit_time（审核完成时间,格式:"yyyy-MM-dd HH:mm:ss"） ---示例---{reason="天气大雾";answer="同意";status="1";ticket_no="880-0123456789";pnr="KNWWWG";old_ticket_no="880-1123456789";passenger_name="张三";passenger_ctype="0";passenger_cno="110220198002021234";passenger_birthday="1980-11-12";airline_code="CZ";flight_no="CZ3999";cabin_no="A";dep_airport="CAN";arr_airport="PEK";dep_time="2011-11-11 16:00";arr_time="2011-11-11 19:15";trip_type="1";trip_segment="2";ticket_price="160000";fees="1000";batch_no="batch-20111002012";submit_time="2011-11-11 11:11:11";audit_time="2011-11-11 11:15:23"},{...}
	 **/
	private $modifyTickets;
	
	/** 
	 * 淘宝订单号：102030456
	 **/
	private $orderId;
	
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

	public function setModifyTickets($modifyTickets)
	{
		$this->modifyTickets = $modifyTickets;
		$this->apiParas["modify_tickets"] = $modifyTickets;
	}

	public function getModifyTickets()
	{
		return $this->modifyTickets;
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

	public function getApiMethodName()
	{
		return "taobao.jipiao.ticket.modify.ka.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookCode,"bookCode");
		RequestCheckUtil::checkNotNull($this->modifyTickets,"modifyTickets");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
