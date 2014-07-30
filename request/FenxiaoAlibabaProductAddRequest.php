<?php
/**
 * TOP API: taobao.fenxiao.alibaba.product.add request
 * 
 * @author auto create
 * @since 1.0, 2011-09-22 00:00:00
 */
class FenxiaoAlibabaProductAddRequest
{
	/** 
	 * 警戒库存必须是0到29999。
	 **/
	private $alarmNumber;
	
	/** 
	 * 所属类目id，参考Taobao.itemcats.get，不支持成人等类目，输入成人类目id保存提示类目属性错误。
	 **/
	private $categoryId;
	
	/** 
	 * 所在地：市，例：“杭州”
	 **/
	private $city;
	
	/** 
	 * 产品描述，长度为5到25000字符。
	 **/
	private $desc;
	
	/** 
	 * 是否有保修，可选值：false（否）、true（是），默认false。
	 **/
	private $haveGuarantee;
	
	/** 
	 * 是否有发票，可选值：false（否）、true（是），默认false。
	 **/
	private $haveInvoice;
	
	/** 
	 * 图片，图片大小：120K, 类型：有效的图片格式。
	 **/
	private $image;
	
	/** 
	 * 是否需要授权， 
isAuthz:yes|no 
yes:需要授权 
no:不需要授权 
默认是需要授权
	 **/
	private $isAuthz;
	
	/** 
	 * 产品名称，长度不超过60个字节。
	 **/
	private $name;
	
	/** 
	 * 商家编码，长度不能超过60个字节。
	 **/
	private $outerId;
	
	/** 
	 * ems费用，单位：元。例：“10.56”。 大小为0.00元到999999元之间。
	 **/
	private $postageEms;
	
	/** 
	 * 快递费用，单位：元。例：“10.56”。 大小为0.01元到999999元之间。
	 **/
	private $postageFast;
	
	/** 
	 * 运费模板ID，参考taobao.postages.get。
	 **/
	private $postageId;
	
	/** 
	 * 平邮费用，单位：元。例：“10.56”。 大小为0.01元到999999元之间。
	 **/
	private $postageOrdinary;
	
	/** 
	 * 运费类型，可选值：seller（供应商承担运费）、buyer（分销商承担运费）,默认seller。
	 **/
	private $postageType;
	
	/** 
	 * 产品线ID
	 **/
	private $productcatId;
	
	/** 
	 * 所在地：省，例：“浙江”
	 **/
	private $prov;
	
	/** 
	 * 产品库存必须是0到999999。
	 **/
	private $quantity;
	
	/** 
	 * 标准价格，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $standardPrice;
	
	/** 
	 * 在分销平台上的供应商ID
	 **/
	private $supplierId;
	
	/** 
	 * 分销方式：AGENT（只做代销，默认值）、DEALER（只做经销）、ALL（代销和经销都做）
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setAlarmNumber($alarmNumber)
	{
		$this->alarmNumber = $alarmNumber;
		$this->apiParas["alarm_number"] = $alarmNumber;
	}

	public function getAlarmNumber()
	{
		return $this->alarmNumber;
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

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setHaveGuarantee($haveGuarantee)
	{
		$this->haveGuarantee = $haveGuarantee;
		$this->apiParas["have_guarantee"] = $haveGuarantee;
	}

	public function getHaveGuarantee()
	{
		return $this->haveGuarantee;
	}

	public function setHaveInvoice($haveInvoice)
	{
		$this->haveInvoice = $haveInvoice;
		$this->apiParas["have_invoice"] = $haveInvoice;
	}

	public function getHaveInvoice()
	{
		return $this->haveInvoice;
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

	public function setIsAuthz($isAuthz)
	{
		$this->isAuthz = $isAuthz;
		$this->apiParas["is_authz"] = $isAuthz;
	}

	public function getIsAuthz()
	{
		return $this->isAuthz;
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

	public function setPostageEms($postageEms)
	{
		$this->postageEms = $postageEms;
		$this->apiParas["postage_ems"] = $postageEms;
	}

	public function getPostageEms()
	{
		return $this->postageEms;
	}

	public function setPostageFast($postageFast)
	{
		$this->postageFast = $postageFast;
		$this->apiParas["postage_fast"] = $postageFast;
	}

	public function getPostageFast()
	{
		return $this->postageFast;
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

	public function setPostageOrdinary($postageOrdinary)
	{
		$this->postageOrdinary = $postageOrdinary;
		$this->apiParas["postage_ordinary"] = $postageOrdinary;
	}

	public function getPostageOrdinary()
	{
		return $this->postageOrdinary;
	}

	public function setPostageType($postageType)
	{
		$this->postageType = $postageType;
		$this->apiParas["postage_type"] = $postageType;
	}

	public function getPostageType()
	{
		return $this->postageType;
	}

	public function setProductcatId($productcatId)
	{
		$this->productcatId = $productcatId;
		$this->apiParas["productcat_id"] = $productcatId;
	}

	public function getProductcatId()
	{
		return $this->productcatId;
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

	public function setStandardPrice($standardPrice)
	{
		$this->standardPrice = $standardPrice;
		$this->apiParas["standard_price"] = $standardPrice;
	}

	public function getStandardPrice()
	{
		return $this->standardPrice;
	}

	public function setSupplierId($supplierId)
	{
		$this->supplierId = $supplierId;
		$this->apiParas["supplier_id"] = $supplierId;
	}

	public function getSupplierId()
	{
		return $this->supplierId;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.alibaba.product.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alarmNumber,"alarmNumber");
		RequestCheckUtil::checkMaxValue($this->alarmNumber,30000,"alarmNumber");
		RequestCheckUtil::checkMinValue($this->alarmNumber,0,"alarmNumber");
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->haveGuarantee,"haveGuarantee");
		RequestCheckUtil::checkNotNull($this->haveInvoice,"haveInvoice");
		RequestCheckUtil::checkNotNull($this->image,"image");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->outerId,60,"outerId");
		RequestCheckUtil::checkNotNull($this->postageType,"postageType");
		RequestCheckUtil::checkNotNull($this->productcatId,"productcatId");
		RequestCheckUtil::checkNotNull($this->prov,"prov");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkMaxValue($this->quantity,10000000,"quantity");
		RequestCheckUtil::checkMinValue($this->quantity,0,"quantity");
		RequestCheckUtil::checkNotNull($this->standardPrice,"standardPrice");
		RequestCheckUtil::checkNotNull($this->supplierId,"supplierId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
