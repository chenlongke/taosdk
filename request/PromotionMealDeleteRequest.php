<?php
/**
 * TOP API: taobao.promotion.meal.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-09-09 00:00:00
 */
class PromotionMealDeleteRequest
{
	/** 
	 * 搭配套餐id。
	 **/
	private $mealId;
	
	private $apiParas = array();
	
	public function setMealId($mealId)
	{
		$this->mealId = $mealId;
		$this->apiParas["meal_id"] = $mealId;
	}

	public function getMealId()
	{
		return $this->mealId;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.meal.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mealId,"mealId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
