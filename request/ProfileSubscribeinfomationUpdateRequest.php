<?php
/**
 * TOP API: taobao.profile.subscribeinfomation.update request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class ProfileSubscribeinfomationUpdateRequest
{
	/** 
	 * 用户操作（现在提供订阅和续订操作）的标志位，用于说明是用户要进行的操作
open为订阅，keep为续订
	 **/
	private $flagParameter;
	
	/** 
	 * 用户订阅或者续订的月份数（1个月=30天）
	 **/
	private $monthCount;
	
	private $apiParas = array();
	
	public function setFlagParameter($flagParameter)
	{
		$this->flagParameter = $flagParameter;
		$this->apiParas["flag_parameter"] = $flagParameter;
	}

	public function getFlagParameter()
	{
		return $this->flagParameter;
	}

	public function setMonthCount($monthCount)
	{
		$this->monthCount = $monthCount;
		$this->apiParas["month_count"] = $monthCount;
	}

	public function getMonthCount()
	{
		return $this->monthCount;
	}

	public function getApiMethodName()
	{
		return "taobao.profile.subscribeinfomation.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->flagParameter,"flagParameter");
		RequestCheckUtil::checkNotNull($this->monthCount,"monthCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
