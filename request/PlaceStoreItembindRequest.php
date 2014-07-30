<?php
/**
 * TOP API: taobao.place.store.itembind request
 * 
 * @author auto create
 * @since 1.0, 2014-04-10 00:00:00
 */
class PlaceStoreItembindRequest
{
	/** 
	 * 门店地址
	 **/
	private $address;
	
	/** 
	 * 品牌名
	 **/
	private $brandName;
	
	/** 
	 * 营业时间,格式:11:00-24:00
	 **/
	private $businessTime;
	
	/** 
	 * 别名
	 **/
	private $byname;
	
	/** 
	 * 门店主营类目id,id值为为本地通商户平台的后台类目，而非商品类目
	 **/
	private $category;
	
	/** 
	 * 行政区划编码：城市6位编码
	 **/
	private $city;
	
	/** 
	 * 联系方式,可以是电话,手机,区号非必须,如果要加区号以-链接,多个号码之间用;拼接
	 **/
	private $contacts;
	
	/** 
	 * 行政区划编码：区域6位编码
	 **/
	private $district;
	
	/** 
	 * 门店介绍/描述
	 **/
	private $introduce;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 商户名称，可与品牌名相同
	 **/
	private $name;
	
	/** 
	 * 外部门店唯一识别id(外部门店主键id)
	 **/
	private $outerId;
	
	/** 
	 * 人均消费
	 **/
	private $perPrice;
	
	/** 
	 * 门店主图片路径，如：i7/T1rfxpXcVhXXXH9QcZ_033150.jpg
	 **/
	private $pic;
	
	/** 
	 * 门店位置poi经度
	 **/
	private $posx;
	
	/** 
	 * 门店位置poi纬度
	 **/
	private $posy;
	
	/** 
	 * 枚举型类目属性
	 **/
	private $propertyEnum;
	
	/** 
	 * 输入型类目属性
	 **/
	private $propertyText;
	
	/** 
	 * 行政区划编码：省份6位编码
	 **/
	private $prov;
	
	/** 
	 * 门店辅营类目id，多个以;分隔，值为商户平台类目而非商品类目
	 **/
	private $secCategory;
	
	/** 
	 * 淘宝卖家id
	 **/
	private $sellerId;
	
	/** 
	 * 商品绑定门店，选择门店的一个经营类目，可选多个（目前仅支持传递一个），多个以;分隔
	 **/
	private $storeCates;
	
	/** 
	 * 分店名
	 **/
	private $subname;
	
	/** 
	 * 交通公交信息
	 **/
	private $traffic;
	
	/** 
	 * 创建人的淘宝用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setBrandName($brandName)
	{
		$this->brandName = $brandName;
		$this->apiParas["brand_name"] = $brandName;
	}

	public function getBrandName()
	{
		return $this->brandName;
	}

	public function setBusinessTime($businessTime)
	{
		$this->businessTime = $businessTime;
		$this->apiParas["business_time"] = $businessTime;
	}

	public function getBusinessTime()
	{
		return $this->businessTime;
	}

	public function setByname($byname)
	{
		$this->byname = $byname;
		$this->apiParas["byname"] = $byname;
	}

	public function getByname()
	{
		return $this->byname;
	}

	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
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

	public function setContacts($contacts)
	{
		$this->contacts = $contacts;
		$this->apiParas["contacts"] = $contacts;
	}

	public function getContacts()
	{
		return $this->contacts;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
		$this->apiParas["district"] = $district;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setIntroduce($introduce)
	{
		$this->introduce = $introduce;
		$this->apiParas["introduce"] = $introduce;
	}

	public function getIntroduce()
	{
		return $this->introduce;
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

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPerPrice($perPrice)
	{
		$this->perPrice = $perPrice;
		$this->apiParas["per_price"] = $perPrice;
	}

	public function getPerPrice()
	{
		return $this->perPrice;
	}

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function setPosx($posx)
	{
		$this->posx = $posx;
		$this->apiParas["posx"] = $posx;
	}

	public function getPosx()
	{
		return $this->posx;
	}

	public function setPosy($posy)
	{
		$this->posy = $posy;
		$this->apiParas["posy"] = $posy;
	}

	public function getPosy()
	{
		return $this->posy;
	}

	public function setPropertyEnum($propertyEnum)
	{
		$this->propertyEnum = $propertyEnum;
		$this->apiParas["property_enum"] = $propertyEnum;
	}

	public function getPropertyEnum()
	{
		return $this->propertyEnum;
	}

	public function setPropertyText($propertyText)
	{
		$this->propertyText = $propertyText;
		$this->apiParas["property_text"] = $propertyText;
	}

	public function getPropertyText()
	{
		return $this->propertyText;
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

	public function setSecCategory($secCategory)
	{
		$this->secCategory = $secCategory;
		$this->apiParas["sec_category"] = $secCategory;
	}

	public function getSecCategory()
	{
		return $this->secCategory;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setStoreCates($storeCates)
	{
		$this->storeCates = $storeCates;
		$this->apiParas["store_cates"] = $storeCates;
	}

	public function getStoreCates()
	{
		return $this->storeCates;
	}

	public function setSubname($subname)
	{
		$this->subname = $subname;
		$this->apiParas["subname"] = $subname;
	}

	public function getSubname()
	{
		return $this->subname;
	}

	public function setTraffic($traffic)
	{
		$this->traffic = $traffic;
		$this->apiParas["traffic"] = $traffic;
	}

	public function getTraffic()
	{
		return $this->traffic;
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
		return "taobao.place.store.itembind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkNotNull($this->category,"category");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->contacts,"contacts");
		RequestCheckUtil::checkNotNull($this->district,"district");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->prov,"prov");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->storeCates,"storeCates");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
