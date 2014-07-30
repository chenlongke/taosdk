<?php
/**
 * TOP API: taobao.elink.itemcats.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkItemcatsGetRequest
{
	/** 
	 * 品牌id
	 **/
	private $brandPid;
	
	private $apiParas = array();
	
	public function setBrandPid($brandPid)
	{
		$this->brandPid = $brandPid;
		$this->apiParas["brand_pid"] = $brandPid;
	}

	public function getBrandPid()
	{
		return $this->brandPid;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.itemcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->brandPid,"brandPid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
