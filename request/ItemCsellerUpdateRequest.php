<?php
/**
 * TOP API: taobao.item.cseller.update request
 * 
 * @author auto create
 * @since 1.0, 2012-09-04 00:00:00
 */
class ItemCsellerUpdateRequest
{
	/** 
	 * 售后服务说明模板id
	 **/
	private $afterSaleId;
	
	/** 
	 * 商品上传后的状态。可选值:onsale（出售中）,instock（库中）;默认值:onsale
	 **/
	private $approveStatus;
	
	/** 
	 * 代充商品类型。只有少数类目下的商品可以标记上此字段，具体哪些类目可以上传可以通过taobao.itemcat.features.get获得。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型： 
no_mark(不做类型标记) 
time_card(点卡软件代充) 
fee_card(话费软件代充)
	 **/
	private $autoFill;
	
	/** 
	 * 自动重发。可选值:true,false;默认值:false(不重发)
	 **/
	private $autoRepost;
	
	/** 
	 * 叶子类目id
	 **/
	private $cid;
	
	/** 
	 * 货到付款运费模板ID
	 **/
	private $codPostageId;
	
	/** 
	 * 商品描述. 字数要大于5个字节，小于200000个字节 ，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 支持宝贝信息的删除,如需删除对应的食品安全信息中的储藏方法、保质期， 则应该设置此参数的值为：food_security.plan_storage,food_security.period; 各个参数的名称之间用【,】分割, 如果对应的参数有设置过值，即使在这个列表中，也不会被删除; 目前支持此功能的宝贝信息如下：食品安全信息所有字段、电子交易凭证字段（locality_life，locality_life.verification，locality_life.refund_ratio，locality_life.network_id ）
	 **/
	private $emptyFields;
	
	/** 
	 * ems费用。取值范围:0-100000000;精确到2位小数;单位:元。如:25.07，表示:25元7分
	 **/
	private $emsFee;
	
	/** 
	 * 快递费用。取值范围:0-100000000;精确到2位小数;单位:元。如:15.07，表示:15元7分
	 **/
	private $expressFee;
	
	/** 
	 * 宝贝特征值，格式为：
【key1:value1;key2:value2;key3:value3;】，key和value用【:】分隔，key&value之间用【;】分隔，只有在Top支持的特征值才能保存到宝贝上，目前支持的Key列表为：mysize_tp
	 **/
	private $features;
	
	/** 
	 * 运费承担方式。运费承担方式。可选值:seller（卖家承担）,buyer(买家承担);默认值:seller，卖家承担不用设置邮费和postage_id.买家承担的时候，必填邮费和postage_id ,如果用户设置了运费模板会优先使用运费模板，否则要同步设置邮费（post_fee,express_fee,ems_fee）。
	 **/
	private $freightPayer;
	
	/** 
	 * 针对全球购卖家的库存类型业务，
有两种库存类型：现货和代购
参数值为1时代表现货，值为2时代表代购
如果传值为这两个值之外的值，会报错;
如果不是全球购卖家，这两个值即使设置也不会处理
	 **/
	private $globalStockType;
	
	/** 
	 * 支持会员打折。可选值:true,false;默认值:false(不打折)
	 **/
	private $hasDiscount;
	
	/** 
	 * 是否有发票。可选值:true,false (商城卖家此字段必须为true);默认值:false(无发票)
	 **/
	private $hasInvoice;
	
	/** 
	 * 橱窗推荐。可选值:true,false;默认值:false(不推荐)
	 **/
	private $hasShowcase;
	
	/** 
	 * 是否有保修。可选值:true,false;默认值:false(不保修)
	 **/
	private $hasWarranty;
	
	/** 
	 * 加价幅度 如果为0，代表系统代理幅度
	 **/
	private $increment;
	
	/** 
	 * 用户的内店装修模板id
	 **/
	private $innerShopAuctionTemplateId;
	
	/** 
	 * 用户自行输入的类目属性ID串，结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
	 **/
	private $inputPids;
	
	/** 
	 * 用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5,Nike乔丹鞋;乔丹系列;乔丹鞋系列;乔丹鞋系列;json5”，多个自定义属性用','分割，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过3999字节。
	 **/
	private $inputStr;
	
	/** 
	 * 是否是3D
	 **/
	private $is3D;
	
	/** 
	 * 是否在外店显示
	 **/
	private $isEx;
	
	/** 
	 * 实物闪电发货。注：在售的闪电发货商品不允许取消闪电发货。如有需要，请下架商品后再去除闪电发货标记。
	 **/
	private $isLightningConsignment;
	
