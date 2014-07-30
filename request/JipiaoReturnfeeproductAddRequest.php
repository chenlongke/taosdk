<?php
/**
 * TOP API: taobao.jipiao.returnfeeproduct.add request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoReturnfeeproductAddRequest
{
	/** 
	 * 航空公司二字码，必须大写
	 **/
	private $airline;
	
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
	 * 出发机场三字码，必须大写
	 **/
	private $depAirport;
	
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
	 * 让利产品的让利金额规则，有%号则对应的舱位的价格以百分比让利
	 **/
	private $returnFeeRule;
	
	private $apiParas = array();
	
	public function setAirline($airline)
	{
		$this->airline = $airline;
		$this->apiParas["airline"] = $airline;
	}

	public function getAirline()
	{
		return $this->airline;
	}

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

	public function setDepAirport($depAirport)
	{
		$this->depAirport = $depAirport;
		$this->apiParas["dep_airport"] = $depAirport;
	}

	public function getDepAirport()
	{
		return $this->depAirport;
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

	public function setReturnFeeRule($returnFeeRule)
	{
		$this->returnFeeRule = $returnFeeRule;
		$this->apiParas["return_fee_rule"] = $returnFeeRule;
	}

	public function getReturnFeeRule()
	{
		return $this->returnFeeRule;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.returnfeeproduct.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->airline,"airline");
		RequestCheckUtil::checkMaxLength($this->airline,2,"airline");
		RequestCheckUtil::checkNotNull($this->arrAirport,"arrAirport");
		RequestCheckUtil::checkMaxLength($this->arrAirport,3,"arrAirport");
		RequestCheckUtil::checkNotNull($this->depAirport,"depAirport");
		RequestCheckUtil::checkMaxLength($this->depAirport,3,"depAirport");
		RequestCheckUtil::checkNotNull($this->depBeginDate,"depBeginDate");
		RequestCheckUtil::checkNotNull($this->depEndDate,"depEndDate");
		RequestCheckUtil::checkMaxLength($this->memo,250,"memo");
		RequestCheckUtil::checkNotNull($this->outProductId,"outProductId");
		RequestCheckUtil::checkMaxLength($this->outProductId,64,"outProductId");
		RequestCheckUtil::checkNotNull($this->returnFeeRule,"returnFeeRule");
		RequestCheckUtil::checkMaxLength($this->returnFeeRule,200,"returnFeeRule");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
