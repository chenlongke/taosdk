<?php
/**
 * TOP API: taobao.offer.item.add request
 * 
 * @author auto create
 * @since 1.0, 2013-07-25 00:00:00
 */
class OfferItemAddRequest
{
	/** 
	 * 用户的详细地址。选择了省市区后不需要在填写省市区了，展示的时候会联合省市区展示的。如果在这里继续写上省市区可能会导致poi计算错误。
	 **/
	private $address;
	
	/** 
	 * 区域编码如果没有区域，请输入0
参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20130118_402867249.htm
	 **/
	private $areaCode;
	
	/** 
	 * 叶子类目ID
	 **/
	private $cid;
	
	/** 
	 * 宝贝物流所在的城市，建议不要设置。
如果不传入城市，会用卖家location中的城市code去计算。。
	 **/
	private $city;
	
	/** 
	 * 城市编码
参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20130118_402867249.htm
	 **/
	private $cityCode;
	
	/** 
	 * 富文本描述。
	 **/
	private $desc;
	
	/** 
	 * 1 女士 0 男士 如果serviceName不传入。这个值没有意义。但是如果有servicename必须有gender
	 **/
	private $gender;
	
	/** 
	 * 我是上传文件的内容！
	 **/
	private $image;
	
	/** 
	 * 用户自行输入的类目属性ID串。结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
	 **/
	private $inputPids;
	
	/** 
	 * 用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5,Nike乔丹鞋;乔丹系列;乔丹鞋系列;乔丹鞋系列;json5”，多个自定义属性用','分割，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过3999字节
	 **/
	private $inputStrs;
	
	/** 
	 * 发布宝贝过后，管理在offer平台管理，宝贝不会出现在卖家中心的出售中。
出现在offer平台管理与出现在卖家中心管理，只能并且必须只有一个是true
	 **/
	private $itemManInOffer;
	
	/** 
	 * 发布宝贝过后，宝贝出现在卖家中心管理。不会出现在offer平台管理，但是宝贝都会出现在offer平台。
出现在offer平台管理与出现在卖家中心管理，只能并且必须只有一个是true
	 **/
	private $itemManInSell;
	
	/** 
	 * 座机号码
请参考下例子：
普通座机：区号-号码-分机
如果没有分机：区号-号码
400号码也一样：400-号码-分机
没有分机：400-号码
	 **/
	private $landline;
	
	/** 
	 * 阿里云地图经度。可以自己主动计算。
使用者不计算，api会按照 省市区+address计算出坐标。
	 **/
	private $lat;
	
	/** 
	 * 维度，规则同经度。
	 **/
	private $lon;
	
	/** 
	 * 手机号码
	 **/
	private $mobile;
	
	/** 
	 * 外部编号ID
	 **/
	private $outerId;
	
	/** 
	 * 商品图片地址相对链接，主图。如果不传入图片采用默认图片
	 **/
	private $picPath;
	
	/** 
	 * 价格！
	 **/
	private $price;
	
	/** 
	 * 价格类型： (1, "起"), (2, "/次"), (3, "订金"), (4, "/小时"), (5, "/天"), (6, "/月");
	 **/
	private $priceType;
	
	/** 
	 * 商品属性列表。格式:pid:vid;pid:vid。属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。 如果该类目下面没有属性，可以不用填写。如果有属性，必选属性必填，其他非必选属性可以选择不填写.属性不能超过35对。所有属性加起来包括分割符不能超过549字节，单个属性没有限制。
	 **/
	private $props;
	
	/** 
	 * 宝贝物流所在的省份，建议不要设置。
不填宝贝物流所在的时候会主动通过卖家location中的省份code去计算。
	 **/
	private $prov;
	
	/** 
	 * 省份编码
参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20130118_402867249.htm
	 **/
	private $provCode;
	
	/** 
	 * 服务人的姓，最长2个汉字。
	 **/
	private $serviceName;
	
	/** 
	 * 宝贝标题，最长GBK编码60字节。
	 **/
	private $title;
	
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

	public function setAreaCode($areaCode)
	{
		$this->areaCode = $areaCode;
		$this->apiParas["area_code"] = $areaCode;
	}

	public function getAreaCode()
	{
		return $this->areaCode;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
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

	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
		$this->apiParas["gender"] = $gender;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setInputPids($inputPids)
	{
		$this->inputPids = $inputPids;
		$this->apiParas["input_pids"] = $inputPids;
	}

	public function getInputPids()
	{
		return $this->inputPids;
	}

	public function setInputStrs($inputStrs)
	{
		$this->inputStrs = $inputStrs;
		$this->apiParas["input_strs"] = $inputStrs;
	}

	public function getInputStrs()
	{
		return $this->inputStrs;
	}

	public function setItemManInOffer($itemManInOffer)
	{
		$this->itemManInOffer = $itemManInOffer;
		$this->apiParas["item_man_in_offer"] = $itemManInOffer;
	}

	public function getItemManInOffer()
	{
		return $this->itemManInOffer;
	}

	public function setItemManInSell($itemManInSell)
	{
		$this->itemManInSell = $itemManInSell;
		$this->apiParas["item_man_in_sell"] = $itemManInSell;
	}

	public function getItemManInSell()
	{
		return $this->itemManInSell;
	}

	public function setLandline($landline)
	{
		$this->landline = $landline;
		$this->apiParas["landline"] = $landline;
	}

	public function getLandline()
	{
		return $this->landline;
	}

	public function setLat($lat)
	{
		$this->lat = $lat;
		$this->apiParas["lat"] = $lat;
	}

	public function getLat()
	{
		return $this->lat;
	}

	public function setLon($lon)
	{
		$this->lon = $lon;
		$this->apiParas["lon"] = $lon;
	}

	public function getLon()
	{
		return $this->lon;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
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

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPriceType($priceType)
	{
		$this->priceType = $priceType;
		$this->apiParas["price_type"] = $priceType;
	}

	public function getPriceType()
	{
		return $this->priceType;
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

	public function setProv($prov)
	{
		$this->prov = $prov;
		$this->apiParas["prov"] = $prov;
	}

	public function getProv()
	{
		return $this->prov;
	}

	public function setProvCode($provCode)
	{
		$this->provCode = $provCode;
		$this->apiParas["prov_code"] = $provCode;
	}

	public function getProvCode()
	{
		return $this->provCode;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.offer.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkNotNull($this->areaCode,"areaCode");
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->cityCode,"cityCode");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->gender,"gender");
		RequestCheckUtil::checkNotNull($this->itemManInOffer,"itemManInOffer");
		RequestCheckUtil::checkNotNull($this->itemManInSell,"itemManInSell");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->priceType,"priceType");
		RequestCheckUtil::checkNotNull($this->provCode,"provCode");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,60,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
