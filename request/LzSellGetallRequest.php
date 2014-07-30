<?php
/**
 * TOP API: taobao.lz.sell.getall request
 * 
 * @author auto create
 * @since 1.0, 2014-01-09 00:00:00
 */
class LzSellGetallRequest
{
	/** 
	 * 查询日期 yyyy-MM-dd
	 **/
	private $days;
	
	/** 
	 * 时间类型 d（天）w（周）m（月）
	 **/
	private $dtype;
	
	private $apiParas = array();
	
	public function setDays($days)
	{
		$this->days = $days;
		$this->apiParas["days"] = $days;
	}

	public function getDays()
	{
		return $this->days;
	}

	public function setDtype($dtype)
	{
		$this->dtype = $dtype;
		$this->apiParas["dtype"] = $dtype;
	}

	public function getDtype()
	{
		return $this->dtype;
	}

	public function getApiMethodName()
	{
		return "taobao.lz.sell.getall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->days,"days");
		RequestCheckUtil::checkMaxLength($this->days,32,"days");
		RequestCheckUtil::checkNotNull($this->dtype,"dtype");
		RequestCheckUtil::checkMaxLength($this->dtype,1,"dtype");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
