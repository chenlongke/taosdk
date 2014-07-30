<?php
/**
 * TOP API: taobao.promotion.coupon.template.sync request
 * 
 * @author auto create
 * @since 1.0, 2014-02-26 00:00:00
 */
class PromotionCouponTemplateSyncRequest
{
	/** 
	 * 卡券的面额，单位为分
	 **/
	private $amount;
	
	/** 
	 * 卡券可被领取的结束时间
	 **/
	private $applyEndTime;
	
	/** 
	 * 卡券可被领取的开始时间
	 **/
	private $applyStartTime;
	
	/** 
	 * 品牌的id，如星巴克的id
	 **/
	private $brandId;
	
	/** 
	 * 品牌logo图片地址，默认在图片空间的相对路径
	 **/
	private $brandLogo;
	
	/** 
	 * 品牌的名称，如星巴克
	 **/
	private $brandName;
	
	/** 
	 * 品牌所属的类型
0.	未分组
1.	餐饮
2.	娱乐
3.	购物
4.	生活
5.	酒店
6.	航旅
	 **/
	private $brandType;
	
	/** 
	 * 需要分配给各个应用：
5：丁丁
	 **/
	private $businessUnit;
	
	/** 
	 * 是否支持随时退款
	 **/
	private $canAnyTimeRefund;
	
	/** 
	 * 是否过期可退款
	 **/
	private $canExpiredRefund;
	
	/** 
	 * 卡券是否可以转赠
	 **/
	private $canTransfer;
	
	/** 
	 * 优惠券的属性标，多个标已","分开
	 **/
	private $couponTag;
	
	/** 
	 * 卡券的类型
9：丁丁o2o优惠券
	 **/
	private $couponType;
	
	/** 
	 * 券的有效期描述，与startTime和endTime互斥，但两者必须填写一个
	 **/
	private $effectiveDescription;
	
	/** 
	 * 券的失效时间
	 **/
	private $endTime;
	
	/** 
	 * 卡券的使用说明介绍
	 **/
	private $instruction;
	
	/** 
	 * 是否支持门店
	 **/
	private $isSupportStore;
	
	/** 
	 * 卡券的一段描述，比如店庆的活动信息
	 **/
	private $memo;
	
	/** 
	 * 是否需要预约标记位
	 **/
	private $needBooking;
	
	/** 
	 * 卡券售卖原价，单位为分
	 **/
	private $oriPrice;
	
	/** 
	 * 外部券（电子凭证实例）的标识id
	 **/
	private $outCouponId;
	
	/** 
	 * 外部券（电子凭证）类型
	 **/
	private $outCouponType;
	
	/** 
	 * 券的图片地址，地址默认是淘宝图片空间中的相对路径，多个图片用";"隔开
	 **/
	private $pictures;
	
	/** 
	 * 卡券使用需满足的门槛金额，单位为分
	 **/
	private $startFee;
	
	/** 
	 * 券的可使用时间
	 **/
	private $startTime;
	
	/** 
	 * 券状态
1.有效、-1.失效
	 **/
	private $status;
	
	/** 
	 * 门店的信息，采用key-value的方式，
key信息：
storeId:门店id,Long,必填
city：市 6位编码，int,必填
district：区域编码,6位区域编码，int,必填
brandName:品牌名（肯德基，必胜客等）,String
name:店名,可与品牌名相同（肯德基某某店）,String,必填
subName:分店名（杭州店）,String
byName:别名（kfc）,String
picture:商户主图, 图片空间的相对url,String
address:地址（不包含省市区）,String,必填
contact:联系方式,可以是电话,手机,区号非必须,如果要加区号以-链接,多个号码之间用","拼接（区号不必须）,String,必填
category:本地通后台类目ID,Long,必填
posx:经度（小数点后5位）,Double
posy:纬度（小数点后5位）,Double
outerStoreId:外部门店主键,String,必填
source:同outCouponType,Integer,必填
services:支持的服务多个用','分割,String
level:星级,1,2,3,4,5 , Integer,必填
perPrice:人均消费,Double,必填
recomment:推荐菜,美食类目上传多个用','分割,String
businessTime:营业时间,格式:11:00-24:00,String
traffic:交通信息,String
userId:创建人ID,淘宝用户ID(supplierId),Long
	 **/
	private $storeInfos;
	
	/** 
	 * 是否同步到附近
	 **/
	private $syncToNearby;
	
	/** 
	 * 卡券的标题
	 **/
	private $title;
	
	/** 
	 * 卡券的发放总量
	 **/
	private $totalCount;
	
	/** 
	 * 卡券售价，单位为分
	 **/
	private $tradePrice;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setApplyEndTime($applyEndTime)
	{
		$this->applyEndTime = $applyEndTime;
		$this->apiParas["apply_end_time"] = $applyEndTime;
	}

	public function getApplyEndTime()
	{
		return $this->applyEndTime;
	}

	public function setApplyStartTime($applyStartTime)
	{
		$this->applyStartTime = $applyStartTime;
		$this->apiParas["apply_start_time"] = $applyStartTime;
	}

	public function getApplyStartTime()
	{
		return $this->applyStartTime;
	}

	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setBrandLogo($brandLogo)
	{
		$this->brandLogo = $brandLogo;
		$this->apiParas["brand_logo"] = $brandLogo;
	}

