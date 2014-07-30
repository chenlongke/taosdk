<?php
/**
 * TOP API: taobao.trade.confirmgoods request
 * 
 * @author auto create
 * @since 1.0, 2011-09-19 00:00:00
 */
class TradeConfirmgoodsRequest
{
	/** 
	 * 不需要确认收货的子订单序列，订单序列用','分隔，如果只有一笔订单则不需要分隔，如果没有子订单可以为空。
	 **/
	private $ignoreoids;
	
	/** 
	 * 确认收货的主订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setIgnoreoids($ignoreoids)
	{
		$this->ignoreoids = $ignoreoids;
		$this->apiParas["ignoreoids"] = $ignoreoids;
	}

	public function getIgnoreoids()
	{
		return $this->ignoreoids;
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
		return "taobao.trade.confirmgoods";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->ignoreoids,48,"ignoreoids");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
