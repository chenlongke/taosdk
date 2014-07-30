<?php
/**
 * TOP API: taobao.baike.medicialkey.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-16 00:00:00
 */
class BaikeMedicialkeyGetRequest
{
	/** 
	 * 国家医药的健字号名称
	 **/
	private $medicialKey;
	
	private $apiParas = array();
	
	public function setMedicialKey($medicialKey)
	{
		$this->medicialKey = $medicialKey;
		$this->apiParas["medicial_key"] = $medicialKey;
	}

	public function getMedicialKey()
	{
		return $this->medicialKey;
	}

	public function getApiMethodName()
	{
		return "taobao.baike.medicialkey.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->medicialKey,"medicialKey");
		RequestCheckUtil::checkMaxLength($this->medicialKey,100,"medicialKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
