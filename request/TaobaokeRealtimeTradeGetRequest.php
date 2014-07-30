<?php
/**
 * TOP API: taobao.taobaoke.realtime.trade.get request
 * 
 * @author auto create
 * @since 1.0, 2013-05-13 00:00:00
 */
class TaobaokeRealtimeTradeGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:TaobaokeReportMember淘宝客报表成员结构体中的所有字段;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 父订单id
	 **/
	private $tradeParentId;
	
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

	public function setTradeParentId($tradeParentId)
	{
		$this->tradeParentId = $tradeParentId;
		$this->apiParas["trade_parent_id"] = $tradeParentId;
	}

	public function getTradeParentId()
	{
		return $this->tradeParentId;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.realtime.trade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->tradeParentId,"tradeParentId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
