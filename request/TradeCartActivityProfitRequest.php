<?php
/**
 * TOP API: taobao.trade.cart.activity.profit request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class TradeCartActivityProfitRequest
{
	/** 
	 * 单个促销活动的活动id，用于唯一标识一个活动
	 **/
	private $activityId;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.cart.activity.profit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
