<?php
/**
 * TOP API: taobao.hui.ltuan.publish request
 * 
 * @author auto create
 * @since 1.0, 2011-12-27 00:00:00
 */
class HuiLtuanPublishRequest
{
	/** 
	 * true 运用了普通运费模板 | false 未应用模板;默认为false
	 **/
	private $applyPostage;
	
	/** 
	 * 编辑上架需要的商品主表ID，如果是发布新宝贝则不需要
	 **/
	private $auctionId;
	
	/** 
	 * 后台叶子类目ID
	 **/
	private $categoryId;
	
	/** 
	 * 宝贝所在城市
	 **/
	private $city;
	
	/** 
	 * 商品描述
	 **/
	private $description;
	
	/** 
	 * 是否电子物流(true 是，false：为实体物流)默认为true
	 **/
	private $elecCouponPost;
	
	/** 
	 * 商品团购结束时间
	 **/
	private $endTime;
	
	/** 
	 * 团购介绍
	 **/
	private $info;
	
	/** 
	 * 商品编码
	 **/
	private $itemNo;
	
	/** 
	 * 商品单人购买件数限制
	 **/
	private $limitNum;
	
	/** 
	 * 商品长标题
	 **/
	private $longTitle;
	
	/** 
	 * 商品原价
	 **/
	private $oriPrice;
	
	/** 
	 * 商品主图的图片数据。pict_url和pict_data只需要传入一个,如果两个都传，默认选择pic_url
	 **/
	private $pictData;
	
	/** 
	 * 商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pict_url和pict_data只需要传入一个,如果两个都传，默认选择pic_url
	 **/
	private $pictUrl;
	
	/** 
	 * 宝贝关联的运费模板ID
	 **/
	private $postageid;
	
	/** 
	 * 是否橱窗推荐，默认为false
	 **/
	private $promoted;
	
	/** 
	 * 宝贝所在省
	 **/
	private $prov;
	
	/** 
	 * 团购宝贝库存
	 **/
	private $quantity;
	
	/** 
	 * EMS费
	 **/
	private $secureTradeEmsPostFee;
	
	/** 
	 * 快递费
	 **/
	private $secureTradeFastPostFee;
	
	/** 
	 * 平邮费
	 **/
	private $secureTradeOrdinaryPostFee;
	
	/** 
	 * 是否立刻上架销销售,默认是
	 **/
	private $sellRightNow;
	
	/** 
	 * true 卖家承担运费 | false 买家承担运费;默认为true
	 **/
	private $sellerPayPostfee;
	
	/** 
	 * 团购有效期开始时间
	 **/
	private $serviceBeginTime;
	
	/** 
	 * 团购有效期结束时间
	 **/
	private $serviceEndTime;
	
	/** 
	 * 商品所属店铺类目的类目ID集
	 **/
	private $shopCategoriesIdList;
	
	/** 
	 * 商品团购开始时间
	 **/
	private $startTime;
	
	/** 
	 * 供应商家信息列表以一个长字串表示，字段之间以#分隔，信息组以$分隔
如：商家1#联系电话1#所在地省代号1#所在地城市代号1#所在地地区代号1#详细地址1#交通信息1$商家2#联系电话2#所在地省代号2#所在地城市代号2#所在地地区代号2#详细地址2#交通信息2
<br/>地域代号可从taobao.areas.get获取,如330000表示浙江，330100表示杭州，330102表示上城区
	 **/
	private $supplierList;
	
	/** 
	 * 商品短标题
	 **/
	private $title;
	
	/** 
	 * 商品团购价
	 **/
	private $tuanPrice;
	
	private $apiParas = array();
	
	public function setApplyPostage($applyPostage)
	{
		$this->applyPostage = $applyPostage;
		$this->apiParas["apply_postage"] = $applyPostage;
	}

	public function getApplyPostage()
	{
		return $this->applyPostage;
	}

	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setElecCouponPost($elecCouponPost)
	{
		$this->elecCouponPost = $elecCouponPost;
		$this->apiParas["elec_coupon_post"] = $elecCouponPost;
	}

