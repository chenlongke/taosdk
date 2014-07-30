<?php
/**
 * TOP API: taobao.idlesell.item.publish request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class IdlesellItemPublishRequest
{
	/** 
	 * 商品所在地区，当所在城市下存在地区，地区必须传递。已废弃，请传division_id
	 **/
	private $area;
	
	/** 
	 * attribute,用于传递新浪等用户相关信息。其中对应的key(目前支持的key)与value约束说明：
weibo_id：新浪微博用户id，必需参数。
weibo_nick：新浪微博用户nick，必需参数。
weibo_auth：新浪微博认证信息,可选值：1、2，其中：1为加V，2为达人，必需参数。
weibo_auth_detail:新浪微博认证详细
weibo_user_sex:新浪微博用户性别,可选值：男|女|未知，当不传或者不正确当未知处理。

参数采用key:value的形式传递，分号分隔.
如微博认证用户：朱志(http://weibo.com/ibohao) ，传递参数示例：
&attribute=weibo_id:1564266095;weibo_nick:ibohao;weibo_auth:1;weibo_auth_detail:觅我信息创始人朱志;weibo_user_sex:男&other_param=xxx
	 **/
	private $attribute;
	
	/** 
	 * 叶子类目id。只能发布到闲置商品的类目，该类目的根类目id为：50023878，叶子类目id获取：http://api.taobao.com/apidoc/api.htm?path=cid:3-apiId:122
	 **/
	private $catId;
	
	/** 
	 * 商品所在市，已废弃，请传division_id
	 **/
	private $city;
	
	/** 
	 * 联系人。最多15个汉字,受违禁词控制，拍卖商品无此属性
	 **/
	private $contacter;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 宝贝所在地区id，该id对应唯一的省、市、区行政单位。当存在该id，会重置province、city、area参数，建议只传id。另，id必须对应最小的行政单位，如330100对应浙江杭州，330106对应浙江杭州西湖区，则必须传330106，否则会返回错误。
	 **/
	private $divisionId;
	
	/** 
	 * 拍卖周期。可选值：7（7天），14（14天），默认为7。一口价商品无此属性
	 **/
	private $duration;
	
	/** 
	 * 手机客户端发布时的gps坐标。gps格式：纬度,经度。其中，纬度、经度精确到小数点后6位，逗号分隔经纬度。纬度区间[-90,+90],代表南纬90度到北纬90度；经度区间[-180,+180]，代表西经180度到东经180度。正确写法：+39.54,+116.28
	 **/
	private $gps;
	
	/** 
	 * 拍卖商品加价幅度。以元为单位，拍卖价格的增价幅度如果为0表示系统代理加幅，默认为0（系统代理加幅），加价幅度不能小于0，不能大于1亿元。一口价商品无此属性
	 **/
	private $increment;
	
	/** 
	 * 商品类型。可选值:fixed(一口价),auction(拍卖)
	 **/
	private $itemType;
	
	/** 
	 * 商品主图片。支持的文件类型：gif,jpg,jpeg,png,bmp
	 **/
	private $majorImg;
	
	/** 
	 * 一口价商品交易方式。可选值：0（线上交易），1(见面交易),2(两种交易方式均可)。一口价商品必须指定交易方式，拍卖商品无此属性
	 **/
	private $offlined;
	
	/** 
	 * 商品原价，以元为单位，必须大于0元，不能超过1亿元。拍卖商品无此属性
	 **/
	private $orgPrice;
	
	/** 
	 * 联系人手机。拍卖商品无此属性
	 **/
	private $phone;
	
	/** 
	 * 商品运费，以元为单位，不能小于0元，不能超过1000元，默认为0元。当且仅当一口价商品为在线交易方式时才有此属性，其他情况无此属性
	 **/
	private $postFee;
	
	/** 
	 * 商品价格。以元为单位，精确到小数点后面两位，必须大于0元，不能超过1亿元。当商品类型为一口价时，对应该参数为一口价商品价格；当商品类型为拍卖时，对应该参数为拍卖商品的起拍价。
	 **/
	private $price;
	
	/** 
	 * 商品所在省份，已废弃，请传division_id
	 **/
	private $province;
	
	/** 
	 * 商品新旧程度。一口价商品必须指定，可选值：10（全新），9（9成新以上），8（8成新以上），7（8成新以下）。拍卖商品无此属性
	 **/
	private $stuffStatus;
	
	/** 
	 * 宝贝标签（关键字）。逗号分割，最多5个标签，每个标签最多7个汉字。宝贝标签作用于宝贝搜索，提高搜索的相关性。受违禁词控制
	 **/
	private $tags;
	
	/** 
	 * 宝贝标题。不能超过30个汉字，受违禁词控制
	 **/
	private $title;
	
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

	public function setAttribute($attribute)
	{
		$this->attribute = $attribute;
		$this->apiParas["attribute"] = $attribute;
	}

	public function getAttribute()
	{
		return $this->attribute;
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

	public function setContacter($contacter)
	{
		$this->contacter = $contacter;
		$this->apiParas["contacter"] = $contacter;
	}

	public function getContacter()
	{
		return $this->contacter;
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

	public function setDivisionId($divisionId)
	{
		$this->divisionId = $divisionId;
		$this->apiParas["division_id"] = $divisionId;
	}

	public function getDivisionId()
	{
		return $this->divisionId;
	}

	public function setDuration($duration)
	{
		$this->duration = $duration;
		$this->apiParas["duration"] = $duration;
	}

	public function getDuration()
	{
		return $this->duration;
	}

	public function setGps($gps)
	{
		$this->gps = $gps;
		$this->apiParas["gps"] = $gps;
	}

	public function getGps()
	{
		return $this->gps;
	}

	public function setIncrement($increment)
	{
		$this->increment = $increment;
		$this->apiParas["increment"] = $increment;
	}

	public function getIncrement()
	{
		return $this->increment;
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

	public function setMajorImg($majorImg)
	{
		$this->majorImg = $majorImg;
		$this->apiParas["major_img"] = $majorImg;
	}

	public function getMajorImg()
	{
		return $this->majorImg;
	}

	public function setOfflined($offlined)
	{
		$this->offlined = $offlined;
		$this->apiParas["offlined"] = $offlined;
	}

	public function getOfflined()
	{
		return $this->offlined;
	}

	public function setOrgPrice($orgPrice)
	{
		$this->orgPrice = $orgPrice;
		$this->apiParas["org_price"] = $orgPrice;
	}

	public function getOrgPrice()
	{
		return $this->orgPrice;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
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

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
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

	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
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
		return "taobao.idlesell.item.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkMaxLength($this->contacter,15,"contacter");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->gps,40,"gps");
		RequestCheckUtil::checkNotNull($this->itemType,"itemType");
		RequestCheckUtil::checkMaxLength($this->itemType,7,"itemType");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,30,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
