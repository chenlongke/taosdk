<?php
/**
 * TOP API: taobao.promotionmisc.tcif.activity.update request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionmiscTcifActivityUpdateRequest
{
	/** 
	 * 活动ID
	 **/
	private $activityId;
	
	/** 
	 * 活动结束时间
	 **/
	private $endTime;
	
	/** 
	 * 活动开始时间
	 **/
	private $startTime;
	
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.tcif.activity.update";
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
