<?php
/**
 * TOP API: taobao.ju.item.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-04 00:00:00
 */
class JuItemAddRequest
{
	/** 
	 * 商家活动报名Id。目前需要调用方通过商家后台查询得到后设置该入参值。
	 **/
	private $activityEnterId;
	
	/** 
	 * 团购价格，单位元,精确到小数点后两位。必须大于0，小于原价
	 **/
	private $activityPrice;
	
	/** 
	 * 聚划算报名资质图片，使用“,”分隔，默认取前4个有效图片。格式:jpg、jpeg、gif、png 分辨率不小于960 x 640 图片大小在1M以下。请先使用多媒体API上传图片获取图片路径，截取如示例的格式后组装参数传入。
	 **/
	private $certificatePics;
	
	/** 
	 * 该参数已作废。只需设置related_city参数即可。所在城市如全国，北京，杭州等。如果是商品团，默认全国。如果报名生活团商品必选。请先调用区域城市接口获取城市数据。与页面报名逻辑一致，该城市参数会根据后台配置的可供选择的城市进行过滤。
	 **/
	private $city;
	
	/** 
	 * 目的地。聚划算旅游酒店类目必填。
	 **/
	private $destinyArea;
	
	/** 
	 * 是否是当日达。只对生活团有效。1支持当日达，-1不支持当日达。默认-1；
	 **/
	private $drd;
	
	/** 
	 * 聚划算报名附图地址，使用“,”分隔，默认取前4个有效图片地址。格式:jpg、jpeg、gif、png 分辨率不小于960 x 640 图片大小在1M以下。请先使用多媒体API上传图片获取图片路径，截取如示例的格式后组装参数传入。
	 **/
	private $extraPics;
	
	/** 
	 * 商品是否需要入仓。如果商品所属类目是服饰、家纺、鞋、包、母婴用品必须入仓。默认0，不入仓
	 **/
	private $isInBarn;
	
	/** 
	 * 本次团购提供的商品数量。
	 **/
	private $itemCount;
	
	/** 
	 * 商品描述，默认取淘宝商品描述。最大25000个字符。
	 **/
	private $itemDesc;
	
	/** 
	 * 淘宝商品ID
	 **/
	private $itemId;
	
	/** 
	 * 每个用户限购的数量。大于等于1，小于团购总数量。
	 **/
	private $limitNum;
	
	/** 
	 * 卖点/特性，原名叫宝贝长名称，长度改成与页面报名一致80个字。默认取淘宝商品名称。不能包含#$^&\等字符。
	 **/
	private $longName;
	
	/** 
	 * 商品主图，格式:jpg、jpeg、gif、png
分辨率不小于960 x 640
图片大小在1M以下
	 **/
	private $mainPic;
	
	/** 
	 * 申请多城原因，最大长度20个字。只对生活团商品有效。如果是商品团，该字段将被忽略。
	 **/
	private $multiCityReason;
	
	/** 
	 * 点评/口碑等上的评价, 最大长度200个字。只对生活团商品有效。如果是商品团，该字段将被忽略。
	 **/
	private $opinion;
	
	/** 
	 * 平台ID,目前只支持聚划算平台，id=1001
	 **/
	private $platformId;
	
	/** 
	 * 是否包邮，0不包邮，1包邮。默认1
	 **/
	private $postage;
	
	/** 
	 * 是否入仓后质检。0不质检，1质检。默认值0，不需要质检。
	 **/
	private $qc;
	
	/** 
	 * 报名商品是食品类目时，可以传入QS码。可选
	 **/
	private $qsCode;
	
	/** 
	 * 如果是生活团资质卖家，可以设置当前宝贝是否为推荐宝贝。推荐数量是有限的。0不推荐，1推荐。
	 **/
	private $recommend;
	
	/** 
	 * 关联城市，规则跟页面报名一致，会根据后台配置进行过滤，生活汇电子凭证商品报名，报名城市通过商品关联的商户来提取相关报名城市，不支持卖家自我选择。此情况该参数无效。城市统一用code，即拼音，是唯一值。
	 **/
	private $relatedCity;
	
	/** 
	 * 排期建议原因,最大长度40个字。只对生活团商品有效，如果是商品团，该字段将被忽略。
	 **/
	private $scheduleAdvice;
	
	/** 
	 * 宝贝标题，原名叫宝贝短名称，改成和页面一致26个字。不能包含#$^&\等字符。
	 **/
	private $shortName;
	
