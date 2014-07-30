<?php
/**
 * TOP API: taobao.trip.jipiao.search.get request
 * 
 * @author auto create
 * @since 1.0, 2012-09-10 00:00:00
 */
class TripJipiaoSearchGetRequest
{
	/** 
	 * 到达城市三字吗
	 **/
	private $arrCityCode;
	
	/** 
	 * 是否支持自动出票 1，自动出票； 0，全部；2，非自动出票；默认 0
	 **/
	private $autoBook;
	
	/** 
	 * 舱位等级，0，默认-全部；1，经济舱；2，商务舱；3，头等舱；4，头等和商务舱；5，经济和商务舱；6，经济和头等舱
	 **/
	private $cabinClass;
	
	/** 
	 * 出发城市三字吗
	 **/
	private $depCityCode;
	
	/** 
	 * 航班日期：格式要求 "yyyy-MM-dd"
	 **/
	private $depDate;
	
	/** 
	 * 指定航班号：获取指定航班低价舱位列表或者获取指定航班其它舱位折扣使用
	 **/
	private $flightNo;
	
	/** 
	 * 1-9分别表示乘机人数为1-9；乘机人数为1即相当无限制，默认值1
	 **/
	private $passengerNum;
	
	/** 
	 * 旗舰店标识，0，全部；1，旗舰店；2，非旗舰店；默认 0
	 **/
	private $qijian;
	
	/** 
	 * 搜索类型：支持三个类型，1. main，表示搜索航段最低价，每个航班一个最低价；2. button，表示搜索指定航班连续20最低价；3. other，表示搜索指定航班其它折扣的舱位数据
	 **/
	private $searchType;
	
	/** 
	 * 是否提供报销凭证(行程单),0.不提供和提供报销凭证的都查询出来,1.只查询提供报销凭证的
	 **/
	private $supplyItinerary;
	
	/** 
	 * 航程类型标识，0，单程搜索；1，往返搜索(暂不支持)
	 **/
	private $tripType;
	
	private $apiParas = array();
	
	public function setArrCityCode($arrCityCode)
	{
		$this->arrCityCode = $arrCityCode;
		$this->apiParas["arr_city_code"] = $arrCityCode;
	}

	public function getArrCityCode()
	{
		return $this->arrCityCode;
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

	public function setCabinClass($cabinClass)
	{
		$this->cabinClass = $cabinClass;
		$this->apiParas["cabin_class"] = $cabinClass;
	}

	public function getCabinClass()
	{
		return $this->cabinClass;
	}

	public function setDepCityCode($depCityCode)
	{
		$this->depCityCode = $depCityCode;
		$this->apiParas["dep_city_code"] = $depCityCode;
	}

	public function getDepCityCode()
	{
		return $this->depCityCode;
	}

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setFlightNo($flightNo)
	{
		$this->flightNo = $flightNo;
		$this->apiParas["flight_no"] = $flightNo;
	}

	public function getFlightNo()
	{
		return $this->flightNo;
	}

	public function setPassengerNum($passengerNum)
	{
		$this->passengerNum = $passengerNum;
		$this->apiParas["passenger_num"] = $passengerNum;
	}

	public function getPassengerNum()
	{
		return $this->passengerNum;
	}

	public function setQijian($qijian)
	{
		$this->qijian = $qijian;
		$this->apiParas["qijian"] = $qijian;
	}

	public function getQijian()
	{
		return $this->qijian;
	}

	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
	}

	public function setSupplyItinerary($supplyItinerary)
	{
		$this->supplyItinerary = $supplyItinerary;
		$this->apiParas["supply_itinerary"] = $supplyItinerary;
	}

	public function getSupplyItinerary()
	{
		return $this->supplyItinerary;
	}

	public function setTripType($tripType)
	{
		$this->tripType = $tripType;
		$this->apiParas["trip_type"] = $tripType;
	}

	public function getTripType()
	{
		return $this->tripType;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.search.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arrCityCode,"arrCityCode");
		RequestCheckUtil::checkMaxLength($this->arrCityCode,3,"arrCityCode");
		RequestCheckUtil::checkMaxValue($this->autoBook,2,"autoBook");
		RequestCheckUtil::checkMinValue($this->autoBook,0,"autoBook");
		RequestCheckUtil::checkMaxValue($this->cabinClass,6,"cabinClass");
		RequestCheckUtil::checkMinValue($this->cabinClass,0,"cabinClass");
		RequestCheckUtil::checkNotNull($this->depCityCode,"depCityCode");
		RequestCheckUtil::checkMaxLength($this->depCityCode,3,"depCityCode");
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkMaxLength($this->depDate,10,"depDate");
		RequestCheckUtil::checkMaxLength($this->flightNo,7,"flightNo");
		RequestCheckUtil::checkMaxValue($this->passengerNum,9,"passengerNum");
		RequestCheckUtil::checkMinValue($this->passengerNum,1,"passengerNum");
		RequestCheckUtil::checkMaxValue($this->qijian,2,"qijian");
		RequestCheckUtil::checkMinValue($this->qijian,0,"qijian");
		RequestCheckUtil::checkMaxLength($this->searchType,6,"searchType");
		RequestCheckUtil::checkMinValue($this->supplyItinerary,0,"supplyItinerary");
		RequestCheckUtil::checkMaxValue($this->tripType,1,"tripType");
		RequestCheckUtil::checkMinValue($this->tripType,0,"tripType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
