<?php
/**
 * TOP API: taobao.lz.diagnose.getpeakuv request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class LzDiagnoseGetpeakuvRequest
{
	/** 
	 * 日期格式：dddd-dd-dd day=2012-08-24
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
		return "taobao.lz.diagnose.getpeakuv";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->day,"day");
		RequestCheckUtil::checkMaxLength($this->day,10,"day");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
