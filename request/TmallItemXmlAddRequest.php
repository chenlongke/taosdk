<?php
/**
 * TOP API: tmall.item.xml.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-27 00:00:00
 */
class TmallItemXmlAddRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 发布商品的TSIN，如果tmall.tsin.rule.match获取到得字段为空，这个参数传入0，否则需要通过tmall.tsin.xml.match查询到得可用tsin
	 **/
	private $tsinId;
	
	/** 
	 * 根据tmall.item.rule.add生成的商品发布规则入参数据
	 **/
	private $xmlData;
	
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

	public function setTsinId($tsinId)
	{
		$this->tsinId = $tsinId;
		$this->apiParas["tsin_id"] = $tsinId;
	}

	public function getTsinId()
	{
		return $this->tsinId;
	}

	public function setXmlData($xmlData)
	{
		$this->xmlData = $xmlData;
		$this->apiParas["xml_data"] = $xmlData;
	}

	public function getXmlData()
	{
		return $this->xmlData;
	}

	public function getApiMethodName()
	{
		return "tmall.item.xml.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->tsinId,"tsinId");
		RequestCheckUtil::checkNotNull($this->xmlData,"xmlData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
