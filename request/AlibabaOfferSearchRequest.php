<?php
/**
 * TOP API: alibaba.offer.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-04 00:00:00
 */
class AlibabaOfferSearchRequest
{
	/** 
	 * 查询的条件
	 **/
	private $queryOfferParam;
	
	private $apiParas = array();
	
	public function setQueryOfferParam($queryOfferParam)
	{
		$this->queryOfferParam = $queryOfferParam;
		$this->apiParas["query_offer_param"] = $queryOfferParam;
	}

	public function getQueryOfferParam()
	{
		return $this->queryOfferParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.offer.search";
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