	/** 
	 * 是否替换sku
	 **/
	private $isReplaceSku;
	
	/** 
	 * 是否在淘宝显示
	 **/
	private $isTaobao;
	
	/** 
	 * 商品是否为新品。只有在当前类目开通新品,并且当前用户拥有该类目下发布新品权限时才能设置is_xinpin为true，否则设置true后会返回错误码:isv.invalid-permission:xinpin。同时只有一口价全新的宝贝才能设置为新品，否则会返回错误码：isv.invalid-parameter:xinpin。不设置该参数值则保持原有值。
	 **/
	private $isXinpin;
	
	/** 
	 * 特定种类的商品约束，以key：value的形式传入，以分号间隔。如食品安全需要输入：food_security.prd_license_no：12345;food_security.design_code：444;...。这些key：value可参考taobao.item.add的对应输入参数。
	 **/
	private $itemSpecProp;
	
	/** 
	 * 商品文字的版本，繁体传入”zh_HK”，简体传入”zh_CN”，不传默认为简体
	 **/
	private $lang;
	
	/** 
	 * 上架时间。如2008-05-26 09:12:00
	 **/
	private $listTime;
	
	/** 
	 * 本地生活电子交易凭证业务，目前此字段只涉及到的信息为有效期;
如果有效期为起止日期类型，此值为2012-08-06,2012-08-16
如果有效期为【购买成功日 至】类型则格式为2012-08-16
如果有效期为天数类型则格式为15
	 **/
	private $localityLifeExpirydate;
	
	/** 
	 * 码商信息，格式为 码商id:nick
	 **/
	private $localityLifeMerchant;
	
	/** 
	 * 网点ID,在参数empty_fields里设置locality_life.network_id可删除网点ID
	 **/
	private $localityLifeNetworkId;
	
	/** 
	 * 退款比例，百分比%前的数字,1-100的正整数值; 在参数empty_fields里设置locality_life.refund_ratio可删除退款比例
	 **/
	private $localityLifeRefundRatio;
	
	/** 
	 * 核销打款:1代表核销打款 0代表非核销打款; 在参数empty_fields里设置locality_life.verification可删除核销打款
	 **/
	private $localityLifeVerification;
	
	/** 
	 * 所在地城市。如杭州 具体可以用taobao.areas.get取到
	 **/
	private $locationCity;
	
	/** 
	 * 所在地省份。如浙江 具体可以用taobao.areas.get 取到
	 **/
	private $locationState;
	
	/** 
	 * 商品数量，取值范围:0-999999的整数。且需要等于Sku所有数量的和
	 **/
	private $num;
	
	/** 
	 * 商品数字ID，必选
	 **/
	private $numIid;
	
	/** 
	 * 商家编码
	 **/
	private $outerId;
	
	/** 
	 * 用户外店装修模板id
	 **/
	private $outerShopAuctionTemplateId;
	
	/** 
	 * 商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
	 **/
	private $picPath;
	
	/** 
	 * 平邮费用。取值范围:0-100000000;精确到2位小数;单位:元。如:5.07，表示:5元7分, 注:post_fee,express_fee,ems_fee需一起填写
	 **/
	private $postFee;
	
	/** 
	 * 宝贝所属的运费模板ID。取值范围：整数且必须是该卖家的运费模板的ID（可通过taobao.postages.get获得当前会话用户的所有邮费模板）
	 **/
	private $postageId;
	
	/** 
	 * 商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内。
	 **/
	private $price;
	
	/** 
	 * 属性值别名。如pid:vid:别名;pid1:vid1:别名1， pid:属性id vid:值id。总长度不超过512字节
	 **/
	private $propertyAlias;
	
	/** 
	 * 商品属性列表。格式:pid:vid;pid:vid。属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。 如果该类目下面没有属性，可以不用填写。如果有属性，必选属性必填，其他非必选属性可以选择不填写.属性不能超过35对。所有属性加起来包括分割符不能超过549字节，单个属性没有限制。 如果有属性是可输入的话，则用字段input_str填入属性的值。
	 **/
	private $props;
	
	/** 
	 * 秒杀商品类型。暂时不可用。打上秒杀标记的商品，用户只能下架并不能再上架，其他任何编辑或删除操作都不能进行。如果用户想取消秒杀标记，需要联系小二进行操作。如果秒杀结束需要自由编辑请联系活动负责人（小二）去掉秒杀标记。可选类型 
web_only(只能通过web网络秒杀) 
wap_only(只能通过wap网络秒杀) 
web_and_wap(既能通过web秒杀也能通过wap秒杀)
	 **/
	private $secondKill;
	
