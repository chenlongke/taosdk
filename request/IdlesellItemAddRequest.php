<?php
/**
 * TOP API: taobao.idlesell.item.add request
 * 
 * @author auto create
 * @since 1.0, 2012-03-15 00:00:00
 */
class IdlesellItemAddRequest
{
	/** 
	 * 支付宝卡号
	 **/
	private $alipayUserId;
	
	/** 
	 * 卖家宝贝所在地区，当城市下面包含区，必须传区
	 **/
	private $area;
	
	/** 
	 * 类目id
	 **/
	private $catId;
	
	/** 
	 * 卖家宝贝所在城市，必须
	 **/
	private $city;
	
	/** 
	 * 联系人
	 **/
	private $contacter;
	
	/** 
	 * 商品描述，可为空。为空时候带默认描述文案：“这个卖家太懒了，宝贝描述里面一个字都不肯写。^_^！”。
	 **/
	private $describe;
	
	/** 
	 * 交易方式。

offlined==0:线上交易 
offlined==1:见面交易 
offlined==2:两种交易方式均可
	 **/
	private $offlined;
	
	/** 
	 * 其他联系方式
	 **/
	private $otherCon;
	
	/** 
	 * 联系人手机
	 **/
	private $phone;
	
	/** 
	 * 运费，以分为单位，区间:0元<post_fee<100000000元
	 **/
	private $postFee;
	
	/** 
	 * 宝贝价格，以分为单位，区间：0元<price<100000000元
	 **/
	private $price;
	
	/** 
	 * 卖家宝贝所在省份，如：浙江
	 **/
	private $province;
	
	/** 
	 * 宝贝新旧程度，非空。

stuffStatus=10：全新 
stuffStatus=9：9成新以上 
stuffStatus=8：8成新以上 
stuffStatus=7：8成新以下
	 **/
	private $stuffStatus;
	
	/** 
	 * 宝贝标签，^分割，最多5个标签
	 **/
	private $tags;
	
	/** 
	 * 宝贝标题，必须。
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAlipayUserId($alipayUserId)
	{
		$this->alipayUserId = $alipayUserId;
		$this->apiParas["alipay_user_id"] = $alipayUserId;
	}

	public function getAlipayUserId()
	{
		return $this->alipayUserId;
	}

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

	public function setContacter($contacter)
	{
		$this->contacter = $contacter;
		$this->apiParas["contacter"] = $contacter;
	}

	public function getContacter()
	{
		return $this->contacter;
	}

	public function setDescribe($describe)
	{
		$this->describe = $describe;
		$this->apiParas["describe"] = $describe;
	}

	public function getDescribe()
	{
		return $this->describe;
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

	public function setOtherCon($otherCon)
	{
		$this->otherCon = $otherCon;
		$this->apiParas["other_con"] = $otherCon;
	}

	public function getOtherCon()
	{
		return $this->otherCon;
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
		return "taobao.idlesell.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayUserId,"alipayUserId");
		RequestCheckUtil::checkMaxLength($this->area,20,"area");
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkMaxLength($this->city,20,"city");
		RequestCheckUtil::checkMaxLength($this->contacter,15,"contacter");
		RequestCheckUtil::checkMaxLength($this->describe,25000,"describe");
		RequestCheckUtil::checkNotNull($this->offlined,"offlined");
		RequestCheckUtil::checkMaxLength($this->otherCon,30,"otherCon");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->province,"province");
		RequestCheckUtil::checkMaxLength($this->province,20,"province");
		RequestCheckUtil::checkNotNull($this->stuffStatus,"stuffStatus");
		RequestCheckUtil::checkMaxLength($this->tags,50,"tags");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,30,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
