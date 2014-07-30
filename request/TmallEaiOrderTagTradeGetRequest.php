<?php
/**
 * TOP API: tmall.eai.order.tag.trade.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-17 00:00:00
 */
class TmallEaiOrderTagTradeGetRequest
{
	/** 
	 * 交易子订单，oid不传时查主订单上的标签
	 **/
	private $oid;
	
	/** 
	 * 交易主单号
	 **/
	private $tid;
	
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

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "tmall.eai.order.tag.trade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
