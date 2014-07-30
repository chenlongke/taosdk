<?php
/**
 * TOP API: taobao.jipiao.specialproduct.update request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoSpecialproductUpdateRequest
{
	/** 
	 * 到达机场三字码，必须大写
	 **/
	private $arrAirport;
	
	/** 
	 * 是否支持自动HK
	 **/
	private $autoHk;
	
	/** 
	 * 舱位，必须是大写的字母或数字
	 **/
	private $cabin;
	
	/** 
	 * 提前购票天数。如果不用提前，此处不要填写
	 **/
	private $daysOfAdvance;
	
	/** 
	 * 去程特价开始日期
	 **/
	private $depBeginDate;
	
	/** 
	 * 去程特价截止日期
	 **/
	private $depEndDate;
	
	/** 
	 * 去程航班号（不填默认全航段）
	 **/
	private $depFlightNo;
	
	/** 
	 * 去程特价不生效的日期
	 **/
	private $excludeMonthDays;
	
	/** 
	 * 去程特价生效的星期
	 **/
	private $includeWeekDays;
	
	/** 
	 * 往返程时间间隔。不填表示不需要时间间隔；5-15表示回程比去程至少大于5天小于15天，3-0表示大于3天；0-5表示小于5天；4-4表示等于4天
	 **/
	private $intervalDays;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 外部产品号
	 **/
	private $outProductId;
	
	/** 
	 * 付款后在几小时内必须出票（单位小时），如果超过这个时间，订单会变成出票成功
	 **/
	private $overtimeAfterPay;
	
	/** 
	 * 在飞机起飞前几天必须出票（单位天），如果超过这个时间，订单会变成出票成功
	 **/
	private $overtimeBeforeDepart;
	
	/** 
	 * 价格，单位：分。至少100，即1元
	 **/
	private $price;
	
	/** 
	 * 回程特价开始日期
	 **/
	private $returnBeginDate;
	
	/** 
	 * 回程特价截止日期
	 **/
	private $returnEndDate;
	
	/** 
	 * 回程特价不生效的日期
	 **/
	private $returnExcludeMonthDays;
	
	/** 
	 * 回程航班号（不填默认全航段）
	 **/
	private $returnFlightNo;
	
	/** 
	 * 回程特价生效的星期
	 **/
	private $returnIncludeWeekDays;
	
	/** 
	 * 退改签规定
	 **/
	private $rulesAndRestrictions;
	
	/** 
	 * 可售票数
	 **/
	private $ticketAmount;
	
	private $apiParas = array();
	
	public function setArrAirport($arrAirport)
	{
		$this->arrAirport = $arrAirport;
		$this->apiParas["arr_airport"] = $arrAirport;
	}

	public function getArrAirport()
	{
		return $this->arrAirport;
	}

	public function setAutoHk($autoHk)
	{
		$this->autoHk = $autoHk;
		$this->apiParas["auto_hk"] = $autoHk;
	}

	public function getAutoHk()
	{
		return $this->autoHk;
	}

	public function setCabin($cabin)
	{
		$this->cabin = $cabin;
		$this->apiParas["cabin"] = $cabin;
	}

	public function getCabin()
	{
		return $this->cabin;
	}

	public function setDaysOfAdvance($daysOfAdvance)
	{
		$this->daysOfAdvance = $daysOfAdvance;
		$this->apiParas["days_of_advance"] = $daysOfAdvance;
	}

	public function getDaysOfAdvance()
	{
		return $this->daysOfAdvance;
	}

	public function setDepBeginDate($depBeginDate)
	{
		$this->depBeginDate = $depBeginDate;
		$this->apiParas["dep_begin_date"] = $depBeginDate;
	}

	public function getDepBeginDate()
	{
		return $this->depBeginDate;
	}

	public function setDepEndDate($depEndDate)
	{
		$this->depEndDate = $depEndDate;
		$this->apiParas["dep_end_date"] = $depEndDate;
	}

	public function getDepEndDate()
	{
		return $this->depEndDate;
	}

	public function setDepFlightNo($depFlightNo)
	{
		$this->depFlightNo = $depFlightNo;
		$this->apiParas["dep_flight_no"] = $depFlightNo;
	}

	public function getDepFlightNo()
	{
		return $this->depFlightNo;
	}

	public function setExcludeMonthDays($excludeMonthDays)
	{
		$this->excludeMonthDays = $excludeMonthDays;
		$this->apiParas["exclude_month_days"] = $excludeMonthDays;
	}

	public function getExcludeMonthDays()
	{
		return $this->excludeMonthDays;
	}

	public function setIncludeWeekDays($includeWeekDays)
	{
		$this->includeWeekDays = $includeWeekDays;
		$this->apiParas["include_week_days"] = $includeWeekDays;
	}

	public function getIncludeWeekDays()
	{
		return $this->includeWeekDays;
	}

	public function setIntervalDays($intervalDays)
	{
		$this->intervalDays = $intervalDays;
		$this->apiParas["interval_days"] = $intervalDays;
	}

	public function getIntervalDays()
	{
		return $this->intervalDays;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOutProductId($outProductId)
	{
		$this->outProductId = $outProductId;
		$this->apiParas["out_product_id"] = $outProductId;
	}

	public function getOutProductId()
	{
		return $this->outProductId;
	}

	public function setOvertimeAfterPay($overtimeAfterPay)
	{
		$this->overtimeAfterPay = $overtimeAfterPay;
		$this->apiParas["overtime_after_pay"] = $overtimeAfterPay;
	}

	public function getOvertimeAfterPay()
	{
		return $this->overtimeAfterPay;
	}

	public function setOvertimeBeforeDepart($overtimeBeforeDepart)
	{
		$this->overtimeBeforeDepart = $overtimeBeforeDepart;
		$this->apiParas["overtime_before_depart"] = $overtimeBeforeDepart;
	}

	public function getOvertimeBeforeDepart()
	{
		return $this->overtimeBeforeDepart;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setReturnBeginDate($returnBeginDate)
	{
		$this->returnBeginDate = $returnBeginDate;
		$this->apiParas["return_begin_date"] = $returnBeginDate;
	}

	public function getReturnBeginDate()
	{
		return $this->returnBeginDate;
	}

	public function setReturnEndDate($returnEndDate)
	{
		$this->returnEndDate = $returnEndDate;
		$this->apiParas["return_end_date"] = $returnEndDate;
	}

	public function getReturnEndDate()
	{
		return $this->returnEndDate;
	}

	public function setReturnExcludeMonthDays($returnExcludeMonthDays)
	{
		$this->returnExcludeMonthDays = $returnExcludeMonthDays;
		$this->apiParas["return_exclude_month_days"] = $returnExcludeMonthDays;
	}

	public function getReturnExcludeMonthDays()
	{
		return $this->returnExcludeMonthDays;
	}

	public function setReturnFlightNo($returnFlightNo)
	{
		$this->returnFlightNo = $returnFlightNo;
		$this->apiParas["return_flight_no"] = $returnFlightNo;
	}

	public function getReturnFlightNo()
	{
		return $this->returnFlightNo;
	}

	public function setReturnIncludeWeekDays($returnIncludeWeekDays)
	{
		$this->returnIncludeWeekDays = $returnIncludeWeekDays;
		$this->apiParas["return_include_week_days"] = $returnIncludeWeekDays;
	}

	public function getReturnIncludeWeekDays()
	{
		return $this->returnIncludeWeekDays;
	}

	public function setRulesAndRestrictions($rulesAndRestrictions)
	{
		$this->rulesAndRestrictions = $rulesAndRestrictions;
		$this->apiParas["rules_and_restrictions"] = $rulesAndRestrictions;
	}

	public function getRulesAndRestrictions()
	{
		return $this->rulesAndRestrictions;
	}

	public function setTicketAmount($ticketAmount)
	{
		$this->ticketAmount = $ticketAmount;
		$this->apiParas["ticket_amount"] = $ticketAmount;
	}

	public function getTicketAmount()
	{
		return $this->ticketAmount;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.specialproduct.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arrAirport,"arrAirport");
		RequestCheckUtil::checkMaxLength($this->arrAirport,3,"arrAirport");
		RequestCheckUtil::checkMinValue($this->daysOfAdvance,1,"daysOfAdvance");
		RequestCheckUtil::checkNotNull($this->depBeginDate,"depBeginDate");
		RequestCheckUtil::checkNotNull($this->depEndDate,"depEndDate");
		RequestCheckUtil::checkMaxLength($this->excludeMonthDays,100,"excludeMonthDays");
		RequestCheckUtil::checkMaxLength($this->includeWeekDays,7,"includeWeekDays");
		RequestCheckUtil::checkMaxLength($this->memo,250,"memo");
		RequestCheckUtil::checkNotNull($this->outProductId,"outProductId");
		RequestCheckUtil::checkMaxLength($this->outProductId,32,"outProductId");
		RequestCheckUtil::checkMinValue($this->overtimeAfterPay,1,"overtimeAfterPay");
		RequestCheckUtil::checkMinValue($this->overtimeBeforeDepart,1,"overtimeBeforeDepart");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkMinValue($this->price,100,"price");
		RequestCheckUtil::checkMaxLength($this->returnExcludeMonthDays,100,"returnExcludeMonthDays");
		RequestCheckUtil::checkMaxLength($this->returnIncludeWeekDays,7,"returnIncludeWeekDays");
		RequestCheckUtil::checkNotNull($this->rulesAndRestrictions,"rulesAndRestrictions");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
