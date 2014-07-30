<?php
/**
 * TOP API: taobao.logistics.order.shengxian.confirm request
 * 
 * @author auto create
 * @since 1.0, 2014-02-25 00:00:00
 */
class LogisticsOrderShengxianConfirmRequest
{
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。<br><font color='red'>如果为空，取的卖家的默认退货地址</font><br>
	 **/
	private $cancelId;
	
	/** 
	 * 1：冷链。0：常温
	 **/
	private $deliveryType;
	
	/** 
	 * 采用service_code的地址发货，还是采用商家默认（sender_id）的地址发货，默认为商家地址发货。0为商家默认地址发货。1为仓库（service_code）地址发货。
	 **/
	private $isDefaultAddress;
	
	/** 
	 * 表明是否是拆单
1表示拆单
0表示不拆单，默认值0
	 **/
	private $isSplit;
	
	/** 
	 * 物流订单ID 。同淘宝交易订单互斥，淘宝交易号存在，，以淘宝交易号为准
	 **/
	private $logisId;
	
	/** 
	 * 运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入；
	 **/
	private $outSid;
	
	/** 
	 * 商家的IP地址
	 **/
	private $sellerIp;
	
	/** 
	 * 卖家联系人地址库ID，可以通过taobao.logistics.address.search接口查询到地址库ID。<font color='red'>如果为空，取的卖家的默认取货地址</font>
	 **/
	private $senderId;
	
	/** 
	 * 仓库的服务代码标示，代码一个仓库的实体。
	 **/
	private $serviceCode;
	
	/** 
	 * 需要拆单发货的子订单集合，为空表示不做拆单发货。
	 **/
	private $subTid;
	
	/** 
	 * 淘宝交易ID
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCancelId($cancelId)
	{
		$this->cancelId = $cancelId;
		$this->apiParas["cancel_id"] = $cancelId;
	}

	public function getCancelId()
	{
		return $this->cancelId;
	}

	public function setDeliveryType($deliveryType)
	{
		$this->deliveryType = $deliveryType;
		$this->apiParas["delivery_type"] = $deliveryType;
	}

	public function getDeliveryType()
	{
		return $this->deliveryType;
	}

	public function setIsDefaultAddress($isDefaultAddress)
	{
		$this->isDefaultAddress = $isDefaultAddress;
		$this->apiParas["is_default_address"] = $isDefaultAddress;
	}

	public function getIsDefaultAddress()
	{
		return $this->isDefaultAddress;
	}

	public function setIsSplit($isSplit)
	{
		$this->isSplit = $isSplit;
		$this->apiParas["is_split"] = $isSplit;
	}

	public function getIsSplit()
	{
		return $this->isSplit;
	}

	public function setLogisId($logisId)
	{
		$this->logisId = $logisId;
		$this->apiParas["logis_id"] = $logisId;
	}

	public function getLogisId()
	{
		return $this->logisId;
	}

	public function setOutSid($outSid)
	{
		$this->outSid = $outSid;
		$this->apiParas["out_sid"] = $outSid;
	}

	public function getOutSid()
	{
		return $this->outSid;
	}

	public function setSellerIp($sellerIp)
	{
		$this->sellerIp = $sellerIp;
		$this->apiParas["seller_ip"] = $sellerIp;
	}

	public function getSellerIp()
	{
		return $this->sellerIp;
	}

	public function setSenderId($senderId)
	{
		$this->senderId = $senderId;
		$this->apiParas["sender_id"] = $senderId;
	}

	public function getSenderId()
	{
		return $this->senderId;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setSubTid($subTid)
	{
		$this->subTid = $subTid;
		$this->apiParas["sub_tid"] = $subTid;
	}

	public function getSubTid()
	{
		return $this->subTid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.order.shengxian.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->logisId,1000,"logisId");
		RequestCheckUtil::checkNotNull($this->outSid,"outSid");
		RequestCheckUtil::checkMaxListSize($this->subTid,50,"subTid");
		RequestCheckUtil::checkMinValue($this->tid,1000,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
