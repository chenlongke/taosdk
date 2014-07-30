<?php
/**
 * TOP API: alipay.tools.key.get request
 * 
 * @author auto create
 * @since 1.0, 2013-03-13 00:00:00
 */
class AlipayToolsKeyGetRequest
{
	/** 
	 * 密钥键值
	 **/
	private $key;
	
	private $apiParas = array();
	
	public function setKey($key)
	{
		$this->key = $key;
		$this->apiParas["key"] = $key;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function getApiMethodName()
	{
		return "alipay.tools.key.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->key,"key");
		RequestCheckUtil::checkMaxLength($this->key,128,"key");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
