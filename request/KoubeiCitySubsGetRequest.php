<?php
/**
 * TOP API: taobao.koubei.city.subs.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiCitySubsGetRequest
{
	/** 
	 * 口碑的城市ID
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.koubei.city.subs.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMaxValue($this->id,10000,"id");
		RequestCheckUtil::checkMinValue($this->id,0,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
