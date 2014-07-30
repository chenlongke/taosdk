<?php
/**
 * TOP API: taobao.vmarket.taoma.beforeconsume request
 * 
 * @author auto create
 * @since 1.0, 2014-03-26 00:00:00
 */
class VmarketTaomaBeforeconsumeRequest
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
	 * 操作人id
	 **/
	private $operatorId;
	
	/** 
	 * 用户所购商品总价格
	 **/
	private $totalPrice;
	
	/** 
	 * 需要验的码
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

	public function setOperatorId($operatorId)
	{
		$this->operatorId = $operatorId;
		$this->apiParas["operator_id"] = $operatorId;
	}

	public function getOperatorId()
	{
		return $this->operatorId;
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
		return "taobao.vmarket.taoma.beforeconsume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkMinValue($this->totalPrice,0,"totalPrice");
		RequestCheckUtil::checkNotNull($this->verifyCode,"verifyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
