<?php
/**
 * TOP API: taobao.taobaoke.ext.trade.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-17 00:00:00
 */
class TaobaokeExtTradeGetRequest
{
	/** 
	 * 需要查询的b2c订单号
	 **/
	private $b2cOrderId;
	
	/** 
	 * 需要查询的b2cid
	 **/
	private $b2cid;
	
	/** 
	 * 需返回的字段列表.可选值:TaobaokeExtReportMember淘宝客外部B2C报表成员结构体中的所有字段;字段之间用","分隔.
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setB2cOrderId($b2cOrderId)
	{
		$this->b2cOrderId = $b2cOrderId;
		$this->apiParas["b2c_order_id"] = $b2cOrderId;
	}

	public function getB2cOrderId()
	{
		return $this->b2cOrderId;
	}

	public function setB2cid($b2cid)
	{
		$this->b2cid = $b2cid;
		$this->apiParas["b2cid"] = $b2cid;
	}

	public function getB2cid()
	{
		return $this->b2cid;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.ext.trade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->b2cOrderId,"b2cOrderId");
		RequestCheckUtil::checkNotNull($this->b2cid,"b2cid");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
