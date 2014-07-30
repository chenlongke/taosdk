<?php
/**
 * TOP API: taobao.elearning.catalogs.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-14 00:00:00
 */
class ElearningCatalogsGetRequest
{
	/** 
	 * 课程分类id，若不填写，默认为0
	 **/
	private $catalogId;
	
	private $apiParas = array();
	
	public function setCatalogId($catalogId)
	{
		$this->catalogId = $catalogId;
		$this->apiParas["catalog_id"] = $catalogId;
	}

	public function getCatalogId()
	{
		return $this->catalogId;
	}

	public function getApiMethodName()
	{
		return "taobao.elearning.catalogs.get";
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
