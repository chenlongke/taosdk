<?php
/**
 * TOP API: taobao.trade.outcod.sendgoods request
 * 
 * @author auto create
 * @since 1.0, 2012-10-15 00:00:00
 */
class TradeOutcodSendgoodsRequest
{
	/** 
	 * 主订单编号（不支持子订单）
	 **/
	private $tid;
	
	private $apiParas = array();
	
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
		return "taobao.trade.outcod.sendgoods";
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
