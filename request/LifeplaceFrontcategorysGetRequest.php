<?php
/**
 * TOP API: taobao.lifeplace.frontcategorys.get request
 * 
 * @author auto create
 * @since 1.0, 2012-09-11 00:00:00
 */
class LifeplaceFrontcategorysGetRequest
{
	/** 
	 * 城市id
	 **/
	private $cityId;
	
	/** 
	 * 通过类目父id或者城市id获取前台类目列表
	 **/
	private $pId;
	
	private $apiParas = array();
	
	public function setCityId($cityId)
	{
		$this->cityId = $cityId;
		$this->apiParas["city_id"] = $cityId;
	}

	public function getCityId()
	{
		return $this->cityId;
	}

	public function setpId($pId)
	{
		$this->pId = $pId;
		$this->apiParas["p_id"] = $pId;
	}

	public function getpId()
	{
		return $this->pId;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.frontcategorys.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cityId,"cityId");
		RequestCheckUtil::checkNotNull($this->pId,"pId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
