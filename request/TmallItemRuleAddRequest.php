<?php
/**
 * TOP API: tmall.item.rule.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-27 00:00:00
 */
class TmallItemRuleAddRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 商品发布的目标tsinId
	 **/
	private $tsinId;
	
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

	public function getApiMethodName()
	{
		return "tmall.item.rule.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->tsinId,"tsinId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
