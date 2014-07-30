<?php
/**
 * TOP API: taobao.vas.accout.partner.add request
 * 
 * @author auto create
 * @since 1.0, 2013-08-27 00:00:00
 */
class VasAccoutPartnerAddRequest
{
	/** 
	 * 地址
	 **/
	private $address;
	
	/** 
	 * 业务类型
3010 elink
3020 商超
	 **/
	private $bizType;
	
	/** 
	 * 认证状态 1未认证，2认证通过，3认证不通过
	 **/
	private $certifyStatus;
	
	/** 
	 * 城市
	 **/
	private $city;
	
	/** 
	 * 电子邮件
	 **/
	private $contactEmail;
	
	/** 
	 * 联系人名称
	 **/
	private $contactName;
	
	/** 
	 * 职位
	 **/
	private $contactPosition;
	
	/** 
	 * 电话
	 **/
	private $contactTelephone;
	
	/** 
	 * 合同开始时间
	 **/
	private $contractBeginTime;
	
	/** 
	 * 合同结束时间
	 **/
	private $contractEndTime;
	
	/** 
	 * 创建者
	 **/
	private $creator;
	
	/** 
	 * 客服经理小二
	 **/
	private $customerManager;
	
	/** 
	 * 外部系统对应的合作伙伴ID
	 **/
	private $extPartnerId;
	
	/** 
	 * 业务属性扩展信息
	 **/
	private $extendInfo;
	
	/** 
	 * 传真
	 **/
	private $fax;
	
	/** 
	 * 公司负责人
	 **/
	private $leader;
	
	/** 
	 * 电话
	 **/
	private $leaderPhone;
	
	/** 
	 * 修改者
	 **/
	private $modifier;
	
	/** 
	 * 营业执照号
	 **/
	private $operatingLicenseId;
	
	/** 
	 * 营业执照名称
	 **/
	private $operatingLicenseName;
	
	/** 
	 * 商家类别
	 **/
	private $partnerLevel;
	
	/** 
	 * 合作伙伴或公司名称
	 **/
	private $partnerName;
	
	/** 
	 * 商家状态 1申请中，2审核通过，3审核不通过，4入驻成功，5已监管，6已退出
	 **/
	private $partnerStatus;
	
	/** 
	 * 合作伙伴类型
	 **/
	private $partnerType;
	
	/** 
	 * 合作伙伴用户id
	 **/
	private $partnerUserId;
	
	/** 
	 * 合作伙伴昵称
	 **/
	private $partnerUserNick;
	
	/** 
	 * 支付宝数字ID或银行帐号
	 **/
	private $payAccountId;
	
	/** 
	 * 支付账号类型 1-默认支付宝
	 **/
	private $payAccountType;
	
	/** 
	 * 支付银行地址信息
	 **/
	private $payAddress;
	
	/** 
	 * 支付宝email或银行账号名称
	 **/
	private $payEmailName;
	
	/** 
	 * 电话
	 **/
	private $phone;
	
	/** 
	 * 省份
	 **/
	private $province;
	
	/** 
	 * 备注信息
	 **/
	private $remarks;
	
	/** 
	 * 状态1，有效； 0，无效；2，冻结
	 **/
	private $status;
	
	/** 
	 * 商家标签，由不同的业务biz_type决定其含义
	 **/
	private $tag;
	
	/** 
	 * 公司或个人网站
	 **/
	private $webSite;
	
	/** 
	 * 邮政编码
	 **/
	private $zip;
	
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

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCertifyStatus($certifyStatus)
	{
		$this->certifyStatus = $certifyStatus;
		$this->apiParas["certify_status"] = $certifyStatus;
	}