	public function getElecCouponPost()
	{
		return $this->elecCouponPost;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setInfo($info)
	{
		$this->info = $info;
		$this->apiParas["info"] = $info;
	}

	public function getInfo()
	{
		return $this->info;
	}

	public function setItemNo($itemNo)
	{
		$this->itemNo = $itemNo;
		$this->apiParas["item_no"] = $itemNo;
	}

	public function getItemNo()
	{
		return $this->itemNo;
	}

	public function setLimitNum($limitNum)
	{
		$this->limitNum = $limitNum;
		$this->apiParas["limit_num"] = $limitNum;
	}

	public function getLimitNum()
	{
		return $this->limitNum;
	}

	public function setLongTitle($longTitle)
	{
		$this->longTitle = $longTitle;
		$this->apiParas["long_title"] = $longTitle;
	}

	public function getLongTitle()
	{
		return $this->longTitle;
	}

	public function setOriPrice($oriPrice)
	{
		$this->oriPrice = $oriPrice;
		$this->apiParas["ori_price"] = $oriPrice;
	}

	public function getOriPrice()
	{
		return $this->oriPrice;
	}

	public function setPictData($pictData)
	{
		$this->pictData = $pictData;
		$this->apiParas["pict_data"] = $pictData;
	}

	public function getPictData()
	{
		return $this->pictData;
	}

	public function setPictUrl($pictUrl)
	{
		$this->pictUrl = $pictUrl;
		$this->apiParas["pict_url"] = $pictUrl;
	}

	public function getPictUrl()
	{
		return $this->pictUrl;
	}

	public function setPostageid($postageid)
	{
		$this->postageid = $postageid;
		$this->apiParas["postageid"] = $postageid;
	}

	public function getPostageid()
	{
		return $this->postageid;
	}

	public function setPromoted($promoted)
	{
		$this->promoted = $promoted;
		$this->apiParas["promoted"] = $promoted;
	}

	public function getPromoted()
	{
		return $this->promoted;
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

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setSecureTradeEmsPostFee($secureTradeEmsPostFee)
	{
		$this->secureTradeEmsPostFee = $secureTradeEmsPostFee;
		$this->apiParas["secure_trade_ems_post_fee"] = $secureTradeEmsPostFee;
	}

	public function getSecureTradeEmsPostFee()
	{
		return $this->secureTradeEmsPostFee;
	}

	public function setSecureTradeFastPostFee($secureTradeFastPostFee)
	{
		$this->secureTradeFastPostFee = $secureTradeFastPostFee;
		$this->apiParas["secure_trade_fast_post_fee"] = $secureTradeFastPostFee;
	}

	public function getSecureTradeFastPostFee()
	{
		return $this->secureTradeFastPostFee;
	}

	public function setSecureTradeOrdinaryPostFee($secureTradeOrdinaryPostFee)
	{
		$this->secureTradeOrdinaryPostFee = $secureTradeOrdinaryPostFee;
		$this->apiParas["secure_trade_ordinary_post_fee"] = $secureTradeOrdinaryPostFee;
	}

	public function getSecureTradeOrdinaryPostFee()
	{
		return $this->secureTradeOrdinaryPostFee;
	}

	public function setSellRightNow($sellRightNow)
	{
		$this->sellRightNow = $sellRightNow;
		$this->apiParas["sell_right_now"] = $sellRightNow;
	}

	public function getSellRightNow()
	{
		return $this->sellRightNow;
	}

	public function setSellerPayPostfee($sellerPayPostfee)
	{
		$this->sellerPayPostfee = $sellerPayPostfee;
		$this->apiParas["seller_pay_postfee"] = $sellerPayPostfee;
	}

	public function getSellerPayPostfee()
	{
		return $this->sellerPayPostfee;
	}

	public function setServiceBeginTime($serviceBeginTime)
	{
		$this->serviceBeginTime = $serviceBeginTime;
		$this->apiParas["service_begin_time"] = $serviceBeginTime;
	}

	public function getServiceBeginTime()
	{
		return $this->serviceBeginTime;
	}

	public function setServiceEndTime($serviceEndTime)
	{
		$this->serviceEndTime = $serviceEndTime;
		$this->apiParas["service_end_time"] = $serviceEndTime;
	}

	public function getServiceEndTime()
	{
		return $this->serviceEndTime;
	}

	public function setShopCategoriesIdList($shopCategoriesIdList)
	{
		$this->shopCategoriesIdList = $shopCategoriesIdList;
		$this->apiParas["shop_categories_id_list"] = $shopCategoriesIdList;
	}

	public function getShopCategoriesIdList()
	{
		return $this->shopCategoriesIdList;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setSupplierList($supplierList)
	{
		$this->supplierList = $supplierList;
		$this->apiParas["supplier_list"] = $supplierList;
	}

	public function getSupplierList()
	{
		return $this->supplierList;
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

	public function setTuanPrice($tuanPrice)
	{
		$this->tuanPrice = $tuanPrice;
		$this->apiParas["tuan_price"] = $tuanPrice;
	}

	public function getTuanPrice()
	{
		return $this->tuanPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.hui.ltuan.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->limitNum,"limitNum");
		RequestCheckUtil::checkNotNull($this->longTitle,"longTitle");
		RequestCheckUtil::checkNotNull($this->oriPrice,"oriPrice");
		RequestCheckUtil::checkNotNull($this->prov,"prov");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->serviceBeginTime,"serviceBeginTime");
		RequestCheckUtil::checkNotNull($this->serviceEndTime,"serviceEndTime");
		RequestCheckUtil::checkNotNull($this->supplierList,"supplierList");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->tuanPrice,"tuanPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
