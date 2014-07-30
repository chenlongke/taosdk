<?php
/**
 * TOP API: taobao.ad.blacklist.get request
 * 
 * @author auto create
 * @since 1.0, 2013-08-28 00:00:00
 */
class AdBlacklistGetRequest
{
	/** 
	 * 直通车用户ID
	 **/
	private $custId;
	
	private $apiParas = array();
	
	public function setCustId($custId)
	{
		$this->custId = $custId;
		$this->apiParas["cust_id"] = $custId;
	}

	public function getCustId()
	{
		return $this->custId;
	}

	public function getApiMethodName()
	{
		return "taobao.ad.blacklist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->custId,"custId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