	public function getCertifyStatus()
	{
		return $this->certifyStatus;
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

	public function setContactEmail($contactEmail)
	{
		$this->contactEmail = $contactEmail;
		$this->apiParas["contact_email"] = $contactEmail;
	}

	public function getContactEmail()
	{
		return $this->contactEmail;
	}

	public function setContactName($contactName)
	{
		$this->contactName = $contactName;
		$this->apiParas["contact_name"] = $contactName;
	}

	public function getContactName()
	{
		return $this->contactName;
	}

	public function setContactPosition($contactPosition)
	{
		$this->contactPosition = $contactPosition;
		$this->apiParas["contact_position"] = $contactPosition;
	}

	public function getContactPosition()
	{
		return $this->contactPosition;
	}

	public function setContactTelephone($contactTelephone)
	{
		$this->contactTelephone = $contactTelephone;
		$this->apiParas["contact_telephone"] = $contactTelephone;
	}

	public function getContactTelephone()
	{
		return $this->contactTelephone;
	}

	public function setContractBeginTime($contractBeginTime)
	{
		$this->contractBeginTime = $contractBeginTime;
		$this->apiParas["contract_begin_time"] = $contractBeginTime;
	}

	public function getContractBeginTime()
	{
		return $this->contractBeginTime;
	}

	public function setContractEndTime($contractEndTime)
	{
		$this->contractEndTime = $contractEndTime;
		$this->apiParas["contract_end_time"] = $contractEndTime;
	}

	public function getContractEndTime()
	{
		return $this->contractEndTime;
	}

	public function setCreator($creator)
	{
		$this->creator = $creator;
		$this->apiParas["creator"] = $creator;
	}

	public function getCreator()
	{
		return $this->creator;
	}

	public function setCustomerManager($customerManager)
	{
		$this->customerManager = $customerManager;
		$this->apiParas["customer_manager"] = $customerManager;
	}

	public function getCustomerManager()
	{
		return $this->customerManager;
	}

	public function setExtPartnerId($extPartnerId)
	{
		$this->extPartnerId = $extPartnerId;
		$this->apiParas["ext_partner_id"] = $extPartnerId;
	}

	public function getExtPartnerId()
	{
		return $this->extPartnerId;
	}

	public function setExtendInfo($extendInfo)
	{
		$this->extendInfo = $extendInfo;
		$this->apiParas["extend_info"] = $extendInfo;
	}

	public function getExtendInfo()
	{
		return $this->extendInfo;
	}

	public function setFax($fax)
	{
		$this->fax = $fax;
		$this->apiParas["fax"] = $fax;
	}

	public function getFax()
	{
		return $this->fax;
	}

	public function setLeader($leader)
	{
		$this->leader = $leader;
		$this->apiParas["leader"] = $leader;
	}

	public function getLeader()
	{
		return $this->leader;
	}

	public function setLeaderPhone($leaderPhone)
	{
		$this->leaderPhone = $leaderPhone;
		$this->apiParas["leader_phone"] = $leaderPhone;
	}

	public function getLeaderPhone()
	{
		return $this->leaderPhone;
	}

	public function setModifier($modifier)
	{
		$this->modifier = $modifier;
		$this->apiParas["modifier"] = $modifier;
	}

	public function getModifier()
	{
		return $this->modifier;
	}

	public function setOperatingLicenseId($operatingLicenseId)
	{
		$this->operatingLicenseId = $operatingLicenseId;
		$this->apiParas["operating_license_id"] = $operatingLicenseId;
	}

	public function getOperatingLicenseId()
	{
		return $this->operatingLicenseId;
	}

	public function setOperatingLicenseName($operatingLicenseName)
	{
		$this->operatingLicenseName = $operatingLicenseName;
		$this->apiParas["operating_license_name"] = $operatingLicenseName;
	}

	public function getOperatingLicenseName()
	{
		return $this->operatingLicenseName;
	}

	public function setPartnerLevel($partnerLevel)
	{
		$this->partnerLevel = $partnerLevel;
		$this->apiParas["partner_level"] = $partnerLevel;
	}

	public function getPartnerLevel()
	{
		return $this->partnerLevel;
	}

	public function setPartnerName($partnerName)
	{
		$this->partnerName = $partnerName;
		$this->apiParas["partner_name"] = $partnerName;
	}

	public function getPartnerName()
	{
		return $this->partnerName;
	}

	public function setPartnerStatus($partnerStatus)
	{
		$this->partnerStatus = $partnerStatus;
		$this->apiParas["partner_status"] = $partnerStatus;
	}

	public function getPartnerStatus()
	{
		return $this->partnerStatus;
	}

	public function setPartnerType($partnerType)
	{
		$this->partnerType = $partnerType;
		$this->apiParas["partner_type"] = $partnerType;
	}

	public function getPartnerType()
	{
		return $this->partnerType;
	}

	public function setPartnerUserId($partnerUserId)
	{
		$this->partnerUserId = $partnerUserId;
		$this->apiParas["partner_user_id"] = $partnerUserId;
	}

	public function getPartnerUserId()
	{
		return $this->partnerUserId;
	}

	public function setPartnerUserNick($partnerUserNick)
	{
		$this->partnerUserNick = $partnerUserNick;
		$this->apiParas["partner_user_nick"] = $partnerUserNick;
	}

	public function getPartnerUserNick()
	{
		return $this->partnerUserNick;
	}

	public function setPayAccountId($payAccountId)
	{
		$this->payAccountId = $payAccountId;
		$this->apiParas["pay_account_id"] = $payAccountId;
	}

	public function getPayAccountId()
	{
		return $this->payAccountId;
	}

	public function setPayAccountType($payAccountType)
	{
		$this->payAccountType = $payAccountType;
		$this->apiParas["pay_account_type"] = $payAccountType;
	}

	public function getPayAccountType()
	{
		return $this->payAccountType;
	}

	public function setPayAddress($payAddress)
	{
		$this->payAddress = $payAddress;
		$this->apiParas["pay_address"] = $payAddress;
	}

	public function getPayAddress()
	{
		return $this->payAddress;
	}

	public function setPayEmailName($payEmailName)
	{
		$this->payEmailName = $payEmailName;
		$this->apiParas["pay_email_name"] = $payEmailName;
	}

	public function getPayEmailName()
	{
		return $this->payEmailName;
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

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setRemarks($remarks)
	{
		$this->remarks = $remarks;
		$this->apiParas["remarks"] = $remarks;
	}

	public function getRemarks()
	{
		return $this->remarks;
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

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
	}

	public function setWebSite($webSite)
	{
		$this->webSite = $webSite;
		$this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite()
	{
		return $this->webSite;
	}

	public function setZip($zip)
	{
		$this->zip = $zip;
		$this->apiParas["zip"] = $zip;
	}

	public function getZip()
	{
		return $this->zip;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.accout.partner.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->creator,"creator");
		RequestCheckUtil::checkNotNull($this->operatingLicenseId,"operatingLicenseId");
		RequestCheckUtil::checkNotNull($this->partnerType,"partnerType");
		RequestCheckUtil::checkNotNull($this->partnerUserId,"partnerUserId");
		RequestCheckUtil::checkNotNull($this->partnerUserNick,"partnerUserNick");
		RequestCheckUtil::checkNotNull($this->payAccountType,"payAccountType");
		RequestCheckUtil::checkNotNull($this->payEmailName,"payEmailName");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
