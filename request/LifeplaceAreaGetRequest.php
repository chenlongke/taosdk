<?php
/**
 * TOP API: taobao.lifeplace.area.get request
 * 
 * @author auto create
 * @since 1.0, 2012-09-11 00:00:00
 */
class LifeplaceAreaGetRequest
{
	/** 
	 * 区域id
	 **/
	private $areaId;
	
	private $apiParas = array();
	
	public function setAreaId($areaId)
	{
		$this->areaId = $areaId;
		$this->apiParas["area_id"] = $areaId;
	}

	public function getAreaId()
	{
		return $this->areaId;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.area.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->areaId,"areaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
