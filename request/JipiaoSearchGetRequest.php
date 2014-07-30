<?php
/**
 * TOP API: taobao.jipiao.search.get request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoSearchGetRequest
{
	/** 
	 * 到达城市三字吗
	 **/
	private $arrCityCode;
	
	/** 
	 * 出发城市三字吗
	 **/
	private $depCityCode;
	
	/** 
	 * 航班日期：格式要求 "yyyy-MM-dd"
	 **/
	private $depDate;
	
	/** 
	 * 代理商列表，只获取某些代理商数据
	 **/
	private $sellerIds;
	
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

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setSellerIds($sellerIds)
	{
		$this->sellerIds = $sellerIds;
		$this->apiParas["seller_ids"] = $sellerIds;
	}

	public function getSellerIds()
	{
		return $this->sellerIds;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.search.get";
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
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkMaxLength($this->depDate,10,"depDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
