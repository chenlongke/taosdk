<?php
/**
 * TOP API: taobao.lz.st.gethour request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class LzStGethourRequest
{
	/** 
	 * 查询日期
	 **/
	private $day;
	
	/** 
	 * 小时值 取值[0-23]
	 **/
	private $hour;
	
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

	public function setHour($hour)
	{
		$this->hour = $hour;
		$this->apiParas["hour"] = $hour;
	}

	public function getHour()
	{
		return $this->hour;
	}

	public function getApiMethodName()
	{
		return "taobao.lz.st.gethour";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->day,"day");
		RequestCheckUtil::checkNotNull($this->hour,"hour");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
