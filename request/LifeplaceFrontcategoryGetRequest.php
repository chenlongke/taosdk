<?php
/**
 * TOP API: taobao.lifeplace.frontcategory.get request
 * 
 * @author auto create
 * @since 1.0, 2012-09-11 00:00:00
 */
class LifeplaceFrontcategoryGetRequest
{
	/** 
	 * 类目id
	 **/
	private $cId;
	
	private $apiParas = array();
	
	public function setcId($cId)
	{
		$this->cId = $cId;
		$this->apiParas["c_id"] = $cId;
	}

	public function getcId()
	{
		return $this->cId;
	}

	public function getApiMethodName()
	{
		return "taobao.lifeplace.frontcategory.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cId,"cId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
