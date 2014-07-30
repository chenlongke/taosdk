<?php
/**
 * TOP API: tmall.tsin.xml.match request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class TmallTsinXmlMatchRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 入参字段信息
	 **/
	private $propvalues;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setPropvalues($propvalues)
	{
		$this->propvalues = $propvalues;
		$this->apiParas["propvalues"] = $propvalues;
	}

	public function getPropvalues()
	{
		return $this->propvalues;
	}

	public function getApiMethodName()
	{
		return "tmall.tsin.xml.match";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->propvalues,"propvalues");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
