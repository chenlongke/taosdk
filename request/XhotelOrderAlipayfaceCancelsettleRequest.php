<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.cancelsettle request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class XhotelOrderAlipayfaceCancelsettleRequest
{
	/** 
	 * 取消结账的原因
	 **/
	private $reason;
	
	/** 
	 * 淘宝订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
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
		return "taobao.xhotel.order.alipayface.cancelsettle";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->reason,250,"reason");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkMinValue($this->tid,0,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
