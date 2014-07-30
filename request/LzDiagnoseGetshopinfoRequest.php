<?php
/**
 * TOP API: taobao.lz.diagnose.getshopinfo request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class LzDiagnoseGetshopinfoRequest
{
	/** 
	 * 查询日期 dddd-dd-dd..dddd-dd-dd
days=2013-02-06..2013-02-19
	 **/
	private $days;
	
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

	public function getApiMethodName()
	{
		return "taobao.lz.diagnose.getshopinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->days,"days");
		RequestCheckUtil::checkMaxLength($this->days,22,"days");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
