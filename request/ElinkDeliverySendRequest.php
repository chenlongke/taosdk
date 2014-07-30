<?php
/**
 * TOP API: taobao.elink.delivery.send request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkDeliverySendRequest
{
	/** 
	 * 物流公司代码.如"POST"就代表中国邮政,"ZJS"就代表宅急送.调用 taobao.logistics.companies.get 获取。如传入的代码非淘宝官方物流合作公司，默认是“其他”物流的方式
	 **/
	private $companyCode;
	
	/** 
	 * 物料编号ID;
	 **/
	private $materialsId;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 待发货的商品数量
	 **/
	private $nums;
	
	/** 
	 * 运单号
	 **/
	private $outSid;
	
	/** 
	 * 卖家地址(详细地址).如:XXX街道XXX门牌,省市区不需要提供
	 **/
	private $sellerAddress;
	
	/** 
	 * 卖家所在地国家公布的标准地区码.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm 或者调用 taobao.areas.get 获取
	 **/
	private $sellerAreaId;
	
	/** 
	 * 卖家手机号码
	 **/
	private $sellerMobile;
	
	/** 
	 * 卖家姓名
	 **/
	private $sellerName;
	
	/** 
	 * 卖家固定电话
	 **/
	private $sellerPhone;
	
	/** 
	 * 卖家邮编
	 **/
	private $sellerZip;
	
	/** 
	 * 供货商发货运费，默认为0
	 **/
	private $sendPostFee;
	
	/** 
	 * 淘宝交易编码
	 **/
	private $tid;
	
	/** 
	 * 物流订单ID
	 **/
	private $wlbOrderid;
	
	private $apiParas = array();
	
	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setMaterialsId($materialsId)
	{
		$this->materialsId = $materialsId;
		$this->apiParas["materials_id"] = $materialsId;
	}

	public function getMaterialsId()
	{
		return $this->materialsId;
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

	public function setNums($nums)
	{
		$this->nums = $nums;
		$this->apiParas["nums"] = $nums;
	}

	public function getNums()
	{
		return $this->nums;
	}

	public function setOutSid($outSid)
	{
		$this->outSid = $outSid;
		$this->apiParas["out_sid"] = $outSid;
	}

	public function getOutSid()
	{
		return $this->outSid;
	}

	public function setSellerAddress($sellerAddress)
	{
		$this->sellerAddress = $sellerAddress;
		$this->apiParas["seller_address"] = $sellerAddress;
	}

	public function getSellerAddress()
	{
		return $this->sellerAddress;
	}

	public function setSellerAreaId($sellerAreaId)
	{
		$this->sellerAreaId = $sellerAreaId;
		$this->apiParas["seller_area_id"] = $sellerAreaId;
	}

	public function getSellerAreaId()
	{
		return $this->sellerAreaId;
	}

	public function setSellerMobile($sellerMobile)
	{
		$this->sellerMobile = $sellerMobile;
		$this->apiParas["seller_mobile"] = $sellerMobile;
	}

	public function getSellerMobile()
	{
		return $this->sellerMobile;
	}

	public function setSellerName($sellerName)
	{
		$this->sellerName = $sellerName;
		$this->apiParas["seller_name"] = $sellerName;
	}

	public function getSellerName()
	{
		return $this->sellerName;
	}

	public function setSellerPhone($sellerPhone)
	{
		$this->sellerPhone = $sellerPhone;
		$this->apiParas["seller_phone"] = $sellerPhone;
	}

	public function getSellerPhone()
	{
		return $this->sellerPhone;
	}

	public function setSellerZip($sellerZip)
	{
		$this->sellerZip = $sellerZip;
		$this->apiParas["seller_zip"] = $sellerZip;
	}

	public function getSellerZip()
	{
		return $this->sellerZip;
	}

	public function setSendPostFee($sendPostFee)
	{
		$this->sendPostFee = $sendPostFee;
		$this->apiParas["send_post_fee"] = $sendPostFee;
	}

	public function getSendPostFee()
	{
		return $this->sendPostFee;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setWlbOrderid($wlbOrderid)
	{
		$this->wlbOrderid = $wlbOrderid;
		$this->apiParas["wlb_orderid"] = $wlbOrderid;
	}

	public function getWlbOrderid()
	{
		return $this->wlbOrderid;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.delivery.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->materialsId,"materialsId");
		RequestCheckUtil::checkNotNull($this->nums,"nums");
		RequestCheckUtil::checkNotNull($this->outSid,"outSid");
		RequestCheckUtil::checkNotNull($this->sellerAddress,"sellerAddress");
		RequestCheckUtil::checkNotNull($this->sellerAreaId,"sellerAreaId");
		RequestCheckUtil::checkNotNull($this->sellerName,"sellerName");
		RequestCheckUtil::checkNotNull($this->sellerZip,"sellerZip");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkNotNull($this->wlbOrderid,"wlbOrderid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
