<?php
/**
 * TOP API: taobao.elink.logi.order.send request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkLogiOrderSendRequest
{
	/** 
	 * 物流订单ID
	 **/
	private $id;
	
	/** 
	 * 物流公司名称
	 **/
	private $logisticsCompanyName;
	
	/** 
	 * 物流公司编码(物流公司名称)
	 **/
	private $logistictsCode;
	
	/** 
	 * 实际运费
	 **/
	private $realFreight;
	
	/** 
	 * 卖家所在地国家公布的标准地区码
	 **/
	private $sellerAreaId;
	
	/** 
	 * 发件人地址
	 **/
	private $senderAddress;
	
	/** 
	 * 发件人Ip
	 **/
	private $senderIp;
	
	/** 
	 * 发件人邮件
	 **/
	private $senderMail;
	
	/** 
	 * 发件人姓名
	 **/
	private $senderName;
	
	/** 
	 * 发件人电话
	 **/
	private $senderPhone;
	
	/** 
	 * 发件人旺旺
	 **/
	private $senderWangwang;
	
	/** 
	 * 发件人邮编
	 **/
	private $senderZip;
	
	/** 
	 * 物流订单运输方式
	 **/
	private $shippingType;
	
	/** 
	 * 物流运单号
	 **/
	private $tmsCode;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setLogisticsCompanyName($logisticsCompanyName)
	{
		$this->logisticsCompanyName = $logisticsCompanyName;
		$this->apiParas["logistics_company_name"] = $logisticsCompanyName;
	}

	public function getLogisticsCompanyName()
	{
		return $this->logisticsCompanyName;
	}

	public function setLogistictsCode($logistictsCode)
	{
		$this->logistictsCode = $logistictsCode;
		$this->apiParas["logisticts_code"] = $logistictsCode;
	}

	public function getLogistictsCode()
	{
		return $this->logistictsCode;
	}

	public function setRealFreight($realFreight)
	{
		$this->realFreight = $realFreight;
		$this->apiParas["real_freight"] = $realFreight;
	}

	public function getRealFreight()
	{
		return $this->realFreight;
	}

	public function setSellerAreaId($sellerAreaId)
	{
		$this->sellerAreaId = $sellerAreaId;
		$this->apiParas["seller_area_id"] = $sellerAreaId;
	}

	public function getSellerAreaId()
	{
		return $this->sellerAreaId;
	}

	public function setSenderAddress($senderAddress)
	{
		$this->senderAddress = $senderAddress;
		$this->apiParas["sender_address"] = $senderAddress;
	}

	public function getSenderAddress()
	{
		return $this->senderAddress;
	}

	public function setSenderIp($senderIp)
	{
		$this->senderIp = $senderIp;
		$this->apiParas["sender_ip"] = $senderIp;
	}

	public function getSenderIp()
	{
		return $this->senderIp;
	}

	public function setSenderMail($senderMail)
	{
		$this->senderMail = $senderMail;
		$this->apiParas["sender_mail"] = $senderMail;
	}

	public function getSenderMail()
	{
		return $this->senderMail;
	}

	public function setSenderName($senderName)
	{
		$this->senderName = $senderName;
		$this->apiParas["sender_name"] = $senderName;
	}

	public function getSenderName()
	{
		return $this->senderName;
	}

	public function setSenderPhone($senderPhone)
	{
		$this->senderPhone = $senderPhone;
		$this->apiParas["sender_phone"] = $senderPhone;
	}

	public function getSenderPhone()
	{
		return $this->senderPhone;
	}

	public function setSenderWangwang($senderWangwang)
	{
		$this->senderWangwang = $senderWangwang;
		$this->apiParas["sender_wangwang"] = $senderWangwang;
	}

	public function getSenderWangwang()
	{
		return $this->senderWangwang;
	}

	public function setSenderZip($senderZip)
	{
		$this->senderZip = $senderZip;
		$this->apiParas["sender_zip"] = $senderZip;
	}

	public function getSenderZip()
	{
		return $this->senderZip;
	}

	public function setShippingType($shippingType)
	{
		$this->shippingType = $shippingType;
		$this->apiParas["shipping_type"] = $shippingType;
	}

	public function getShippingType()
	{
		return $this->shippingType;
	}

	public function setTmsCode($tmsCode)
	{
		$this->tmsCode = $tmsCode;
		$this->apiParas["tms_code"] = $tmsCode;
	}

	public function getTmsCode()
	{
		return $this->tmsCode;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.logi.order.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->logistictsCode,"logistictsCode");
		RequestCheckUtil::checkMaxLength($this->logistictsCode,64,"logistictsCode");
		RequestCheckUtil::checkMaxLength($this->senderAddress,255,"senderAddress");
		RequestCheckUtil::checkMaxLength($this->senderIp,16,"senderIp");
		RequestCheckUtil::checkMaxLength($this->senderMail,64,"senderMail");
		RequestCheckUtil::checkMaxLength($this->senderName,32,"senderName");
		RequestCheckUtil::checkMaxLength($this->senderPhone,32,"senderPhone");
		RequestCheckUtil::checkMaxLength($this->senderWangwang,32,"senderWangwang");
		RequestCheckUtil::checkMaxLength($this->senderZip,16,"senderZip");
		RequestCheckUtil::checkNotNull($this->tmsCode,"tmsCode");
		RequestCheckUtil::checkMaxLength($this->tmsCode,64,"tmsCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
