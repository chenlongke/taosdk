<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.update request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class XhotelOrderAlipayfaceUpdateRequest
{
	/** 
	 * 操作的类型：
1.确认无房（取消预订）,
2.确认预订,
3.核实入住, 
4.核实离店,
5.noshow（买家未入住）
	 **/
	private $optType;
	
	/** 
	 * oper_type=1取消订单时必须填入。取消原因备注信息
	 **/
	private $reasonText;
	
	/** 
	 * oper_type=1取消订单时必须填入。
1：无房，2：价格变动，3：买家原因，4：其它原因
	 **/
	private $reasonType;
	
	/** 
	 * 订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setOptType($optType)
	{
		$this->optType = $optType;
		$this->apiParas["opt_type"] = $optType;
	}

	public function getOptType()
	{
		return $this->optType;
	}

	public function setReasonText($reasonText)
	{
		$this->reasonText = $reasonText;
		$this->apiParas["reason_text"] = $reasonText;
	}

	public function getReasonText()
	{
		return $this->reasonText;
	}

	public function setReasonType($reasonType)
	{
		$this->reasonType = $reasonType;
		$this->apiParas["reason_type"] = $reasonType;
	}

	public function getReasonType()
	{
		return $this->reasonType;
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
		return "taobao.xhotel.order.alipayface.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->optType,"optType");
		RequestCheckUtil::checkMaxLength($this->reasonText,500,"reasonText");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
