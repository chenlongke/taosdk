<?php
/**
 * TOP API: taobao.trade.outcod.confirm request
 * 
 * @author auto create
 * @since 1.0, 2011-08-16 00:00:00
 */
class TradeOutcodConfirmRequest
{
	/** 
	 * 主订单编号（不支持关闭子订单）
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
		return "taobao.trade.outcod.confirm";
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
