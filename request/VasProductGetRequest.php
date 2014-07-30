<?php
/**
 * TOP API: taobao.vas.product.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class VasProductGetRequest
{
	/** 
	 * 产品订购ID
	 **/
	private $subProdId;
	
	private $apiParas = array();
	
	public function setSubProdId($subProdId)
	{
		$this->subProdId = $subProdId;
		$this->apiParas["sub_prod_id"] = $subProdId;
	}

	public function getSubProdId()
	{
		return $this->subProdId;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.product.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->subProdId,"subProdId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
