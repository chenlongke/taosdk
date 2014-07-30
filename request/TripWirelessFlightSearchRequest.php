<?php
/**
 * TOP API: taobao.trip.wireless.flight.search request
 * 
 * @author auto create
 * @since 1.0, 2013-09-12 00:00:00
 */
class TripWirelessFlightSearchRequest
{
	/** 
	 * 到达城市三字码
	 **/
	private $arrCityCode;
	
	/** 
	 * 舱位等级，0，默认-全部；1，经济舱；2，商务舱；3，头等舱；4，头等和商务舱；5，经济和商务舱；6，经济和头等舱
	 **/
	private $cabinClassFilter;
	
	/** 
	 * 出发城市三字码
	 **/
	private $depCityCode;
	
	/** 
	 * 出发日期
	 **/
	private $depDate;
	
	/** 
	 * 提供行程单选项,值为0或不填写代表搜索全部,值为1代表搜索只提供行程单的产品价格
	 **/
	private $itineraryFilter;
	
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

	public function setCabinClassFilter($cabinClassFilter)
	{
		$this->cabinClassFilter = $cabinClassFilter;
		$this->apiParas["cabin_class_filter"] = $cabinClassFilter;
	}

	public function getCabinClassFilter()
	{
		return $this->cabinClassFilter;
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

	public function setItineraryFilter($itineraryFilter)
	{
		$this->itineraryFilter = $itineraryFilter;
		$this->apiParas["itinerary_filter"] = $itineraryFilter;
	}

	public function getItineraryFilter()
	{
		return $this->itineraryFilter;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.wireless.flight.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arrCityCode,"arrCityCode");
		RequestCheckUtil::checkNotNull($this->cabinClassFilter,"cabinClassFilter");
		RequestCheckUtil::checkNotNull($this->depCityCode,"depCityCode");
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkNotNull($this->itineraryFilter,"itineraryFilter");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
