<?php
/**
 * TOP API: taobao.taobaoke.trade.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-12 00:00:00
 */
class TaobaokeTradeGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:TaobaokeReportMember淘宝客报表成员结构体中的所有字段;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 淘客交易状态,目前只开放0 交易创建 1 支付宝付款  3 交易成功 这3个状态查询
	 **/
	private $payStatus;
	
	/** 
	 * 交易id
	 **/
	private $taobaoTradeId;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPayStatus($payStatus)
	{
		$this->payStatus = $payStatus;
		$this->apiParas["pay_status"] = $payStatus;
	}

	public function getPayStatus()
	{
		return $this->payStatus;
	}

	public function setTaobaoTradeId($taobaoTradeId)
	{
		$this->taobaoTradeId = $taobaoTradeId;
		$this->apiParas["taobao_trade_id"] = $taobaoTradeId;
	}

	public function getTaobaoTradeId()
	{
		return $this->taobaoTradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.trade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->taobaoTradeId,"taobaoTradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
