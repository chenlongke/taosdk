<?php
/**
 * TOP API: taobao.trade.wtvertical.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class TradeWtverticalGetRequest
{
	/** 
	 * 主订单列表,用“，”分隔tid的字符串,最大列表长度为15
	 **/
	private $tids;
	
	private $apiParas = array();
	
	public function setTids($tids)
	{
		$this->tids = $tids;
		$this->apiParas["tids"] = $tids;
	}

	public function getTids()
	{
		return $this->tids;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.wtvertical.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tids,"tids");
		RequestCheckUtil::checkMaxListSize($this->tids,15,"tids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
