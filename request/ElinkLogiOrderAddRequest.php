<?php
/**
 * TOP API: taobao.elink.logi.order.add request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkLogiOrderAddRequest
{
	/** 
	 * 支付宝交易号
	 **/
	private $alipayNo;
	
	/** 
	 * 外部交易号
	 **/
	private $bizTradeNo;
	
	/** 
	 * 买家淘宝ID
	 **/
	private $buyerId;
	
	/** 
	 * 买家留言
	 **/
	private $buyerMsg;
	
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 运费
	 **/
	private $freight;
	
	/** 
	 * 发票抬头
	 **/
	private $invoiceTitle;
	
	/** 
	 * 物流订单商品信息JSON对象
	 **/
	private $logisticsOrderItemJson;
	
	/** 
	 * 物流单来源 1.采购交易、2.大库共享交易
	 **/
	private $logisticsOrderSource;
	
	/** 
	 * 物流父订单编号
	 **/
	private $parentId;
	
	/** 
	 * 付款时间
	 **/
	private $payTime;
	
	/** 
	 * 收件人地址
	 **/
	private $receiverAddress;
	
	/** 
	 * 收件人城市
	 **/
	private $receiverCity;
	
	/** 
	 * 收件所在地区
	 **/
	private $receiverDistrict;
	
	/** 
	 * 收件人邮件
	 **/
	private $receiverMail;
	
	/** 
	 * 收件人电话
	 **/
	private $receiverMobilePhone;
	
	/** 
	 * 收件人姓名
	 **/
	private $receiverName;
	
	/** 
	 * 收件人省份
	 **/
	private $receiverProvince;
	
	/** 
	 * 收件人固定电话
	 **/
	private $receiverTelephone;
	
	/** 
	 * 收件人旺旺
	 **/
	private $receiverWangwang;
	
	/** 
	 * 收件人邮编
	 **/
	private $receiverZip;
	
	/** 
	 * 买家淘宝ID
	 **/
	private $sellerId;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 物流运送方式
	 **/
	private $shippingType;
	
	/** 
	 * 供货商昵称
	 **/
	private $supplierNick;
	
	/** 
	 * 交易类型列表，同时查询多种交易类型可用逗号分隔。默认同时查询guarantee_trade, auto_delivery, ec, cod的4种交易类型的数据 可选值 fixed(一口价) auction(拍卖) guarantee_trade(一口价、拍卖) auto_delivery(自动发货) independent_simple_trade(旺店入门版交易) independent_shop_trade(旺店标准版交易) ec(直冲) cod(货到付款) fenxiao(分销) game_equipment(游戏装备) shopex_trade(ShopEX交易) netcn_trade(万网交易) external_trade(统一外部交易)
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setAlipayNo($alipayNo)
	{
		$this->alipayNo = $alipayNo;
		$this->apiParas["alipay_no"] = $alipayNo;
	}

	public function getAlipayNo()
	{
		return $this->alipayNo;
	}

	public function setBizTradeNo($bizTradeNo)
	{
		$this->bizTradeNo = $bizTradeNo;
		$this->apiParas["biz_trade_no"] = $bizTradeNo;
	}

	public function getBizTradeNo()
	{
		return $this->bizTradeNo;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setBuyerMsg($buyerMsg)
	{
		$this->buyerMsg = $buyerMsg;
		$this->apiParas["buyer_msg"] = $buyerMsg;
	}

	public function getBuyerMsg()
	{
		return $this->buyerMsg;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setFreight($freight)
	{
		$this->freight = $freight;
		$this->apiParas["freight"] = $freight;
	}

	public function getFreight()
	{
		return $this->freight;
	}

	public function setInvoiceTitle($invoiceTitle)
	{
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParas["invoice_title"] = $invoiceTitle;
	}

	public function getInvoiceTitle()
	{
		return $this->invoiceTitle;
	}

	public function setLogisticsOrderItemJson($logisticsOrderItemJson)
	{
		$this->logisticsOrderItemJson = $logisticsOrderItemJson;
		$this->apiParas["logistics_order_item_json"] = $logisticsOrderItemJson;
	}

	public function getLogisticsOrderItemJson()
	{
		return $this->logisticsOrderItemJson;
	}

	public function setLogisticsOrderSource($logisticsOrderSource)
	{
		$this->logisticsOrderSource = $logisticsOrderSource;
		$this->apiParas["logistics_order_source"] = $logisticsOrderSource;
	}

	public function getLogisticsOrderSource()
	{
		return $this->logisticsOrderSource;
	}

	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
		$this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

	public function setPayTime($payTime)
	{
		$this->payTime = $payTime;
		$this->apiParas["pay_time"] = $payTime;
	}

	public function getPayTime()
	{
		return $this->payTime;
	}

	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setReceiverCity($receiverCity)
	{
		$this->receiverCity = $receiverCity;
		$this->apiParas["receiver_city"] = $receiverCity;
	}

	public function getReceiverCity()
	{
		return $this->receiverCity;
	}

	public function setReceiverDistrict($receiverDistrict)
	{
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParas["receiver_district"] = $receiverDistrict;
	}

	public function getReceiverDistrict()
	{
		return $this->receiverDistrict;
	}

	public function setReceiverMail($receiverMail)
	{
		$this->receiverMail = $receiverMail;
		$this->apiParas["receiver_mail"] = $receiverMail;
	}

	public function getReceiverMail()
	{
		return $this->receiverMail;
	}

	public function setReceiverMobilePhone($receiverMobilePhone)
	{
		$this->receiverMobilePhone = $receiverMobilePhone;
		$this->apiParas["receiver_mobile_phone"] = $receiverMobilePhone;
	}

	public function getReceiverMobilePhone()
	{
		return $this->receiverMobilePhone;
	}

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setReceiverProvince($receiverProvince)
	{
		$this->receiverProvince = $receiverProvince;
		$this->apiParas["receiver_province"] = $receiverProvince;
	}

	public function getReceiverProvince()
	{
		return $this->receiverProvince;
	}

	public function setReceiverTelephone($receiverTelephone)
	{
		$this->receiverTelephone = $receiverTelephone;
		$this->apiParas["receiver_telephone"] = $receiverTelephone;
	}

	public function getReceiverTelephone()
	{
		return $this->receiverTelephone;
	}

	public function setReceiverWangwang($receiverWangwang)
	{
		$this->receiverWangwang = $receiverWangwang;
		$this->apiParas["receiver_wangwang"] = $receiverWangwang;
	}

	public function getReceiverWangwang()
	{
		return $this->receiverWangwang;
	}

	public function setReceiverZip($receiverZip)
	{
		$this->receiverZip = $receiverZip;
		$this->apiParas["receiver_zip"] = $receiverZip;
	}

	public function getReceiverZip()
	{
		return $this->receiverZip;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
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

	public function setSupplierNick($supplierNick)
	{
		$this->supplierNick = $supplierNick;
		$this->apiParas["supplier_nick"] = $supplierNick;
	}

	public function getSupplierNick()
	{
		return $this->supplierNick;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.logi.order.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayNo,"alipayNo");
		RequestCheckUtil::checkMaxLength($this->alipayNo,64,"alipayNo");
		RequestCheckUtil::checkNotNull($this->bizTradeNo,"bizTradeNo");
		RequestCheckUtil::checkMaxLength($this->bizTradeNo,64,"bizTradeNo");
		RequestCheckUtil::checkMaxLength($this->buyerMsg,255,"buyerMsg");
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkMaxLength($this->buyerNick,32,"buyerNick");
		RequestCheckUtil::checkMaxLength($this->invoiceTitle,128,"invoiceTitle");
		RequestCheckUtil::checkNotNull($this->logisticsOrderItemJson,"logisticsOrderItemJson");
		RequestCheckUtil::checkMaxLength($this->logisticsOrderItemJson,4000,"logisticsOrderItemJson");
		RequestCheckUtil::checkNotNull($this->logisticsOrderSource,"logisticsOrderSource");
		RequestCheckUtil::checkNotNull($this->parentId,"parentId");
		RequestCheckUtil::checkMaxValue($this->parentId,9223372036854775807,"parentId");
		RequestCheckUtil::checkMinValue($this->parentId,-1,"parentId");
		RequestCheckUtil::checkNotNull($this->payTime,"payTime");
		RequestCheckUtil::checkNotNull($this->receiverAddress,"receiverAddress");
		RequestCheckUtil::checkMaxLength($this->receiverAddress,255,"receiverAddress");
		RequestCheckUtil::checkNotNull($this->receiverCity,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverCity,32,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverMail,64,"receiverMail");
		RequestCheckUtil::checkMaxLength($this->receiverMobilePhone,32,"receiverMobilePhone");
		RequestCheckUtil::checkNotNull($this->receiverName,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverName,32,"receiverName");
		RequestCheckUtil::checkNotNull($this->receiverProvince,"receiverProvince");
		RequestCheckUtil::checkMaxLength($this->receiverProvince,32,"receiverProvince");
		RequestCheckUtil::checkMaxLength($this->receiverWangwang,32,"receiverWangwang");
		RequestCheckUtil::checkMaxLength($this->receiverZip,16,"receiverZip");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkMaxLength($this->sellerNick,32,"sellerNick");
		RequestCheckUtil::checkNotNull($this->shippingType,"shippingType");
		RequestCheckUtil::checkMaxLength($this->shippingType,64,"shippingType");
		RequestCheckUtil::checkNotNull($this->supplierNick,"supplierNick");
		RequestCheckUtil::checkMaxLength($this->supplierNick,32,"supplierNick");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
