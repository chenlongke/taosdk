<?php
/**
 * TOP API: taobao.jipiao.product.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoProductDeleteRequest
{
	/** 
	 * 外部产品号
	 **/
	private $outProductId;
	
	private $apiParas = array();
	
	public function setOutProductId($outProductId)
	{
		$this->outProductId = $outProductId;
		$this->apiParas["out_product_id"] = $outProductId;
	}

	public function getOutProductId()
	{
		return $this->outProductId;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.product.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outProductId,"outProductId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
