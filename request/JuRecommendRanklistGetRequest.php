<?php
/**
 * TOP API: taobao.ju.recommend.ranklist.get request
 * 
 * @author auto create
 * @since 1.0, 2013-01-11 00:00:00
 */
class JuRecommendRanklistGetRequest
{
	/** 
	 * 用户所在城市，当商品类型为生活服务时必传
	 **/
	private $city;
	
	/** 
	 * 排行榜的商品数量
	 **/
	private $count;
	
	/** 
	 * 需要过滤掉的商品ID
	 **/
	private $discardItemIds;
	
	/** 
	 * 聚划算商品类型，0表示普通商品，1表示生活服务
	 **/
	private $itemType;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setDiscardItemIds($discardItemIds)
	{
		$this->discardItemIds = $discardItemIds;
		$this->apiParas["discard_item_ids"] = $discardItemIds;
	}

	public function getDiscardItemIds()
	{
		return $this->discardItemIds;
	}

	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		$this->apiParas["item_type"] = $itemType;
	}

	public function getItemType()
	{
		return $this->itemType;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.recommend.ranklist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemType,"itemType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
