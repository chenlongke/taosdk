<?php
/**
 * TOP API: taobao.promotion.grade.set request
 * 
 * @author auto create
 * @since 1.0, 2011-11-15 00:00:00
 */
class PromotionGradeSetRequest
{
	/** 
	 * 升级到下一个级别的需要的交易额.
以逗号分隔,普通会员为空直接输入","
例如
,100,200,300
	 **/
	private $amount;
	
	/** 
	 * 升级到下一个级别的需要的交易量,
以逗号分隔，普通会员为空直接输入","。
例如
,100,200,300
	 **/
	private $count;
	
	/** 
	 * 会员级别折扣率没有小数990代表9.9折.
折扣以逗号分隔。例如990,980,970,960
	 **/
	private $discount;
	
	/** 
	 * 会员等级。用逗号分隔。买家会员级别 general：普通会员 senior ：高级会员 vip：VIP会员 king：至尊VIP
	 **/
	private $grade;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
		$this->apiParas["discount"] = $discount;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.grade.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->amount,4,"amount");
		RequestCheckUtil::checkMaxListSize($this->count,4,"count");
		RequestCheckUtil::checkNotNull($this->discount,"discount");
		RequestCheckUtil::checkMaxListSize($this->discount,4,"discount");
		RequestCheckUtil::checkNotNull($this->grade,"grade");
		RequestCheckUtil::checkMaxListSize($this->grade,4,"grade");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
