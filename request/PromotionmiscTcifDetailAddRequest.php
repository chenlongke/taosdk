<?php
/**
 * TOP API: taobao.promotionmisc.tcif.detail.add request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionmiscTcifDetailAddRequest
{
	/** 
	 * 类目会员营销活动ID
	 **/
	private $activityId;
	
	/** 
	 * 宝贝的优惠结束时间
	 **/
	private $endTime;
	
	/** 
	 * --------商品ID+优惠规则的列表-------
当优惠规则为0时，Iterm_id后面的必须是'FP'的字符串,优惠都为包邮;
当优惠规则为1时，Iterm_id后面的数字为折扣率,100标示打1折,200表示打2折
当优惠规则为2时，Iterm_id后面的数字为减现金数量;
如Item_id:500(减5元);Item_id2，200(减2元)
	 **/
	private $ruleDetail;
	
	/** 
	 * 宝贝的优惠开始时间
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

	public function setRuleDetail($ruleDetail)
	{
		$this->ruleDetail = $ruleDetail;
		$this->apiParas["rule_detail"] = $ruleDetail;
	}

	public function getRuleDetail()
	{
		return $this->ruleDetail;
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
		return "taobao.promotionmisc.tcif.detail.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->ruleDetail,"ruleDetail");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
