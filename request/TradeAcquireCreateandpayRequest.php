<?php
/**
 * TOP API: taobao.trade.acquire.createandpay request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class TradeAcquireCreateandpayRequest
{
	/** 
	 * 条码信息，买家支付宝钱包条码下单时传递给商家条码；sound_wave与bar_code 必须二选一给出一个信息，如果两个信息都给出，将视作声波下单（目前条码下单处于开发阶段，未来数日之内会支持）
	 **/
	private $barCode;
	
	/** 
	 * 品牌价格（金额）列表，多个以用'θ'做分隔符
品牌价格（金额）必须是正整数，单位为分，最多50个元素
	 **/
	private $brandPrices;
	
	/** 
	 * 品牌列表,多个以用'θ'做分隔符，最多50个元素
	 **/
	private $brands;
	
	/** 
	 * 优惠券列表，不得超过50个优惠券，
单个优惠券码长度不超过64位的字符，
优惠券之间以θ做分割符
	 **/
	private $coupons;
	
	/** 
	 * 1:只记录优惠券信息
2:优惠券核销（目前不支持）
3:核销并在支付金额上扣除
（例子：订单金额=100，优惠10，买家支付宝上实际支付就是 90）
	 **/
	private $couponsConsume;
	
	/** 
	 * 订单描述（不超过255个字符）
	 **/
	private $desc;
	
	/** 
	 * 外部商品的唯一编码数组, 用'θ'做分隔符。
所有商品相关的信息外部商家都可不给出，
单个商品代码不超过64个字符，
未来最多传入50个商品的编码，【目前暂时最多支持传入一个商品的信息】
	 **/
	private $goodsCodes;
	
	/** 
	 * 外部商品名称列表，用'θ'做分隔符，
出现顺序以及个数与商品的编码一致，单个商品名称不超过64个字符，【目前暂时最多支持传入一个商品的信息】
	 **/
	private $goodsNames;
	
	/** 
	 * 外部商品价格,用'θ'做分隔符，出现顺序以及个数与商品的编码一致，不能出现小数，单位为人民币分,
单个商品价格是Number(11)的正整数，【目前暂时最多支持传入一个商品的信息】
	 **/
	private $goodsPrices;
	
	/** 
	 * 商品数量数组, 用'θ'做分隔符，出现顺序和商品编码一致，不能出现小数， 
单个商品数量int(11)，【目前暂时最多支持传入一个商品的信息】
	 **/
	private $goodsQuantities;
	
	/** 
	 * Mall商场的唯一编码，由淘宝分配
	 **/
	private $mallCode;
	
	/** 
	 * 卖家的操作员ID（不超过64个字符）
	 **/
	private $operatorId;
	
	/** 
	 * 外部商户订单号（不超过64个字符），需要商家保证其外部订单号唯一，否则下单/支付可能失败
	 **/
	private $outId;
	
	/** 
	 * 订单支付超时时间 1、根据事先设置好的一笔没有付款的交易的超时时间，一旦超时，该笔交易就会自动被关闭。2、设置范围：1m~15d  m-分钟，h-小时，d-天，1c -当天（无论何时创建，交易都在0点关闭）
	 **/
	private $payToc;
	
	/** 
	 * 小票号（不超过64个字符）,注意商家要保证唯一，如果商家系统无该信息，可传入与外部订单号一样的内容
	 **/
	private $receiptNo;
	
	/** 
	 * 品牌门店的唯一编码
	 **/
	private $shopCode;
	
	/** 
	 * 声波信息，买家支付宝钱包声波下单时传递给商家的声波串
	 **/
	private $soundWave;
	
	/** 
	 * 订单标题（不超过64个字符）；
如果不给出商品信息，订单标题作为商品名来下单；这里可传入第一个商品名作为订单标题
	 **/
	private $subject;
	
	/** 
	 * 订单金额,必须大于等于1的正整数，单位为人民币的分
	 **/
	private $totalFee;
	
	private $apiParas = array();
	
	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setBrandPrices($brandPrices)
	{
		$this->brandPrices = $brandPrices;
		$this->apiParas["brand_prices"] = $brandPrices;
	}

	public function getBrandPrices()
	{
		return $this->brandPrices;
	}

	public function setBrands($brands)
	{
		$this->brands = $brands;
		$this->apiParas["brands"] = $brands;
	}

	public function getBrands()
	{
		return $this->brands;
	}

	public function setCoupons($coupons)
	{
		$this->coupons = $coupons;
		$this->apiParas["coupons"] = $coupons;
	}

	public function getCoupons()
	{
		return $this->coupons;
	}

	public function setCouponsConsume($couponsConsume)
	{
		$this->couponsConsume = $couponsConsume;
		$this->apiParas["coupons_consume"] = $couponsConsume;
	}

	public function getCouponsConsume()
	{
		return $this->couponsConsume;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setGoodsCodes($goodsCodes)
	{
		$this->goodsCodes = $goodsCodes;
		$this->apiParas["goods_codes"] = $goodsCodes;
	}

	public function getGoodsCodes()
	{
		return $this->goodsCodes;
	}

	public function setGoodsNames($goodsNames)
	{
		$this->goodsNames = $goodsNames;
		$this->apiParas["goods_names"] = $goodsNames;
	}

	public function getGoodsNames()
	{
		return $this->goodsNames;
	}

	public function setGoodsPrices($goodsPrices)
	{
		$this->goodsPrices = $goodsPrices;
		$this->apiParas["goods_prices"] = $goodsPrices;
	}

	public function getGoodsPrices()
	{
		return $this->goodsPrices;
	}

	public function setGoodsQuantities($goodsQuantities)
	{
		$this->goodsQuantities = $goodsQuantities;
		$this->apiParas["goods_quantities"] = $goodsQuantities;
	}

	public function getGoodsQuantities()
	{
		return $this->goodsQuantities;
	}

	public function setMallCode($mallCode)
	{
		$this->mallCode = $mallCode;
		$this->apiParas["mall_code"] = $mallCode;
	}

	public function getMallCode()
	{
		return $this->mallCode;
	}

	public function setOperatorId($operatorId)
	{
		$this->operatorId = $operatorId;
		$this->apiParas["operator_id"] = $operatorId;
	}

	public function getOperatorId()
	{
		return $this->operatorId;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function setPayToc($payToc)
	{
		$this->payToc = $payToc;
		$this->apiParas["pay_toc"] = $payToc;
	}

	public function getPayToc()
	{
		return $this->payToc;
	}

	public function setReceiptNo($receiptNo)
	{
		$this->receiptNo = $receiptNo;
		$this->apiParas["receipt_no"] = $receiptNo;
	}

	public function getReceiptNo()
	{
		return $this->receiptNo;
	}

	public function setShopCode($shopCode)
	{
		$this->shopCode = $shopCode;
		$this->apiParas["shop_code"] = $shopCode;
	}

	public function getShopCode()
	{
		return $this->shopCode;
	}

	public function setSoundWave($soundWave)
	{
		$this->soundWave = $soundWave;
		$this->apiParas["sound_wave"] = $soundWave;
	}

	public function getSoundWave()
	{
		return $this->soundWave;
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
		$this->apiParas["subject"] = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setTotalFee($totalFee)
	{
		$this->totalFee = $totalFee;
		$this->apiParas["total_fee"] = $totalFee;
	}

	public function getTotalFee()
	{
		return $this->totalFee;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.acquire.createandpay";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->barCode,64,"barCode");
		RequestCheckUtil::checkMaxValue($this->couponsConsume,3,"couponsConsume");
		RequestCheckUtil::checkMaxLength($this->desc,255,"desc");
		RequestCheckUtil::checkNotNull($this->mallCode,"mallCode");
		RequestCheckUtil::checkMaxLength($this->mallCode,64,"mallCode");
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkMaxLength($this->operatorId,64,"operatorId");
		RequestCheckUtil::checkNotNull($this->outId,"outId");
		RequestCheckUtil::checkMaxLength($this->outId,64,"outId");
		RequestCheckUtil::checkNotNull($this->payToc,"payToc");
		RequestCheckUtil::checkMaxLength($this->payToc,6,"payToc");
		RequestCheckUtil::checkNotNull($this->receiptNo,"receiptNo");
		RequestCheckUtil::checkMaxLength($this->receiptNo,64,"receiptNo");
		RequestCheckUtil::checkMaxLength($this->shopCode,64,"shopCode");
		RequestCheckUtil::checkMaxLength($this->soundWave,64,"soundWave");
		RequestCheckUtil::checkNotNull($this->subject,"subject");
		RequestCheckUtil::checkMaxLength($this->subject,64,"subject");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