	/** 
	 * 出发地。聚划算旅游酒店类目必填。
	 **/
	private $startArea;
	
	/** 
	 * 商品亮点优势: 最大长度200个字。只对生活团商品有效。如果是商品团，该字段将被忽略。
	 **/
	private $strength;
	
	/** 
	 * 免审商品必须指定开团结束时间。如果是非免审商品，改参数将被忽略。
	 **/
	private $tgEndDate;
	
	/** 
	 * 历史团购网址,最大长度200个字。只对生活团商品有效。如果是商品团，该字段将被忽略。
	 **/
	private $tgHistory;
	
	/** 
	 * 免审商品必须指定开团开始时间。如果是非免审商品，改参数将被忽略。
	 **/
	private $tgStartDate;
	
	/** 
	 * 旅游形式：聚划算旅游酒店类目且选择境内游，境外游的时候必填。
枚举值：1：跟团:2：自由行
	 **/
	private $tripFormType;
	
	/** 
	 * 旅行时间：枚举值。境内游且跟团的时候必填。
1:一日，
2:二日，
3:三日以上
	 **/
	private $tripLength;
	
	/** 
	 * 聚划算旅游酒店类目必填。旅游类型值。
1：境内游2：境外游3：酒店住宿
4：机票
5：景点门票
6：邮轮游
	 **/
	private $tripTypeValue;
	
	/** 
	 * 该参数含义已变为，0不参加优惠，1参加全部优惠。该参数在商品不支持购物车时无效。参数原含义：参加店铺活动设置。3参加全部活动，2参加指定活动,1不参加活动。默认参加全部活动。
	 **/
	private $ump;
	
	/** 
	 * 该参数已废除。与页面报名设置一致，只有ump参数有效，请参考ump参数。原含义：店铺活动方式。入参按位表示法方向从右往左。第1位：1满就送,0非满就送，以此类推，第2位：优惠券，第三位：全部店铺活动。ump入参为3或2的时候必填。参考ump入参说明。默认值0
	 **/
	private $umpFormType;
	
	/** 
	 * 聚划算报名商品视频URL地址。视频地址必须是淘花视频或符合食品链接规则。列如http://cloud.video.taobao.com/video/play/v/233/sid/2/f/v.swf
	 **/
	private $videoUrl;
	
	private $apiParas = array();
	
	public function setActivityEnterId($activityEnterId)
	{
		$this->activityEnterId = $activityEnterId;
		$this->apiParas["activity_enter_id"] = $activityEnterId;
	}

	public function getActivityEnterId()
	{
		return $this->activityEnterId;
	}

	public function setActivityPrice($activityPrice)
	{
		$this->activityPrice = $activityPrice;
		$this->apiParas["activity_price"] = $activityPrice;
	}

	public function getActivityPrice()
	{
		return $this->activityPrice;
	}

	public function setCertificatePics($certificatePics)
	{
		$this->certificatePics = $certificatePics;
		$this->apiParas["certificate_pics"] = $certificatePics;
	}

