<?php
/**
 * TOP API: tmall.shop.items.search request
 * 
 * @author auto create
 * @since 1.0, 2012-11-11 00:00:00
 */
class TmallShopItemsSearchRequest
{
	/** 
	 * 商品标签。天猫精品库：8578；品牌特卖商品库：3458；天猫原创商品库：4801
	 **/
	private $auctionTag;
	
	/** 
	 * 前台类目id，若用户没有点击类目时，cat=2。
	 **/
	private $cat;
	
	/** 
	 * 在宝贝页面中进行价格筛选的时候，如果填写了最高价格，就会显示该字段。
	 **/
	private $endPrice;
	
	/** 
	 * 固定参数from=wm，描述该请求来自无线客户端
	 **/
	private $from;
	
	/** 
	 * 表示搜索的关键字，例如搜索query=nike。当输入关键字为中文时，将对他进行GBK编码，如 耐克，那么q=%C4%CD%BF%CB。
	 **/
	private $q;
	
	/** 
	 * 排序类型。类型包括： s: 人气排序 p: 价格从低到高; pd: 价格从高到低; d: 月销量从高到低; td: 总销量从高到低; pt: 按发布时间排序.
	 **/
	private $sort;
	
	/** 
	 * 表示查询起始位置，默认从第0条开始，start=10,表示从第10条数据开始查询
	 **/
	private $start;
	
	/** 
	 * 在宝贝页面中进行价格筛选的时候，如果填写了最低价格，就会显示该字段。
	 **/
	private $startPrice;
	
	/** 
	 * 卖家数字id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAuctionTag($auctionTag)
	{
		$this->auctionTag = $auctionTag;
		$this->apiParas["auction_tag"] = $auctionTag;
	}

	public function getAuctionTag()
	{
		return $this->auctionTag;
	}

	public function setCat($cat)
	{
		$this->cat = $cat;
		$this->apiParas["cat"] = $cat;
	}

	public function getCat()
	{
		return $this->cat;
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

	public function setFrom($from)
	{
		$this->from = $from;
		$this->apiParas["from"] = $from;
	}

	public function getFrom()
	{
		return $this->from;
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

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "tmall.shop.items.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->from,"from");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
