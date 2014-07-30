<?php
/**
 * TOP API: taobao.vmarket.taoma.consume request
 * 
 * @author auto create
 * @since 1.0, 2014-01-17 00:00:00
 */
class VmarketTaomaConsumeRequest
{
	/** 
	 * 品牌价格列表，多个以用'θ'做分隔符
价格必须是正整数，单位为分，最多50个元素
	 **/
	private $brandPrices;
	
	/** 
	 * 品牌列表,多个以用'θ'做分隔符，最多50个元素
	 **/
	private $brands;
	
	/** 
	 * 买家淘宝id
	 **/
	private $buyerId;
	
	/** 
	 * 核销份数
	 **/
	private $consumeNum;
	
	/** 
	 * 操作人ID ，机具编号
	 **/
	private $operatorId;
	
	/** 
	 * 订单相关的信息描述
	 **/
	private $orderInfos;
	
	/** 
	 * 自定义核销流水号，如果核销调用失败，可以用该核销流水号进行冲正操作，需要小于等于100个字符(a-zA-Z0-9_)
	 **/
	private $serialNum;
	
	/** 
	 * 用户所购商品总价格
	 **/
	private $totalPrice;
	
	/** 
	 * 核销的码
	 **/
	private $verifyCode;
	
	private $apiParas = array();
	
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

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setConsumeNum($consumeNum)
	{
		$this->consumeNum = $consumeNum;
		$this->apiParas["consume_num"] = $consumeNum;
	}

	public function getConsumeNum()
	{
		return $this->consumeNum;
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

	public function setOrderInfos($orderInfos)
	{
		$this->orderInfos = $orderInfos;
		$this->apiParas["order_infos"] = $orderInfos;
	}

	public function getOrderInfos()
	{
		return $this->orderInfos;
	}

	public function setSerialNum($serialNum)
	{
		$this->serialNum = $serialNum;
		$this->apiParas["serial_num"] = $serialNum;
	}

	public function getSerialNum()
	{
		return $this->serialNum;
	}

	public function setTotalPrice($totalPrice)
	{
		$this->totalPrice = $totalPrice;
		$this->apiParas["total_price"] = $totalPrice;
	}

	public function getTotalPrice()
	{
		return $this->totalPrice;
	}

	public function setVerifyCode($verifyCode)
	{
		$this->verifyCode = $verifyCode;
		$this->apiParas["verify_code"] = $verifyCode;
	}

	public function getVerifyCode()
	{
		return $this->verifyCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.taoma.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeNum,"consumeNum");
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkNotNull($this->serialNum,"serialNum");
		RequestCheckUtil::checkMinValue($this->totalPrice,0,"totalPrice");
		RequestCheckUtil::checkNotNull($this->verifyCode,"verifyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
