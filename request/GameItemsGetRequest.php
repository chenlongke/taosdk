<?php
/**
 * TOP API: taobao.game.items.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameItemsGetRequest
{
	/** 
	 * 是否寄售交易
	 **/
	private $consignmentItem;
	
	/** 
	 * 价格区间的上限
	 **/
	private $endPrice;
	
	/** 
	 * 游戏ID
	 **/
	private $gameId;
	
	/** 
	 * 是否担保交易
	 **/
	private $guaranteeItem;
	
	/** 
	 * 是否支持无货赔付
	 **/
	private $isFreeze;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 请求的属性及属性值，多个用“;”进行分割，例：5381800:54166;5386711:55913
	 **/
	private $props;
	
	/** 
	 * 查询关键词
	 **/
	private $q;
	
	/** 
	 * 已售完或未售完标识，onsale标识未售完，soldout标识已售完
	 **/
	private $quantity;
	
	/** 
	 * 排序：default:默认排序;price:按价格升序排序;_price:按价格降序排序;uprice:按单价升序排序;_uprice:按单价降序排序;gmtmodified:按时间排序
	 **/
	private $sort;
	
	/** 
	 * 价格区间中的起始价格
	 **/
	private $startPrice;
	
	private $apiParas = array();
	
	public function setConsignmentItem($consignmentItem)
	{
		$this->consignmentItem = $consignmentItem;
		$this->apiParas["consignment_item"] = $consignmentItem;
	}

	public function getConsignmentItem()
	{
		return $this->consignmentItem;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setGameId($gameId)
	{
		$this->gameId = $gameId;
		$this->apiParas["game_id"] = $gameId;
	}

	public function getGameId()
	{
		return $this->gameId;
	}

	public function setGuaranteeItem($guaranteeItem)
	{
		$this->guaranteeItem = $guaranteeItem;
		$this->apiParas["guarantee_item"] = $guaranteeItem;
	}

	public function getGuaranteeItem()
	{
		return $this->guaranteeItem;
	}

	public function setIsFreeze($isFreeze)
	{
		$this->isFreeze = $isFreeze;
		$this->apiParas["is_freeze"] = $isFreeze;
	}

	public function getIsFreeze()
	{
		return $this->isFreeze;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.game.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gameId,"gameId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
