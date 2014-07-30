<?php
/**
 * TOP API: taobao.jipiao.dynamic.get request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoDynamicGetRequest
{
	/** 
	 * dep_city_code需要同时提供，没有提供 flight_no 时，按城市代码对查询
	 **/
	private $arrCityCode;
	
	/** 
	 * arr_city_code需要同时提供，没有提供 flight_no 时，按城市代码对查询
	 **/
	private $depCityCode;
	
	/** 
	 * 提供了该参数时，按航班号查询，城市代码对参数也必须提供
	 **/
	private $flightNo;
	
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

	public function setDepCityCode($depCityCode)
	{
		$this->depCityCode = $depCityCode;
		$this->apiParas["dep_city_code"] = $depCityCode;
	}

	public function getDepCityCode()
	{
		return $this->depCityCode;
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

	public function getApiMethodName()
	{
		return "taobao.jipiao.dynamic.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arrCityCode,"arrCityCode");
		RequestCheckUtil::checkMaxLength($this->arrCityCode,3,"arrCityCode");
		RequestCheckUtil::checkNotNull($this->depCityCode,"depCityCode");
		RequestCheckUtil::checkMaxLength($this->depCityCode,3,"depCityCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
