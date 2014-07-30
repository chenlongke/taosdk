<?php
/**
 * TOP API: taobao.promotionmisc.tcif.activity.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionmiscTcifActivityDeleteRequest
{
	/** 
	 * 类目会员营销活动ID
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
		return "taobao.promotionmisc.tcif.activity.delete";
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
