<?php
/**
 * TOP API: taobao.juwliserver.schedule.issupport request
 * 
 * @author auto create
 * @since 1.0, 2012-10-31 00:00:00
 */
class JuwliserverScheduleIssupportRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.juwliserver.schedule.issupport";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
