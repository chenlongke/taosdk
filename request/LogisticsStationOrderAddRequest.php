<?php
/**
 * TOP API: taobao.logistics.station.order.add request
 * 
 * @author auto create
 * @since 1.0, 2013-08-27 00:00:00
 */
class LogisticsStationOrderAddRequest
{
	/** 
	 * 时间
	 **/
	private $arriveTime;
	
	/** 
	 * 物流公司ID
	 **/
	private $companyId;
	
	/** 
	 * 物流公司名称
	 **/
	private $companyName;
	
	/** 
	 * 订单状态日志
	 **/
	private $log;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 手机号
	 **/
	private $mobile;
	
	/** 
	 * 增加一个序列号
	 **/
	private $orderSeq;
	
	/** 
	 * 设置订单为部分提货
	 **/
	private $partPickup;
	
	/** 
	 * 取货密码
	 **/
	private $password;
	
	/** 
	 * 固定电话
	 **/
	private $phone;
	
	/** 
	 * 设置部分提货的订单，被提货的商品唯一编码
	 **/
	private $pickupGoodsIds;
	
	/** 
	 * 签收时间
	 **/
	private $pickupTime;
	
	/** 
	 * 收件人姓名
	 **/
	private $recName;
	
	/** 
	 * 代收订单ID
	 **/
	private $staOrderId;
	
	/** 
	 * 服务站的ID
	 **/
	private $stationId;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 淘宝用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setArriveTime($arriveTime)
	{
		$this->arriveTime = $arriveTime;
		$this->apiParas["arrive_time"] = $arriveTime;
	}

	public function getArriveTime()
	{
		return $this->arriveTime;
	}

	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
		$this->apiParas["company_id"] = $companyId;
	}

	public function getCompanyId()
	{
		return $this->companyId;
	}

	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
	}

	public function setLog($log)
	{
		$this->log = $log;
		$this->apiParas["log"] = $log;
	}

	public function getLog()
	{
		return $this->log;
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

	public function setOrderSeq($orderSeq)
	{
		$this->orderSeq = $orderSeq;
		$this->apiParas["order_seq"] = $orderSeq;
	}

	public function getOrderSeq()
	{
		return $this->orderSeq;
	}

	public function setPartPickup($partPickup)
	{
		$this->partPickup = $partPickup;
		$this->apiParas["part_pickup"] = $partPickup;
	}

	public function getPartPickup()
	{
		return $this->partPickup;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
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

	public function setPickupGoodsIds($pickupGoodsIds)
	{
		$this->pickupGoodsIds = $pickupGoodsIds;
		$this->apiParas["pickup_goods_ids"] = $pickupGoodsIds;
	}

	public function getPickupGoodsIds()
	{
		return $this->pickupGoodsIds;
	}

	public function setPickupTime($pickupTime)
	{
		$this->pickupTime = $pickupTime;
		$this->apiParas["pickup_time"] = $pickupTime;
	}

	public function getPickupTime()
	{
		return $this->pickupTime;
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

	public function setStaOrderId($staOrderId)
	{
		$this->staOrderId = $staOrderId;
		$this->apiParas["sta_order_id"] = $staOrderId;
	}

	public function getStaOrderId()
	{
		return $this->staOrderId;
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
		return "taobao.logistics.station.order.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->pickupGoodsIds,100,"pickupGoodsIds");
		RequestCheckUtil::checkMaxLength($this->pickupGoodsIds,100,"pickupGoodsIds");
		RequestCheckUtil::checkNotNull($this->stationId,"stationId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
