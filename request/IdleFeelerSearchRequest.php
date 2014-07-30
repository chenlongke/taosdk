<?php
/**
 * TOP API: taobao.idle.feeler.search request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class IdleFeelerSearchRequest
{
	/** 
	 * 商品所在地区，如：西湖区。当参数division_id存在值时，prov、city、area参数将不会作用。
	 **/
	private $area;
	
	/** 
	 * 所属类目,闲置商品的根目录id是：50023878，可在http://api.taobao.com/apidoc/api.htm?path=cid:3-apiId:122获取
	 **/
	private $catId;
	
	/** 
	 * 商品所在城市，如：杭州。当参数division_id存在值时，prov、city、area参数将不会作用。
	 **/
	private $city;
	
	/** 
	 * 范围查询，针对postion的多远距离进行查询 ,单位m，必须传递gps
	 **/
	private $distance;
	
	/** 
	 * 省、市、区行政单位对应的唯一id，具体可咨询淘宝小二获取。当参数division_id存在值时，prov、city、area参数将不会作用。
	 **/
	private $divisionId;
	
	/** 
	 * 结束收藏人气，用作范围查询
	 **/
	private $endCollect;
	
	/** 
	 * 结束评论数，用作范围查询
	 **/
	private $endComment;
	
	/** 
	 * 结束的一天第一次编辑时间，用作范围查询
	 **/
	private $endFirstmodified;
	
	/** 
	 * 价格区间，最高价格，元为单位
	 **/
	private $endPrice;
	
	/** 
	 * 结束浏览量，用作范围查询
	 **/
	private $endScan;
	
	/** 
	 * 是否需要按照类目统计，即计算类目各子类目下对应的宝贝数量
	 **/
	private $facetCatid;
	
	/** 
	 * 是否有宝贝描述，可选值：1（有）
	 **/
	private $hasDesc;
	
	/** 
	 * 是否有联系电话，可选值：1（留有联系电话），默认包含全部
	 **/
	private $hasPhone;
	
	/** 
	 * 是否有宝贝图片，可选值：1（有图片），默认查询全部。
	 **/
	private $hasPic;
	
	/** 
	 * 商品类型，可选值：fixed（一口价），auction（拍卖）
	 **/
	private $itemType;
	
	/** 
	 * 搜索关键字
	 **/
	private $keyWords;
	
	/** 
	 * 一口价商品交易方式，可选值：0（仅见面交易），1（在线交易），2（二者均可）。默认二者均可。
	 **/
	private $offline;
	
	/** 
	 * gps坐标位置，用作附近、多少范围内搜索，此时必须传递distance。gps格式：纬度,经度。其中，纬度、经度精确到小数点后6位，逗号分隔经纬度。纬度区间[-90,+90],代表南纬90度到北纬90度；经度区间[-180,+180]，代表西经180度到东经180度。正确写法：+39.54,+116.28
	 **/
	private $position;
	
	/** 
	 * 商品所在省份，如：浙江。当参数division_id存在值时，prov、city、area参数将不会作用。
	 **/
	private $prov;
	
	/** 
	 * 页面，每页的大小，默认20
	 **/
	private $rows;
	
	/** 
	 * 卖家nick
	 **/
	private $sellerNick;
	
	/** 
	 * 排序方式，可选值：1（按时间降序）， 2(按价格降序),3(按价格升序)
	 **/
	private $sortType;
	
	/** 
	 * 分页，起始位置,默认为1
	 **/
	private $start;
	
	/** 
	 * 起始收藏人气，用作范围查询
	 **/
	private $startCollect;
	
	/** 
	 * 起始评论数，用作范围查询
	 **/
	private $startComment;
	
	/** 
	 * 起始的一天第一次编辑时间 ，用作范围查询
	 **/
	private $startFirstmodified;
	
	/** 
	 * 价格区间，起始价格，元为单位
	 **/
	private $startPrice;
	
	/** 
	 * 起始浏览量，用作范围查询
	 **/
	private $startScan;
	
	/** 
	 * 一口价商品新旧程度stuffStatus=10：全新 stuffStatus=9：9成新以上 stuffStatus=8：8成新以上 stuffStatus=7：8成新以下
	 **/
	private $stuffStatus;
	
	/** 
	 * 旺旺在线状态：0在线、1不在线,默认二者皆可
	 **/
	private $wwStatus;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setDistance($distance)
	{
		$this->distance = $distance;
		$this->apiParas["distance"] = $distance;
	}

	public function getDistance()
	{
		return $this->distance;
	}

	public function setDivisionId($divisionId)
	{
		$this->divisionId = $divisionId;
		$this->apiParas["division_id"] = $divisionId;
	}

	public function getDivisionId()
	{
		return $this->divisionId;
	}

	public function setEndCollect($endCollect)
	{
		$this->endCollect = $endCollect;
		$this->apiParas["end_collect"] = $endCollect;
	}

	public function getEndCollect()
	{
		return $this->endCollect;
	}

	public function setEndComment($endComment)
	{
		$this->endComment = $endComment;
		$this->apiParas["end_comment"] = $endComment;
	}

	public function getEndComment()
	{
		return $this->endComment;
	}

	public function setEndFirstmodified($endFirstmodified)
	{
		$this->endFirstmodified = $endFirstmodified;
		$this->apiParas["end_firstmodified"] = $endFirstmodified;
	}

	public function getEndFirstmodified()
	{
		return $this->endFirstmodified;
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

	public function setEndScan($endScan)
	{
		$this->endScan = $endScan;
		$this->apiParas["end_scan"] = $endScan;
	}

	public function getEndScan()
	{
		return $this->endScan;
	}

	public function setFacetCatid($facetCatid)
	{
		$this->facetCatid = $facetCatid;
		$this->apiParas["facet_catid"] = $facetCatid;
	}

	public function getFacetCatid()
	{
		return $this->facetCatid;
	}

	public function setHasDesc($hasDesc)
	{
		$this->hasDesc = $hasDesc;
		$this->apiParas["has_desc"] = $hasDesc;
	}

	public function getHasDesc()
	{
		return $this->hasDesc;
	}

	public function setHasPhone($hasPhone)
	{
		$this->hasPhone = $hasPhone;
		$this->apiParas["has_phone"] = $hasPhone;
	}

	public function getHasPhone()
	{
		return $this->hasPhone;
	}

	public function setHasPic($hasPic)
	{
		$this->hasPic = $hasPic;
		$this->apiParas["has_pic"] = $hasPic;
	}

	public function getHasPic()
	{
		return $this->hasPic;
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

	public function setKeyWords($keyWords)
	{
		$this->keyWords = $keyWords;
		$this->apiParas["key_words"] = $keyWords;
	}

	public function getKeyWords()
	{
		return $this->keyWords;
	}

	public function setOffline($offline)
	{
		$this->offline = $offline;
		$this->apiParas["offline"] = $offline;
	}

	public function getOffline()
	{
		return $this->offline;
	}

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function setProv($prov)
	{
		$this->prov = $prov;
		$this->apiParas["prov"] = $prov;
	}

	public function getProv()
	{
		return $this->prov;
	}

	public function setRows($rows)
	{
		$this->rows = $rows;
		$this->apiParas["rows"] = $rows;
	}

	public function getRows()
	{
		return $this->rows;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
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

	public function setStartCollect($startCollect)
	{
		$this->startCollect = $startCollect;
		$this->apiParas["start_collect"] = $startCollect;
	}

	public function getStartCollect()
	{
		return $this->startCollect;
	}

	public function setStartComment($startComment)
	{
		$this->startComment = $startComment;
		$this->apiParas["start_comment"] = $startComment;
	}

	public function getStartComment()
	{
		return $this->startComment;
	}

	public function setStartFirstmodified($startFirstmodified)
	{
		$this->startFirstmodified = $startFirstmodified;
		$this->apiParas["start_firstmodified"] = $startFirstmodified;
	}

	public function getStartFirstmodified()
	{
		return $this->startFirstmodified;
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

	public function setStartScan($startScan)
	{
		$this->startScan = $startScan;
		$this->apiParas["start_scan"] = $startScan;
	}

	public function getStartScan()
	{
		return $this->startScan;
	}

	public function setStuffStatus($stuffStatus)
	{
		$this->stuffStatus = $stuffStatus;
		$this->apiParas["stuff_status"] = $stuffStatus;
	}

	public function getStuffStatus()
	{
		return $this->stuffStatus;
	}

	public function setWwStatus($wwStatus)
	{
		$this->wwStatus = $wwStatus;
		$this->apiParas["ww_status"] = $wwStatus;
	}

	public function getWwStatus()
	{
		return $this->wwStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.idle.feeler.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->area,100,"area");
		RequestCheckUtil::checkMaxLength($this->city,100,"city");
		RequestCheckUtil::checkMaxLength($this->keyWords,100,"keyWords");
		RequestCheckUtil::checkMaxLength($this->position,40,"position");
		RequestCheckUtil::checkMaxLength($this->prov,50,"prov");
		RequestCheckUtil::checkMaxLength($this->sellerNick,20,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
