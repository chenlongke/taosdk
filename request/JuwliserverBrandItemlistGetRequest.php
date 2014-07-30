<?php
/**
 * TOP API: taobao.juwliserver.brand.itemlist.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-02 00:00:00
 */
class JuwliserverBrandItemlistGetRequest
{
	/** 
	 * 客户端请求类型，ios：0，adroid：1， wap：3
	 **/
	private $requestType;
	
	private $apiParas = array();
	
	public function setRequestType($requestType)
	{
		$this->requestType = $requestType;
		$this->apiParas["request_type"] = $requestType;
	}

	public function getRequestType()
	{
		return $this->requestType;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.brand.itemlist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->requestType,"requestType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
