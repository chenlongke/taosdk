<?php
/**
 * TOP API: tmall.shops.search request
 * 
 * @author auto create
 * @since 1.0, 2012-11-11 00:00:00
 */
class TmallShopsSearchRequest
{
	/** 
	 * 前台类目id，若用户没有点击类目时，cat=2。
	 **/
	private $cat;
	
	/** 
	 * 是否送积分，送积分为2
	 **/
	private $filterPromotion1;
	
	/** 
	 * 是否返现金，返现金为1
	 **/
	private $filterPromotion2;
	
	/** 
	 * 是否送礼品，送礼品为8
	 **/
	private $filterPromotion3;
	
	/** 
	 * 是否免邮，免邮为4
	 **/
	private $filterPromotion4;
	
	/** 
	 * 固定参数from=wm，描述该请求来自无线客户端
	 **/
	private $from;
	
	/** 
	 * 宝贝卖家所在地，中文gbk编码
	 **/
	private $loc;
	
	/** 
	 * 表示搜索的关键字，例如搜索query=nike。当输入关键字为中文时，将对他进行URLEncode的UTF-8格式编码，如 耐克，那么q=%E8%80%90%E5%85%8B。
	 **/
	private $q;
	
	/** 
	 * 目前只支持s，默认人气排序
	 **/
	private $sort;
	
	/** 
	 * 表示查询起始位置，默认从第0条开始，start=10,表示从第10条数据开始查询
	 **/
	private $start;
	
	/** 
	 * 固定值，style=n
	 **/
	private $style;
	
	private $apiParas = array();
	
	public function setCat($cat)
	{
		$this->cat = $cat;
		$this->apiParas["cat"] = $cat;
	}

	public function getCat()
	{
		return $this->cat;
	}

	public function setFilterPromotion1($filterPromotion1)
	{
		$this->filterPromotion1 = $filterPromotion1;
		$this->apiParas["filter_promotion_1"] = $filterPromotion1;
	}

	public function getFilterPromotion1()
	{
		return $this->filterPromotion1;
	}

	public function setFilterPromotion2($filterPromotion2)
	{
		$this->filterPromotion2 = $filterPromotion2;
		$this->apiParas["filter_promotion_2"] = $filterPromotion2;
	}

	public function getFilterPromotion2()
	{
		return $this->filterPromotion2;
	}

	public function setFilterPromotion3($filterPromotion3)
	{
		$this->filterPromotion3 = $filterPromotion3;
		$this->apiParas["filter_promotion_3"] = $filterPromotion3;
	}

	public function getFilterPromotion3()
	{
		return $this->filterPromotion3;
	}

	public function setFilterPromotion4($filterPromotion4)
	{
		$this->filterPromotion4 = $filterPromotion4;
		$this->apiParas["filter_promotion_4"] = $filterPromotion4;
	}

	public function getFilterPromotion4()
	{
		return $this->filterPromotion4;
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

	public function setLoc($loc)
	{
		$this->loc = $loc;
		$this->apiParas["loc"] = $loc;
	}

	public function getLoc()
	{
		return $this->loc;
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

	public function setStyle($style)
	{
		$this->style = $style;
		$this->apiParas["style"] = $style;
	}

	public function getStyle()
	{
		return $this->style;
	}

	public function getApiMethodName()
	{
		return "tmall.shops.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->from,"from");
		RequestCheckUtil::checkNotNull($this->q,"q");
		RequestCheckUtil::checkNotNull($this->style,"style");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
