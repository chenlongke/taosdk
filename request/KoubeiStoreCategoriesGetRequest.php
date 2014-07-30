<?php
/**
 * TOP API: taobao.koubei.store.categories.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class KoubeiStoreCategoriesGetRequest
{
	/** 
	 * 类目id，根类目id为0
	 **/
	private $cateId;
	
	private $apiParas = array();
	
	public function setCateId($cateId)
	{
		$this->cateId = $cateId;
		$this->apiParas["cate_id"] = $cateId;
	}

	public function getCateId()
	{
		return $this->cateId;
	}

	public function getApiMethodName()
	{
		return "taobao.koubei.store.categories.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cateId,"cateId");
		RequestCheckUtil::checkMaxValue($this->cateId,10000,"cateId");
		RequestCheckUtil::checkMinValue($this->cateId,0,"cateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
