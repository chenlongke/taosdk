<?php
/**
 * TOP API: taobao.lz.sellerworkspace.dailydata.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class LzSellerworkspaceDailydataGetRequest
{
	/** 
	 * 指明获取哪天的数据
	 **/
	private $day;
	
	private $apiParas = array();
	
	public function setDay($day)
	{
		$this->day = $day;
		$this->apiParas["day"] = $day;
	}

	public function getDay()
	{
		return $this->day;
	}

	public function getApiMethodName()
	{
		return "taobao.lz.sellerworkspace.dailydata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->day,"day");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
