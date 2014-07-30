<?php
/**
 * TOP API: taobao.elink.authorize.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkAuthorizeGetRequest
{
	/** 
	 * 品牌名称
	 **/
	private $brandName;
	
	private $apiParas = array();
	
	public function setBrandName($brandName)
	{
		$this->brandName = $brandName;
		$this->apiParas["brand_name"] = $brandName;
	}

	public function getBrandName()
	{
		return $this->brandName;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.authorize.get";
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
