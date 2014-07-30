<?php
/**
 * TOP API: taobao.trade.cart.activity.save request
 * 
 * @author auto create
 * @since 1.0, 2012-06-27 00:00:00
 */
class TradeCartActivitySaveRequest
{
	/** 
	 * 设置完成的促销活动id
	 **/
	private $activityId;
	
	/** 
	 * 优惠活动的起始时间，2012-06-01 00:00:00 年月日时分秒都需要
	 **/
	private $beginDate;
	
	/** 
	 * 活动对应的购物车商品，是针对哪个时间段加入的，cart_add_begin是起始时间，2012-06-20只需要年月日就行
	 **/
	private $cartAddBegin;
	
	/** 
	 * 活动对应的购物车商品，是针对哪个时间段加入的，cart_add_end是结束时间，2012-06-25只需要年月日就行
	 **/
	private $cartAddEnd;
	
	/** 
	 * 设置的活动详情id
	 **/
	private $detailId;
	
	/** 
	 * 优惠活动的结束时间，2012-06-30 23:59:59 年月日时分秒都需要
	 **/
	private $endDate;
	
	/** 
	 * 一个设置完成的活动中，所包含的商品id
	 **/
	private $itemIds;
	
	/** 
	 * 设置的促销工具的名称
	 **/
	private $toolCode;
	
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

	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
		$this->apiParas["begin_date"] = $beginDate;
	}

	public function getBeginDate()
	{
		return $this->beginDate;
	}

	public function setCartAddBegin($cartAddBegin)
	{
		$this->cartAddBegin = $cartAddBegin;
		$this->apiParas["cart_add_begin"] = $cartAddBegin;
	}

	public function getCartAddBegin()
	{
		return $this->cartAddBegin;
	}

	public function setCartAddEnd($cartAddEnd)
	{
		$this->cartAddEnd = $cartAddEnd;
		$this->apiParas["cart_add_end"] = $cartAddEnd;
	}

	public function getCartAddEnd()
	{
		return $this->cartAddEnd;
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

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setToolCode($toolCode)
	{
		$this->toolCode = $toolCode;
		$this->apiParas["tool_code"] = $toolCode;
	}

	public function getToolCode()
	{
		return $this->toolCode;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.cart.activity.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->beginDate,"beginDate");
		RequestCheckUtil::checkNotNull($this->cartAddBegin,"cartAddBegin");
		RequestCheckUtil::checkNotNull($this->cartAddEnd,"cartAddEnd");
		RequestCheckUtil::checkNotNull($this->detailId,"detailId");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->itemIds,50,"itemIds");
		RequestCheckUtil::checkMaxLength($this->itemIds,50,"itemIds");
		RequestCheckUtil::checkNotNull($this->toolCode,"toolCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
