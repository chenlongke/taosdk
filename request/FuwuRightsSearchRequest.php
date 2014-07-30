<?php
/**
 * TOP API: taobao.fuwu.rights.search request
 * 
 * @author auto create
 * @since 1.0, 2013-03-05 00:00:00
 */
class FuwuRightsSearchRequest
{
	/** 
	 * 业务状态值
参数列表及含义：
WAIT_SELLER_HANDING "等待卖家处理"
SELLER_REFUSE	"等待买家处理"
PROOFING "举证中"
XIAOER_INTER_PROOFING "淘宝介入举证中"
WAIT_SELLER_CONFIRM_ADDRESS "等待卖家确认退货地址"
WAIT_BUYER_RETURN "等待买家退货"
WAIT_SELLER_RECEIVE "等待卖家收货"
SELLER_REFUSE_RECEIVE "卖家拒绝收货"
WAIT_BUYER_FINISH "等待买家确认完成"
WAIT_SELLER_HANDING_PROOF "等待卖家处理举证"
XIAOER_INTER "淘宝已介入"
RIGHTS_SUCCESS "维权成立"
RIGHTS_FAILURE "维权不成立"
RIGHTS_CANCEL "维权撤销"
	 **/
	private $bizStatus;
	
	/** 
	 * 维权case编号信息，限定为16位长度
	 **/
	private $caseId;
	
	/** 
	 * 查询结束时间
	 **/
	private $endTime;
	
	/** 
	 * 查询开始时间
	 **/
	private $fromTime;
	
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 维权原因id
	 **/
	private $reasonId;
	
	/** 
	 * 维权要求id
参数列表及含义：
 REFUND "要求退款" PART_REFUND "不退货部分退款" RECEIVED_PAYOUT "已收到货，要求赔偿"	 NOT_RECEIVED_PAYOUT "已经退货，要求退款" TIME_OUT_RIGHTS "售后服务" RETREAT_ONE_LOSE_ONE "要求退一赔一" RETURN_REFUND "需要退货退款" REPLACE "要求换货 " WEIXIU "要求维修"
	 **/
	private $rqId;
	
	/** 
	 * 卖家的数字id信息
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setBizStatus($bizStatus)
	{
		$this->bizStatus = $bizStatus;
		$this->apiParas["biz_status"] = $bizStatus;
	}

	public function getBizStatus()
	{
		return $this->bizStatus;
	}

	public function setCaseId($caseId)
	{
		$this->caseId = $caseId;
		$this->apiParas["case_id"] = $caseId;
	}

	public function getCaseId()
	{
		return $this->caseId;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFromTime($fromTime)
	{
		$this->fromTime = $fromTime;
		$this->apiParas["from_time"] = $fromTime;
	}

	public function getFromTime()
	{
		return $this->fromTime;
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

	public function setReasonId($reasonId)
	{
		$this->reasonId = $reasonId;
		$this->apiParas["reason_id"] = $reasonId;
	}

	public function getReasonId()
	{
		return $this->reasonId;
	}

	public function setRqId($rqId)
	{
		$this->rqId = $rqId;
		$this->apiParas["rq_id"] = $rqId;
	}

	public function getRqId()
	{
		return $this->rqId;
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
		return "taobao.fuwu.rights.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
