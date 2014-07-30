<?php
/**
 * TOP API: taobao.jipiao.order.ka.update request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoOrderKaUpdateRequest
{
	/** 
	 * 外部订单唯一标识,如:20110101234
	 **/
	private $bookCode;
	
	/** 
	 * 订单联系人信息，用json格式。联系人姓名：contact_name，联系人手机：contact_phone，联系人电话：contact_tel，联系人邮件：contact_email，联系人旺旺：contact_ww。------示例------order_contact:{"contact_name":"abaoo","contact_phone":"13901234567","contact_tel":"01068345678","contact_email":"a@a.com","contact_ww":"abaoo"}
	 **/
	private $orderContact;
	
	/** 
	 * 订单号,如:99001234
	 **/
	private $orderId;
	
	/** 
	 * 订单状态(310:ORDER_PNR_SUCCESS订座成功,330:ORDER_BUYER_CANCELLED买家取消,340:ORDER_SELLER_CANCELLED卖家取消,360:ORDER_PAY_SUCCESS支付成功,370:ORDER_TICKET_FAILED出票失败,380:ORDER_TICKET_SUCCESS出票成功
	 **/
	private $orderStatus;
	
	/** 
	 * 乘机人列表（按航段分），多条用半角逗号分隔，单条信息json格式，包括：passenger_name（乘机人姓名）; trip_type（航程类型，0:单程，1:往返）; trip_segment（航段，1:去程，2:回程）; ticket_no（票号:含-）; passenger_ctype（证件类型，0：身份证，1：护照，2：学生证，3：军人证，4：回乡证，5：台胞证，6：港澳台胞，7：国际海员，8：外国人永久居留证，9：其他）; passenger_cno（证件号码）; passenger_birthday（乘机人生日:yyyy-MM-dd）
------示例------
{passenger_name:"张三";trip_type:"0";trip_segment:"1";ticket_no:"880-012345678";passenger_ctype:"0";passenger_cno:"110220199010101234";passenger_birthday:"1990-10-10"},{...}
	 **/
	private $passengers;
	
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

	public function setOrderContact($orderContact)
	{
		$this->orderContact = $orderContact;
		$this->apiParas["order_contact"] = $orderContact;
	}

	public function getOrderContact()
	{
		return $this->orderContact;
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

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
	}

	public function setPassengers($passengers)
	{
		$this->passengers = $passengers;
		$this->apiParas["passengers"] = $passengers;
	}

	public function getPassengers()
	{
		return $this->passengers;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.order.ka.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookCode,"bookCode");
		RequestCheckUtil::checkMaxLength($this->orderContact,1000,"orderContact");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->orderStatus,"orderStatus");
		RequestCheckUtil::checkMaxLength($this->orderStatus,5,"orderStatus");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