	/** 
	 * 是否承诺退换货服务!虚拟商品无须设置此项!
	 **/
	private $sellPromise;
	
	/** 
	 * 重新关联商品与店铺类目，结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。
	 **/
	private $sellerCids;
	
	/** 
	 * 宝贝形态:
1代表电子券;0或其他代表实物
	 **/
	private $shape;
	
	/** 
	 * sku的外不ids
	 **/
	private $skuOuterIds;
	
	/** 
	 * 更新的Sku的价格串，结构如：10.00,5.00,… 精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	private $skuPrices;
	
	/** 
	 * 更新的Sku的属性串，调用taobao.itemprops.get获取类目属性，如果属性是销售属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid;pid:vid,多个sku之间用逗号分隔。该字段内的销售属性(自定义的除外)也需要在props字段填写 . 规则：如果该SKU存在旧商品，则修改；否则新增Sku。如果更新时有对Sku进行操作，则Sku的properties一定要传入。如果存在自定义销售属性，则格式为pid:vid;pid2:vid2;$pText:vText，其中$pText:vText为自定义属性。限制：其中$pText的’$’前缀不能少，且pText和vText文本中不可以存在 冒号:和分号;以及逗号
	 **/
	private $skuProperties;
	
	/** 
	 * 更新的Sku的数量串，结构如：num1,num2,num3 如:2,3,4
	 **/
	private $skuQuantities;
	
	/** 
	 * 商品新旧程度。可选值:new（全新）,unused（闲置）,second（二手）。
	 **/
	private $stuffStatus;
	
	/** 
	 * 商品是否支持拍下减库存:1支持;2取消支持;0(默认)不更改
	 **/
	private $subStock;
	
	/** 
	 * 宝贝标题. 不能超过60字符,受违禁词控制
	 **/
	private $title;
	
	/** 
	 * 有效期。可选值:7,14;单位:天;默认值:14
	 **/
	private $validThru;
	
	/** 
	 * 商品的重量(商超卖家专用字段)
	 **/
	private $weight;
	
	private $apiParas = array();
	
	public function setAfterSaleId($afterSaleId)
	{
		$this->afterSaleId = $afterSaleId;
		$this->apiParas["after_sale_id"] = $afterSaleId;
	}

