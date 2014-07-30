<?php
/**
 * TOP API: taobao.logistics.ordertrace.search request
 * 
 * @author auto create
 * @since 1.0, 2012-10-15 00:00:00
 */
class LogisticsOrdertraceSearchRequest
{
	/** 
	 * 物流订单号(OrderId)
	 **/
	private $oid;
	
	private $apiParas = array();
	
	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.ordertrace.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oid,"oid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
