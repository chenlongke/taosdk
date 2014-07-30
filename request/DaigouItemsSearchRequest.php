<?php
/**
 * TOP API: taobao.daigou.items.search request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class DaigouItemsSearchRequest
{
	/** 
	 * 类目的id字符串.可以通过返回的categorys对象中获得
	 **/
	private $categoryId;
	
	/** 
	 * 宝贝所在地的城市,传入城市标准的中文.如:杭州.
注:所有的标准地区均可通过top地区接口taobao.areas.get查询
	 **/
	private $city;
	
	/** 
	 * 搜索条件中得假一赔三条件.字符串"false"表示该条件无效,字符串"true"表示该条件有效
	 **/
	private $compensableThree;
	
	/** 
	 * 当前页默认值为1.必须传大于0的数值
	 **/
	private $currentPage;
	
	/** 
	 * 搜索条件中得如实描述服务条件.字符串"false"表示该条件无效,字符串"true"表示该条件有效
	 **/
	private $isprepay;
	
	/** 
	 * 宝贝id.如果输入宝贝id作为查询条件,则其他的查询条件均无效.因为宝贝id是唯一的
	 **/
	private $itemId;
	
	/** 
	 * 搜索框中的关键字.根据关键字返回搜索的商品信息
	 **/
	private $keyWord;
	
	/** 
	 * 搜索条件中得30天维修服务条件. 字符串"false"表示该条件无效,字符串"true"表示该条件有效
	 **/
	private $maintenanceIn30;
	
	/** 
	 * 搜索条件价格区间的最大值.以元为单位支持到分,可以是100.30元或100.3元
	 **/
	private $priceMax;
	
	/** 
	 * 商品价格条件中的最小价格值.以元为单位,最多只支持到分可以是50.30元或者50.3元
	 **/
	private $priceMin;
	
	/** 
	 * 排序字段,目前只支持商品价格排序,如:price.
	 **/
	private $primarySort;
	
	/** 
	 * 宝贝所在地的宝贝所在地的省,传入省标准的中文.如:湖南.
注:所有的标准地区均可通过top地区接口taobao.areas.get查询
	 **/
	private $prov;
	
	/** 
	 * 搜索条件中得7天退换条件.字符串"false"表示该条件无效,字符串"true"表示该条件有效
	 **/
	private $returnsIn7;
	
	/** 
	 * 搜索条件中的卖家昵称.如:seller1
	 **/
	private $sellerNick;
	
	/** 
	 * 排序方式.如true:降序,false:升序.默认false 受排序字段影响,如无排序字段则此条件无效
	 **/
	private $sortType;
	
	/** 
	 * 搜索条件中的正品保障服务条件. 字符串"false"表示该条件无效,字符串"true"表示该条件有效
	 **/
	private $userType;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
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

	public function setCompensableThree($compensableThree)
	{
		$this->compensableThree = $compensableThree;
		$this->apiParas["compensable_three"] = $compensableThree;
	}

	public function getCompensableThree()
	{
		return $this->compensableThree;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setIsprepay($isprepay)
	{
		$this->isprepay = $isprepay;
		$this->apiParas["isprepay"] = $isprepay;
	}

	public function getIsprepay()
	{
		return $this->isprepay;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setKeyWord($keyWord)
	{
		$this->keyWord = $keyWord;
		$this->apiParas["key_word"] = $keyWord;
	}

	public function getKeyWord()
	{
		return $this->keyWord;
	}

	public function setMaintenanceIn30($maintenanceIn30)
	{
		$this->maintenanceIn30 = $maintenanceIn30;
		$this->apiParas["maintenance_in_30"] = $maintenanceIn30;
	}

	public function getMaintenanceIn30()
	{
		return $this->maintenanceIn30;
	}

	public function setPriceMax($priceMax)
	{
		$this->priceMax = $priceMax;
		$this->apiParas["price_max"] = $priceMax;
	}

	public function getPriceMax()
	{
		return $this->priceMax;
	}

	public function setPriceMin($priceMin)
	{
		$this->priceMin = $priceMin;
		$this->apiParas["price_min"] = $priceMin;
	}

	public function getPriceMin()
	{
		return $this->priceMin;
	}

	public function setPrimarySort($primarySort)
	{
		$this->primarySort = $primarySort;
		$this->apiParas["primary_sort"] = $primarySort;
	}

	public function getPrimarySort()
	{
		return $this->primarySort;
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

	public function setReturnsIn7($returnsIn7)
	{
		$this->returnsIn7 = $returnsIn7;
		$this->apiParas["returns_in_7"] = $returnsIn7;
	}

	public function getReturnsIn7()
	{
		return $this->returnsIn7;
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

	public function setUserType($userType)
	{
		$this->userType = $userType;
		$this->apiParas["user_type"] = $userType;
	}

	public function getUserType()
	{
		return $this->userType;
	}

	public function getApiMethodName()
	{
		return "taobao.daigou.items.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
