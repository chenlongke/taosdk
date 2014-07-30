<?php
/**
 * TOP API: taobao.jipiao.specialpriceproduct.update request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoSpecialpriceproductUpdateRequest
{
	/** 
	 * 到达机场三字码，必须大写
	 **/
	private $arrAirport;
	
	/** 
	 * 是否支持自动出票
	 **/
	private $autoBook;
	
	/** 
	 * 是否支持自动HK
	 **/
	private $autoHk;
	
	/** 
	 * 舱位，必须是大写字母或者数字
	 **/
	private $cabin;
	
	/** 
	 * 提前购票天数
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
	 * office号
	 **/
	private $officeId;
	
	/** 
	 * 外部产品号
	 **/
	private $outProductId;
	
	/** 
	 * pat价格，单位：分
	 **/
	private $patPrice;
	
	/** 
	 * 价格，单位：分。至少为100，即1元
	 **/
	private $price;
	
	/** 
	 * 适用乘客类型，默认为0 0; 所有都适用 1; 仅适用于教师 2; 仅适用于学生 3; 仅适用于军人如果是适用于教师和学生则是“1,2”,以此类推
	 **/
	private $productRule;
	
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

	public function setAutoBook($autoBook)
	{
		$this->autoBook = $autoBook;
		$this->apiParas["auto_book"] = $autoBook;
	}

	public function getAutoBook()
	{
		return $this->autoBook;
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

	public function setOfficeId($officeId)
	{
		$this->officeId = $officeId;
		$this->apiParas["office_id"] = $officeId;
	}

	public function getOfficeId()
	{
		return $this->officeId;
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

	public function setPatPrice($patPrice)
	{
		$this->patPrice = $patPrice;
		$this->apiParas["pat_price"] = $patPrice;
	}

	public function getPatPrice()
	{
		return $this->patPrice;
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

	public function setProductRule($productRule)
	{
		$this->productRule = $productRule;
		$this->apiParas["product_rule"] = $productRule;
	}

	public function getProductRule()
	{
		return $this->productRule;
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

	public function getApiMethodName()
	{
		return "taobao.jipiao.specialpriceproduct.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arrAirport,"arrAirport");
		RequestCheckUtil::checkMaxLength($this->arrAirport,3,"arrAirport");
		RequestCheckUtil::checkNotNull($this->cabin,"cabin");
		RequestCheckUtil::checkMinValue($this->daysOfAdvance,1,"daysOfAdvance");
		RequestCheckUtil::checkNotNull($this->depBeginDate,"depBeginDate");
		RequestCheckUtil::checkNotNull($this->depEndDate,"depEndDate");
		RequestCheckUtil::checkMaxLength($this->excludeMonthDays,100,"excludeMonthDays");
		RequestCheckUtil::checkMaxLength($this->includeWeekDays,7,"includeWeekDays");
		RequestCheckUtil::checkMaxLength($this->memo,250,"memo");
		RequestCheckUtil::checkNotNull($this->outProductId,"outProductId");
		RequestCheckUtil::checkMaxLength($this->outProductId,32,"outProductId");
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
