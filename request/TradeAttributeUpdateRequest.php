<?php
/**
 * TOP API: taobao.trade.attribute.update request
 * 
 * @author auto create
 * @since 1.0, 2012-11-27 00:00:00
 */
class TradeAttributeUpdateRequest
{
	/** 
	 * 订单标记和订单标记值，如"ecert=1"的这种形式，刷卡打标可以用“elink=5^4^1”。
	 **/
	private $attribute;
	
	/** 
	 * 打入标记订单的序列，用','分隔。如果只有一个订单号，只传入一个订单号
	 **/
	private $tids;
	
	private $apiParas = array();
	
	public function setAttribute($attribute)
	{
		$this->attribute = $attribute;
		$this->apiParas["attribute"] = $attribute;
	}

	public function getAttribute()
	{
		return $this->attribute;
	}

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
		return "taobao.trade.attribute.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->attribute,"attribute");
		RequestCheckUtil::checkNotNull($this->tids,"tids");
		RequestCheckUtil::checkMaxListSize($this->tids,50,"tids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
