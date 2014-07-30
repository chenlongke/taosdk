<?php
/**
 * TOP API: taobao.promotionmisc.tcif.activity.add request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionmiscTcifActivityAddRequest
{
	/** 
	 * 营销活动优惠方式：0代表包邮、1代表打折、2代表减现金
	 **/
	private $activityRule;
	
	/** 
	 * 营销活动针对的人群标签 必须为数字类型
	 **/
	private $activityTag;
	
	/** 
	 * 营销活动结束时间 只是一个参考的结束时间 具体的要根据详情结束时间为准
	 **/
	private $endTime;
	
	/** 
	 * 营销活动开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setActivityRule($activityRule)
	{
		$this->activityRule = $activityRule;
		$this->apiParas["activity_rule"] = $activityRule;
	}

	public function getActivityRule()
	{
		return $this->activityRule;
	}

	public function setActivityTag($activityTag)
	{
		$this->activityTag = $activityTag;
		$this->apiParas["activity_tag"] = $activityTag;
	}

	public function getActivityTag()
	{
		return $this->activityTag;
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
		return "taobao.promotionmisc.tcif.activity.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityRule,"activityRule");
		RequestCheckUtil::checkNotNull($this->activityTag,"activityTag");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