	public function getAfterSaleId()
	{
		return $this->afterSaleId;
	}

	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
	}

	public function setAutoFill($autoFill)
	{
		$this->autoFill = $autoFill;
		$this->apiParas["auto_fill"] = $autoFill;
	}

	public function getAutoFill()
	{
		return $this->autoFill;
	}

	public function setAutoRepost($autoRepost)
	{
		$this->autoRepost = $autoRepost;
		$this->apiParas["auto_repost"] = $autoRepost;
	}

	public function getAutoRepost()
	{
		return $this->autoRepost;
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

	public function setCodPostageId($codPostageId)
	{
		$this->codPostageId = $codPostageId;
		$this->apiParas["cod_postage_id"] = $codPostageId;
	}

	public function getCodPostageId()
	{
		return $this->codPostageId;
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

	public function setEmptyFields($emptyFields)
	{
		$this->emptyFields = $emptyFields;
		$this->apiParas["empty_fields"] = $emptyFields;
	}

	public function getEmptyFields()
	{
		return $this->emptyFields;
	}

	public function setEmsFee($emsFee)
	{
		$this->emsFee = $emsFee;
		$this->apiParas["ems_fee"] = $emsFee;
	}

	public function getEmsFee()
	{
		return $this->emsFee;
	}

	public function setExpressFee($expressFee)
	{
		$this->expressFee = $expressFee;
		$this->apiParas["express_fee"] = $expressFee;
	}

	public function getExpressFee()
	{
		return $this->expressFee;
	}

	public function setFeatures($features)
	{
		$this->features = $features;
		$this->apiParas["features"] = $features;
	}

	public function getFeatures()
	{
		return $this->features;
	}

	public function setFreightPayer($freightPayer)
	{
		$this->freightPayer = $freightPayer;
		$this->apiParas["freight_payer"] = $freightPayer;
	}

	public function getFreightPayer()
	{
		return $this->freightPayer;
	}

	public function setGlobalStockType($globalStockType)
	{
		$this->globalStockType = $globalStockType;
		$this->apiParas["global_stock_type"] = $globalStockType;
	}

	public function getGlobalStockType()
	{
		return $this->globalStockType;
	}

	public function setHasDiscount($hasDiscount)
	{
		$this->hasDiscount = $hasDiscount;
		$this->apiParas["has_discount"] = $hasDiscount;
	}

	public function getHasDiscount()
	{
		return $this->hasDiscount;
	}

	public function setHasInvoice($hasInvoice)
	{
		$this->hasInvoice = $hasInvoice;
		$this->apiParas["has_invoice"] = $hasInvoice;
	}

	public function getHasInvoice()
	{
		return $this->hasInvoice;
	}

	public function setHasShowcase($hasShowcase)
	{
		$this->hasShowcase = $hasShowcase;
		$this->apiParas["has_showcase"] = $hasShowcase;
	}

	public function getHasShowcase()
	{
		return $this->hasShowcase;
	}

	public function setHasWarranty($hasWarranty)
	{
		$this->hasWarranty = $hasWarranty;
		$this->apiParas["has_warranty"] = $hasWarranty;
	}

	public function getHasWarranty()
	{
		return $this->hasWarranty;
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

	public function setInnerShopAuctionTemplateId($innerShopAuctionTemplateId)
	{
		$this->innerShopAuctionTemplateId = $innerShopAuctionTemplateId;
		$this->apiParas["inner_shop_auction_template_id"] = $innerShopAuctionTemplateId;
	}

	public function getInnerShopAuctionTemplateId()
	{
		return $this->innerShopAuctionTemplateId;
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

	public function setInputStr($inputStr)
	{
		$this->inputStr = $inputStr;
		$this->apiParas["input_str"] = $inputStr;
	}

	public function getInputStr()
	{
		return $this->inputStr;
	}

	public function setIs3D($is3D)
	{
		$this->is3D = $is3D;
		$this->apiParas["is_3D"] = $is3D;
	}

	public function getIs3D()
	{
		return $this->is3D;
	}

	public function setIsEx($isEx)
	{
		$this->isEx = $isEx;
		$this->apiParas["is_ex"] = $isEx;
	}

	public function getIsEx()
	{
		return $this->isEx;
	}

	public function setIsLightningConsignment($isLightningConsignment)
	{
		$this->isLightningConsignment = $isLightningConsignment;
		$this->apiParas["is_lightning_consignment"] = $isLightningConsignment;
	}

	public function getIsLightningConsignment()
	{
		return $this->isLightningConsignment;
	}

	public function setIsReplaceSku($isReplaceSku)
	{
		$this->isReplaceSku = $isReplaceSku;
		$this->apiParas["is_replace_sku"] = $isReplaceSku;
	}

	public function getIsReplaceSku()
	{
		return $this->isReplaceSku;
	}

	public function setIsTaobao($isTaobao)
	{
		$this->isTaobao = $isTaobao;
		$this->apiParas["is_taobao"] = $isTaobao;
	}

	public function getIsTaobao()
	{
		return $this->isTaobao;
	}

	public function setIsXinpin($isXinpin)
	{
		$this->isXinpin = $isXinpin;
		$this->apiParas["is_xinpin"] = $isXinpin;
	}

	public function getIsXinpin()
	{
		return $this->isXinpin;
	}

	public function setItemSpecProp($itemSpecProp)
	{
		$this->itemSpecProp = $itemSpecProp;
		$this->apiParas["item_spec_prop"] = $itemSpecProp;
	}

	public function getItemSpecProp()
	{
		return $this->itemSpecProp;
	}

	public function setLang($lang)
	{
		$this->lang = $lang;
		$this->apiParas["lang"] = $lang;
	}

	public function getLang()
	{
		return $this->lang;
	}

	public function setListTime($listTime)
	{
		$this->listTime = $listTime;
		$this->apiParas["list_time"] = $listTime;
	}

	public function getListTime()
	{
		return $this->listTime;
	}

	public function setLocalityLifeExpirydate($localityLifeExpirydate)
	{
		$this->localityLifeExpirydate = $localityLifeExpirydate;
		$this->apiParas["locality_life.expirydate"] = $localityLifeExpirydate;
	}

	public function getLocalityLifeExpirydate()
	{
		return $this->localityLifeExpirydate;
	}

	public function setLocalityLifeMerchant($localityLifeMerchant)
	{
		$this->localityLifeMerchant = $localityLifeMerchant;
		$this->apiParas["locality_life.merchant"] = $localityLifeMerchant;
	}

	public function getLocalityLifeMerchant()
	{
		return $this->localityLifeMerchant;
	}

	public function setLocalityLifeNetworkId($localityLifeNetworkId)
	{
		$this->localityLifeNetworkId = $localityLifeNetworkId;
		$this->apiParas["locality_life.network_id"] = $localityLifeNetworkId;
	}

	public function getLocalityLifeNetworkId()
	{
		return $this->localityLifeNetworkId;
	}

	public function setLocalityLifeRefundRatio($localityLifeRefundRatio)
	{
		$this->localityLifeRefundRatio = $localityLifeRefundRatio;
		$this->apiParas["locality_life.refund_ratio"] = $localityLifeRefundRatio;
	}

	public function getLocalityLifeRefundRatio()
	{
		return $this->localityLifeRefundRatio;
	}

	public function setLocalityLifeVerification($localityLifeVerification)
	{
		$this->localityLifeVerification = $localityLifeVerification;
		$this->apiParas["locality_life.verification"] = $localityLifeVerification;
	}

	public function getLocalityLifeVerification()
	{
		return $this->localityLifeVerification;
	}

	public function setLocationCity($locationCity)
	{
		$this->locationCity = $locationCity;
		$this->apiParas["location.city"] = $locationCity;
	}

	public function getLocationCity()
	{
		return $this->locationCity;
	}

	public function setLocationState($locationState)
	{
		$this->locationState = $locationState;
		$this->apiParas["location.state"] = $locationState;
	}

	public function getLocationState()
	{
		return $this->locationState;
	}

	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
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

	public function setOuterShopAuctionTemplateId($outerShopAuctionTemplateId)
	{
		$this->outerShopAuctionTemplateId = $outerShopAuctionTemplateId;
		$this->apiParas["outer_shop_auction_template_id"] = $outerShopAuctionTemplateId;
	}

	public function getOuterShopAuctionTemplateId()
	{
		return $this->outerShopAuctionTemplateId;
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

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
	}

	public function setPostageId($postageId)
	{
		$this->postageId = $postageId;
		$this->apiParas["postage_id"] = $postageId;
	}

	public function getPostageId()
	{
		return $this->postageId;
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

	public function setPropertyAlias($propertyAlias)
	{
		$this->propertyAlias = $propertyAlias;
		$this->apiParas["property_alias"] = $propertyAlias;
	}

	public function getPropertyAlias()
	{
		return $this->propertyAlias;
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

	public function setSecondKill($secondKill)
	{
		$this->secondKill = $secondKill;
		$this->apiParas["second_kill"] = $secondKill;
	}

	public function getSecondKill()
	{
		return $this->secondKill;
	}

	public function setSellPromise($sellPromise)
	{
		$this->sellPromise = $sellPromise;
		$this->apiParas["sell_promise"] = $sellPromise;
	}

	public function getSellPromise()
	{
		return $this->sellPromise;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function setShape($shape)
	{
		$this->shape = $shape;
		$this->apiParas["shape"] = $shape;
	}

	public function getShape()
	{
		return $this->shape;
	}

	public function setSkuOuterIds($skuOuterIds)
	{
		$this->skuOuterIds = $skuOuterIds;
		$this->apiParas["sku_outer_ids"] = $skuOuterIds;
	}

	public function getSkuOuterIds()
	{
		return $this->skuOuterIds;
	}

	public function setSkuPrices($skuPrices)
	{
		$this->skuPrices = $skuPrices;
		$this->apiParas["sku_prices"] = $skuPrices;
	}

	public function getSkuPrices()
	{
		return $this->skuPrices;
	}

	public function setSkuProperties($skuProperties)
	{
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties()
	{
		return $this->skuProperties;
	}

	public function setSkuQuantities($skuQuantities)
	{
		$this->skuQuantities = $skuQuantities;
		$this->apiParas["sku_quantities"] = $skuQuantities;
	}

	public function getSkuQuantities()
	{
		return $this->skuQuantities;
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

	public function setSubStock($subStock)
	{
		$this->subStock = $subStock;
		$this->apiParas["sub_stock"] = $subStock;
	}

	public function getSubStock()
	{
		return $this->subStock;
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

	public function setValidThru($validThru)
	{
		$this->validThru = $validThru;
		$this->apiParas["valid_thru"] = $validThru;
	}

	public function getValidThru()
	{
		return $this->validThru;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function getApiMethodName()
	{
		return "taobao.item.cseller.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
		RequestCheckUtil::checkMaxLength($this->desc,200000,"desc");
		RequestCheckUtil::checkMaxLength($this->features,4000,"features");
		RequestCheckUtil::checkMaxValue($this->num,999999,"num");
		RequestCheckUtil::checkMinValue($this->num,0,"num");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,1,"numIid");
		RequestCheckUtil::checkMaxListSize($this->sellerCids,10,"sellerCids");
		RequestCheckUtil::checkMaxListSize($this->skuPrices,1000,"skuPrices");
		RequestCheckUtil::checkMaxLength($this->title,60,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
