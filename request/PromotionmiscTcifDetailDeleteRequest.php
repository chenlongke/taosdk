<?php
/**
 * TOP API: taobao.promotionmisc.tcif.detail.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionmiscTcifDetailDeleteRequest
{
	/** 
	 * 营销活动ID
	 **/
	private $activityId;
	
	/** 
	 * 营销活动详情ID
	 **/
	private $detailId;
	
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

	public function setDetailId($detailId)
	{
		$this->detailId = $detailId;
		$this->apiParas["detail_id"] = $detailId;
	}

	public function getDetailId()
	{
		return $this->detailId;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.tcif.detail.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->detailId,"detailId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