	public function getBrandLogo()
	{
		return $this->brandLogo;
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

	public function setBrandType($brandType)
	{
		$this->brandType = $brandType;
		$this->apiParas["brand_type"] = $brandType;
	}

	public function getBrandType()
	{
		return $this->brandType;
	}

	public function setBusinessUnit($businessUnit)
	{
		$this->businessUnit = $businessUnit;
		$this->apiParas["business_unit"] = $businessUnit;
	}

	public function getBusinessUnit()
	{
		return $this->businessUnit;
	}

	public function setCanAnyTimeRefund($canAnyTimeRefund)
	{
		$this->canAnyTimeRefund = $canAnyTimeRefund;
		$this->apiParas["can_any_time_refund"] = $canAnyTimeRefund;
	}

	public function getCanAnyTimeRefund()
	{
		return $this->canAnyTimeRefund;
	}

	public function setCanExpiredRefund($canExpiredRefund)
	{
		$this->canExpiredRefund = $canExpiredRefund;
		$this->apiParas["can_expired_refund"] = $canExpiredRefund;
	}

	public function getCanExpiredRefund()
	{
		return $this->canExpiredRefund;
	}

	public function setCanTransfer($canTransfer)
	{
		$this->canTransfer = $canTransfer;
		$this->apiParas["can_transfer"] = $canTransfer;
	}

	public function getCanTransfer()
	{
		return $this->canTransfer;
	}

	public function setCouponTag($couponTag)
	{
		$this->couponTag = $couponTag;
		$this->apiParas["coupon_tag"] = $couponTag;
	}

	public function getCouponTag()
	{
		return $this->couponTag;
	}

	public function setCouponType($couponType)
	{
		$this->couponType = $couponType;
		$this->apiParas["coupon_type"] = $couponType;
	}

	public function getCouponType()
	{
		return $this->couponType;
	}

	public function setEffectiveDescription($effectiveDescription)
	{
		$this->effectiveDescription = $effectiveDescription;
		$this->apiParas["effective_description"] = $effectiveDescription;
	}

	public function getEffectiveDescription()
	{
		return $this->effectiveDescription;
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

	public function setInstruction($instruction)
	{
		$this->instruction = $instruction;
		$this->apiParas["instruction"] = $instruction;
	}

	public function getInstruction()
	{
		return $this->instruction;
	}

	public function setIsSupportStore($isSupportStore)
	{
		$this->isSupportStore = $isSupportStore;
		$this->apiParas["is_support_store"] = $isSupportStore;
	}

	public function getIsSupportStore()
	{
		return $this->isSupportStore;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setNeedBooking($needBooking)
	{
		$this->needBooking = $needBooking;
		$this->apiParas["need_booking"] = $needBooking;
	}

	public function getNeedBooking()
	{
		return $this->needBooking;
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

	public function setOutCouponId($outCouponId)
	{
		$this->outCouponId = $outCouponId;
		$this->apiParas["out_coupon_id"] = $outCouponId;
	}

	public function getOutCouponId()
	{
		return $this->outCouponId;
	}

	public function setOutCouponType($outCouponType)
	{
		$this->outCouponType = $outCouponType;
		$this->apiParas["out_coupon_type"] = $outCouponType;
	}

	public function getOutCouponType()
	{
		return $this->outCouponType;
	}

	public function setPictures($pictures)
	{
		$this->pictures = $pictures;
		$this->apiParas["pictures"] = $pictures;
	}

	public function getPictures()
	{
		return $this->pictures;
	}

	public function setStartFee($startFee)
	{
		$this->startFee = $startFee;
		$this->apiParas["start_fee"] = $startFee;
	}

	public function getStartFee()
	{
		return $this->startFee;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStoreInfos($storeInfos)
	{
		$this->storeInfos = $storeInfos;
		$this->apiParas["store_infos"] = $storeInfos;
	}

	public function getStoreInfos()
	{
		return $this->storeInfos;
	}

	public function setSyncToNearby($syncToNearby)
	{
		$this->syncToNearby = $syncToNearby;
		$this->apiParas["sync_to_nearby"] = $syncToNearby;
	}

	public function getSyncToNearby()
	{
		return $this->syncToNearby;
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

	public function setTotalCount($totalCount)
	{
		$this->totalCount = $totalCount;
		$this->apiParas["total_count"] = $totalCount;
	}

	public function getTotalCount()
	{
		return $this->totalCount;
	}

	public function setTradePrice($tradePrice)
	{
		$this->tradePrice = $tradePrice;
		$this->apiParas["trade_price"] = $tradePrice;
	}

	public function getTradePrice()
	{
		return $this->tradePrice;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.coupon.template.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->applyEndTime,"applyEndTime");
		RequestCheckUtil::checkNotNull($this->applyStartTime,"applyStartTime");
		RequestCheckUtil::checkMaxLength($this->brandName,128,"brandName");
		RequestCheckUtil::checkNotNull($this->businessUnit,"businessUnit");
		RequestCheckUtil::checkNotNull($this->couponType,"couponType");
		RequestCheckUtil::checkMaxLength($this->instruction,2000,"instruction");
		RequestCheckUtil::checkNotNull($this->isSupportStore,"isSupportStore");
		RequestCheckUtil::checkMaxLength($this->memo,512,"memo");
		RequestCheckUtil::checkNotNull($this->outCouponId,"outCouponId");
		RequestCheckUtil::checkNotNull($this->outCouponType,"outCouponType");
		RequestCheckUtil::checkMaxLength($this->pictures,1024,"pictures");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkMaxListSize($this->storeInfos,100,"storeInfos");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,128,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