	public function getCertificatePics()
	{
		return $this->certificatePics;
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

	public function setDestinyArea($destinyArea)
	{
		$this->destinyArea = $destinyArea;
		$this->apiParas["destiny_area"] = $destinyArea;
	}

	public function getDestinyArea()
	{
		return $this->destinyArea;
	}

	public function setDrd($drd)
	{
		$this->drd = $drd;
		$this->apiParas["drd"] = $drd;
	}

	public function getDrd()
	{
		return $this->drd;
	}

	public function setExtraPics($extraPics)
	{
		$this->extraPics = $extraPics;
		$this->apiParas["extra_pics"] = $extraPics;
	}

	public function getExtraPics()
	{
		return $this->extraPics;
	}

	public function setIsInBarn($isInBarn)
	{
		$this->isInBarn = $isInBarn;
		$this->apiParas["is_in_barn"] = $isInBarn;
	}

	public function getIsInBarn()
	{
		return $this->isInBarn;
	}

	public function setItemCount($itemCount)
	{
		$this->itemCount = $itemCount;
		$this->apiParas["item_count"] = $itemCount;
	}

	public function getItemCount()
	{
		return $this->itemCount;
	}

	public function setItemDesc($itemDesc)
	{
		$this->itemDesc = $itemDesc;
		$this->apiParas["item_desc"] = $itemDesc;
	}

	public function getItemDesc()
	{
		return $this->itemDesc;
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

	public function setLimitNum($limitNum)
	{
		$this->limitNum = $limitNum;
		$this->apiParas["limit_num"] = $limitNum;
	}

	public function getLimitNum()
	{
		return $this->limitNum;
	}

	public function setLongName($longName)
	{
		$this->longName = $longName;
		$this->apiParas["long_name"] = $longName;
	}

	public function getLongName()
	{
		return $this->longName;
	}

	public function setMainPic($mainPic)
	{
		$this->mainPic = $mainPic;
		$this->apiParas["main_pic"] = $mainPic;
	}

	public function getMainPic()
	{
		return $this->mainPic;
	}

	public function setMultiCityReason($multiCityReason)
	{
		$this->multiCityReason = $multiCityReason;
		$this->apiParas["multi_city_reason"] = $multiCityReason;
	}

	public function getMultiCityReason()
	{
		return $this->multiCityReason;
	}

	public function setOpinion($opinion)
	{
		$this->opinion = $opinion;
		$this->apiParas["opinion"] = $opinion;
	}

	public function getOpinion()
	{
		return $this->opinion;
	}

	public function setPlatformId($platformId)
	{
		$this->platformId = $platformId;
		$this->apiParas["platform_id"] = $platformId;
	}

	public function getPlatformId()
	{
		return $this->platformId;
	}

	public function setPostage($postage)
	{
		$this->postage = $postage;
		$this->apiParas["postage"] = $postage;
	}

	public function getPostage()
	{
		return $this->postage;
	}

	public function setQc($qc)
	{
		$this->qc = $qc;
		$this->apiParas["qc"] = $qc;
	}

	public function getQc()
	{
		return $this->qc;
	}

	public function setQsCode($qsCode)
	{
		$this->qsCode = $qsCode;
		$this->apiParas["qs_code"] = $qsCode;
	}

	public function getQsCode()
	{
		return $this->qsCode;
	}

	public function setRecommend($recommend)
	{
		$this->recommend = $recommend;
		$this->apiParas["recommend"] = $recommend;
	}

	public function getRecommend()
	{
		return $this->recommend;
	}

	public function setRelatedCity($relatedCity)
	{
		$this->relatedCity = $relatedCity;
		$this->apiParas["related_city"] = $relatedCity;
	}

	public function getRelatedCity()
	{
		return $this->relatedCity;
	}

	public function setScheduleAdvice($scheduleAdvice)
	{
		$this->scheduleAdvice = $scheduleAdvice;
		$this->apiParas["schedule_advice"] = $scheduleAdvice;
	}

	public function getScheduleAdvice()
	{
		return $this->scheduleAdvice;
	}

	public function setShortName($shortName)
	{
		$this->shortName = $shortName;
		$this->apiParas["short_name"] = $shortName;
	}

	public function getShortName()
	{
		return $this->shortName;
	}

	public function setStartArea($startArea)
	{
		$this->startArea = $startArea;
		$this->apiParas["start_area"] = $startArea;
	}

	public function getStartArea()
	{
		return $this->startArea;
	}

	public function setStrength($strength)
	{
		$this->strength = $strength;
		$this->apiParas["strength"] = $strength;
	}

	public function getStrength()
	{
		return $this->strength;
	}

	public function setTgEndDate($tgEndDate)
	{
		$this->tgEndDate = $tgEndDate;
		$this->apiParas["tg_end_date"] = $tgEndDate;
	}

	public function getTgEndDate()
	{
		return $this->tgEndDate;
	}

	public function setTgHistory($tgHistory)
	{
		$this->tgHistory = $tgHistory;
		$this->apiParas["tg_history"] = $tgHistory;
	}

	public function getTgHistory()
	{
		return $this->tgHistory;
	}

	public function setTgStartDate($tgStartDate)
	{
		$this->tgStartDate = $tgStartDate;
		$this->apiParas["tg_start_date"] = $tgStartDate;
	}

	public function getTgStartDate()
	{
		return $this->tgStartDate;
	}

	public function setTripFormType($tripFormType)
	{
		$this->tripFormType = $tripFormType;
		$this->apiParas["trip_form_type"] = $tripFormType;
	}

	public function getTripFormType()
	{
		return $this->tripFormType;
	}

	public function setTripLength($tripLength)
	{
		$this->tripLength = $tripLength;
		$this->apiParas["trip_length"] = $tripLength;
	}

	public function getTripLength()
	{
		return $this->tripLength;
	}

	public function setTripTypeValue($tripTypeValue)
	{
		$this->tripTypeValue = $tripTypeValue;
		$this->apiParas["trip_type_value"] = $tripTypeValue;
	}

	public function getTripTypeValue()
	{
		return $this->tripTypeValue;
	}

	public function setUmp($ump)
	{
		$this->ump = $ump;
		$this->apiParas["ump"] = $ump;
	}

	public function getUmp()
	{
		return $this->ump;
	}

	public function setUmpFormType($umpFormType)
	{
		$this->umpFormType = $umpFormType;
		$this->apiParas["ump_form_type"] = $umpFormType;
	}

	public function getUmpFormType()
	{
		return $this->umpFormType;
	}

	public function setVideoUrl($videoUrl)
	{
		$this->videoUrl = $videoUrl;
		$this->apiParas["video_url"] = $videoUrl;
	}

	public function getVideoUrl()
	{
		return $this->videoUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityEnterId,"activityEnterId");
		RequestCheckUtil::checkNotNull($this->activityPrice,"activityPrice");
		RequestCheckUtil::checkMaxValue($this->drd,1,"drd");
		RequestCheckUtil::checkMinValue($this->drd,-1,"drd");
		RequestCheckUtil::checkMaxValue($this->isInBarn,1,"isInBarn");
		RequestCheckUtil::checkMinValue($this->isInBarn,0,"isInBarn");
		RequestCheckUtil::checkNotNull($this->itemCount,"itemCount");
		RequestCheckUtil::checkMinValue($this->itemCount,1,"itemCount");
		RequestCheckUtil::checkMaxLength($this->itemDesc,25000,"itemDesc");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMinValue($this->itemId,1,"itemId");
		RequestCheckUtil::checkNotNull($this->limitNum,"limitNum");
		RequestCheckUtil::checkMinValue($this->limitNum,1,"limitNum");
		RequestCheckUtil::checkNotNull($this->longName,"longName");
		RequestCheckUtil::checkMaxLength($this->longName,80,"longName");
		RequestCheckUtil::checkNotNull($this->mainPic,"mainPic");
		RequestCheckUtil::checkMaxLength($this->multiCityReason,20,"multiCityReason");
		RequestCheckUtil::checkMaxLength($this->opinion,200,"opinion");
		RequestCheckUtil::checkNotNull($this->platformId,"platformId");
		RequestCheckUtil::checkMaxValue($this->platformId,9999999,"platformId");
		RequestCheckUtil::checkMinValue($this->platformId,1,"platformId");
		RequestCheckUtil::checkMaxValue($this->postage,1,"postage");
		RequestCheckUtil::checkMinValue($this->postage,0,"postage");
		RequestCheckUtil::checkMaxValue($this->qc,1,"qc");
		RequestCheckUtil::checkMinValue($this->qc,0,"qc");
		RequestCheckUtil::checkMaxValue($this->recommend,1,"recommend");
		RequestCheckUtil::checkMinValue($this->recommend,0,"recommend");
		RequestCheckUtil::checkMaxLength($this->scheduleAdvice,40,"scheduleAdvice");
		RequestCheckUtil::checkNotNull($this->shortName,"shortName");
		RequestCheckUtil::checkMaxLength($this->shortName,26,"shortName");
		RequestCheckUtil::checkMaxLength($this->strength,200,"strength");
		RequestCheckUtil::checkMaxLength($this->tgHistory,200,"tgHistory");
		RequestCheckUtil::checkMaxValue($this->tripFormType,2,"tripFormType");
		RequestCheckUtil::checkMinValue($this->tripFormType,1,"tripFormType");
		RequestCheckUtil::checkMaxValue($this->tripLength,3,"tripLength");
		RequestCheckUtil::checkMinValue($this->tripLength,1,"tripLength");
		RequestCheckUtil::checkMaxValue($this->tripTypeValue,6,"tripTypeValue");
		RequestCheckUtil::checkMinValue($this->tripTypeValue,1,"tripTypeValue");
		RequestCheckUtil::checkMaxValue($this->ump,1,"ump");
		RequestCheckUtil::checkMinValue($this->ump,0,"ump");
		RequestCheckUtil::checkMaxValue($this->umpFormType,111,"umpFormType");
		RequestCheckUtil::checkMinValue($this->umpFormType,0,"umpFormType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
