<?php
/**
 * TOP API: taobao.icp.submit request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class IcpSubmitRequest
{
	/** 
	 * 主办单位通信地址，填写内容最长不能超过512个汉字或1024个字符。
	 **/
	private $companyAddress;
	
	/** 
	 * 主办单位证件号码，填写内容最长不能超过64个汉字或128个字符，所填写的号码应与“主办单位有效证件类型”对应。
	 **/
	private $companyCertNo;
	
	/** 
	 * 主办单位证件类型，填写内容参照填表说明中证件类型代码表中的编号字段，内容要与“主办单位性质”对应。例如：主办单位性质为“事业单位”时此栏应填写“组织机构代码证书”、“事业法人证书”之一所对应的编号。
	 **/
	private $companyCertType;
	
	/** 
	 * 主办单位所在城市，填写内容参照信息产业部ICP/IP地址/域名信息备案管理系统中省/市/县代码表中的主办单位所在市编号。所在市编号应属于其所在省编号。
	 **/
	private $companyCity;
	
	/** 
	 * 主办单位所在区/县，填写内容参照信息产业部ICP/IP地址/域名信息备案管理系统中省/市/县代码表中的主办单位所在县编号。所在县编号应属于其所在市编号。
	 **/
	private $companyDistrict;
	
	/** 
	 * 主办单位性质，填写内容参照填表说明中主办单位性质代码表中的性质编号。
	 **/
	private $companyKind;
	
	/** 
	 * 单位负责人证件号码，填写内容最长不能超过128个字符。所填写的号码应与“主办单位分管网站的负责人有效证件类型”相对应。
	 **/
	private $companyMasterCertNo;
	
	/** 
	 * 单位负责人证件类型，填写内容参照填表说明中证件类型代码表中单位性质编号为5所对应的证件编号之一（即身份证、护照、军官证、台胞证所对应的编号）。
	 **/
	private $companyMasterCertType;
	
	/** 
	 * 单位负责人电子信箱，填写内容最长不能超过128个字符，邮件地址可填写多个，用半角分号分隔。
	 **/
	private $companyMasterEmail;
	
	/** 
	 * 单位负责人移动手机号码，填写内容最长不能超过64字符，若联系人有多个中国移动电话，则以半角分号“;”分隔。此项与“主办单位分管网站的负责人中国联通手机号码”字段至少填写一项。
	 **/
	private $companyMasterMobile;
	
	/** 
	 * 单位分管网站负责人姓名，填写内容最长不能超过64个汉字或128个字符。
	 **/
	private $companyMasterName;
	
	/** 
	 * 单位负责人办公电话，填写内容最长不能超过64字符，办公电话可填写多个，用半角分号分隔。办公电话指固定电话，填写标准形式：国家代码-区号-电话号码，如：086-010-82998299，若有分机，则填写标准格式：国家代码-区号-号码-分机，如：086-010-82998299-1234。
	 **/
	private $companyMasterPhone;
	
	/** 
	 * 单位负责人联通手机号码，填写内容最长不能超过64字符，若联系人有多个中国联通电话，则以半角分号“;”分隔。此项与“主办单位分管网站的负责人中国移动手机号码”字段至少填写一项。
	 **/
	private $companyMasterUnicom;
	
	/** 
	 * 主办单位名称，填写ICP备案网站的主办单位全称，填写内容最长不能超过128个汉字或256个字符。若网站为组织开办，则应填写组织名称；若为个人开办，则应填写个人姓名。此栏中填写内容应尽量为中文、英文、数字、下划线。
	 **/
	private $companyName;
	
	/** 
	 * 主办单位所在省份，填写内容参照信息产业部ICP/IP地址/域名信息备案管理系统中省/市/县代码表中的主办单位所在省/自治区/直辖市编号。
	 **/
	private $companyState;
	
	/** 
	 * 投资者或上级主管单位，填写内容最长不能超过512个汉字或1024个字符，若该主办单位有多个投资者或上级单位，则用半角分号“;”分隔。
	 **/
	private $companySuperior;
	
	/** 
	 * 网站域名（必须保证唯一性），多个域名以半角分号分隔，填写网站的独立域名，域名不要加www.，如果该网站没有域名只有IP，则填写IP地址。域名不需要与IP地址一一对应。
	 **/
	private $siteDomain;
	
	/** 
	 * 网站首页地址，填写内容最长不能超过512个字符，多个首页网址用半角分号分隔。网站首页址不要加http://，没有网站首页网址可填写IP地址。
	 **/
	private $siteHomePage;
	
	/** 
	 * 网站IP地址，最大长度32字节。如：122.224.194.180
	 **/
	private $siteIp;
	
	/** 
	 * 网站负责人证件号码，填写内容最长不能超过128个字符。所填写的号码应与“该网站的负责人有效证件类型”相对应。
	 **/
	private $siteMasterCertNo;
	
	/** 
	 * 网站负责人证件类型，填写内容参照填表说明中证件类型代码表中单位性质编号为5所对应的证件编号之一（即身份证、护照、军官证、台胞证所对应的编号）。
	 **/
	private $siteMasterCertType;
	
	/** 
	 * 网站负责人电子邮箱，填写内容最长不能超过128个字符，邮件地址可填写多个，用半角分号分隔。
	 **/
	private $siteMasterEmail;
	
	/** 
	 * 网站负责人移动手机号码，填写内容最长不能超过64字符，若联系人有多个中国移动电话，则以半角分号“;”分隔。此项与“该网站的负责人中国联通手机号码”字段至少填写一项。
	 **/
	private $siteMasterMobile;
	
	/** 
	 * 网站负责人姓名，填写内容最长不能超过64个汉字或128个字符。该网站负责人可以与主办单位分管网站的负责人是同一个人,也可以不是一个人。
	 **/
	private $siteMasterName;
	
	/** 
	 * 网站负责人办公电话，填写内容最长不能超过64字符，办公电话可填写多个，用半角分号分隔。办公电话指固定电话，填写标准形式：国家代码-区号-电话号码，如：086-010-82998299，若有分机，则填写标准格式：国家代码-区号-号码-分机，如：086-010-82998299-1234。
	 **/
	private $siteMasterPhone;
	
	/** 
	 * 网站负责人联通手机号码，填写内容最长不能超过64字符，若联系人有多个中国联通电话，则以半角分号“;”分隔。此项与“该网站的负责人中国移动手机号码”字段至少填写一项。
	 **/
	private $siteMasterUnicom;
	
	/** 
	 * 网站名称，填写内容最长不能超过128个汉字或256个字符，若该网站有多个网站名称，则以半角分号分隔。填写ICP备案网站全称，若一个主体开办多个网站，则每一行填写一条网站信息，相同主体信息部分可复制。
	 **/
	private $siteName;
	
	private $apiParas = array();
	
	public function setCompanyAddress($companyAddress)
	{
		$this->companyAddress = $companyAddress;
		$this->apiParas["company_address"] = $companyAddress;
	}

	public function getCompanyAddress()
	{
		return $this->companyAddress;
	}

	public function setCompanyCertNo($companyCertNo)
	{
		$this->companyCertNo = $companyCertNo;
		$this->apiParas["company_cert_no"] = $companyCertNo;
	}

	public function getCompanyCertNo()
	{
		return $this->companyCertNo;
	}

	public function setCompanyCertType($companyCertType)
	{
		$this->companyCertType = $companyCertType;
		$this->apiParas["company_cert_type"] = $companyCertType;
	}

	public function getCompanyCertType()
	{
		return $this->companyCertType;
	}

	public function setCompanyCity($companyCity)
	{
		$this->companyCity = $companyCity;
		$this->apiParas["company_city"] = $companyCity;
	}

	public function getCompanyCity()
	{
		return $this->companyCity;
	}

	public function setCompanyDistrict($companyDistrict)
	{
		$this->companyDistrict = $companyDistrict;
		$this->apiParas["company_district"] = $companyDistrict;
	}

	public function getCompanyDistrict()
	{
		return $this->companyDistrict;
	}

	public function setCompanyKind($companyKind)
	{
		$this->companyKind = $companyKind;
		$this->apiParas["company_kind"] = $companyKind;
	}

	public function getCompanyKind()
	{
		return $this->companyKind;
	}

	public function setCompanyMasterCertNo($companyMasterCertNo)
	{
		$this->companyMasterCertNo = $companyMasterCertNo;
		$this->apiParas["company_master_cert_no"] = $companyMasterCertNo;
	}

	public function getCompanyMasterCertNo()
	{
		return $this->companyMasterCertNo;
	}

	public function setCompanyMasterCertType($companyMasterCertType)
	{
		$this->companyMasterCertType = $companyMasterCertType;
		$this->apiParas["company_master_cert_type"] = $companyMasterCertType;
	}

	public function getCompanyMasterCertType()
	{
		return $this->companyMasterCertType;
	}

	public function setCompanyMasterEmail($companyMasterEmail)
	{
		$this->companyMasterEmail = $companyMasterEmail;
		$this->apiParas["company_master_email"] = $companyMasterEmail;
	}

	public function getCompanyMasterEmail()
	{
		return $this->companyMasterEmail;
	}

	public function setCompanyMasterMobile($companyMasterMobile)
	{
		$this->companyMasterMobile = $companyMasterMobile;
		$this->apiParas["company_master_mobile"] = $companyMasterMobile;
	}

	public function getCompanyMasterMobile()
	{
		return $this->companyMasterMobile;
	}

	public function setCompanyMasterName($companyMasterName)
	{
		$this->companyMasterName = $companyMasterName;
		$this->apiParas["company_master_name"] = $companyMasterName;
	}

	public function getCompanyMasterName()
	{
		return $this->companyMasterName;
	}

	public function setCompanyMasterPhone($companyMasterPhone)
	{
		$this->companyMasterPhone = $companyMasterPhone;
		$this->apiParas["company_master_phone"] = $companyMasterPhone;
	}

	public function getCompanyMasterPhone()
	{
		return $this->companyMasterPhone;
	}

	public function setCompanyMasterUnicom($companyMasterUnicom)
	{
		$this->companyMasterUnicom = $companyMasterUnicom;
		$this->apiParas["company_master_unicom"] = $companyMasterUnicom;
	}

	public function getCompanyMasterUnicom()
	{
		return $this->companyMasterUnicom;
	}

	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
	}

	public function setCompanyState($companyState)
	{
		$this->companyState = $companyState;
		$this->apiParas["company_state"] = $companyState;
	}

	public function getCompanyState()
	{
		return $this->companyState;
	}

	public function setCompanySuperior($companySuperior)
	{
		$this->companySuperior = $companySuperior;
		$this->apiParas["company_superior"] = $companySuperior;
	}

	public function getCompanySuperior()
	{
		return $this->companySuperior;
	}

	public function setSiteDomain($siteDomain)
	{
		$this->siteDomain = $siteDomain;
		$this->apiParas["site_domain"] = $siteDomain;
	}

	public function getSiteDomain()
	{
		return $this->siteDomain;
	}

	public function setSiteHomePage($siteHomePage)
	{
		$this->siteHomePage = $siteHomePage;
		$this->apiParas["site_home_page"] = $siteHomePage;
	}

	public function getSiteHomePage()
	{
		return $this->siteHomePage;
	}

	public function setSiteIp($siteIp)
	{
		$this->siteIp = $siteIp;
		$this->apiParas["site_ip"] = $siteIp;
	}

	public function getSiteIp()
	{
		return $this->siteIp;
	}

	public function setSiteMasterCertNo($siteMasterCertNo)
	{
		$this->siteMasterCertNo = $siteMasterCertNo;
		$this->apiParas["site_master_cert_no"] = $siteMasterCertNo;
	}

	public function getSiteMasterCertNo()
	{
		return $this->siteMasterCertNo;
	}

	public function setSiteMasterCertType($siteMasterCertType)
	{
		$this->siteMasterCertType = $siteMasterCertType;
		$this->apiParas["site_master_cert_type"] = $siteMasterCertType;
	}

	public function getSiteMasterCertType()
	{
		return $this->siteMasterCertType;
	}

	public function setSiteMasterEmail($siteMasterEmail)
	{
		$this->siteMasterEmail = $siteMasterEmail;
		$this->apiParas["site_master_email"] = $siteMasterEmail;
	}

	public function getSiteMasterEmail()
	{
		return $this->siteMasterEmail;
	}

	public function setSiteMasterMobile($siteMasterMobile)
	{
		$this->siteMasterMobile = $siteMasterMobile;
		$this->apiParas["site_master_mobile"] = $siteMasterMobile;
	}

	public function getSiteMasterMobile()
	{
		return $this->siteMasterMobile;
	}

	public function setSiteMasterName($siteMasterName)
	{
		$this->siteMasterName = $siteMasterName;
		$this->apiParas["site_master_name"] = $siteMasterName;
	}

	public function getSiteMasterName()
	{
		return $this->siteMasterName;
	}

	public function setSiteMasterPhone($siteMasterPhone)
	{
		$this->siteMasterPhone = $siteMasterPhone;
		$this->apiParas["site_master_phone"] = $siteMasterPhone;
	}

	public function getSiteMasterPhone()
	{
		return $this->siteMasterPhone;
	}

	public function setSiteMasterUnicom($siteMasterUnicom)
	{
		$this->siteMasterUnicom = $siteMasterUnicom;
		$this->apiParas["site_master_unicom"] = $siteMasterUnicom;
	}

	public function getSiteMasterUnicom()
	{
		return $this->siteMasterUnicom;
	}

	public function setSiteName($siteName)
	{
		$this->siteName = $siteName;
		$this->apiParas["site_name"] = $siteName;
	}

	public function getSiteName()
	{
		return $this->siteName;
	}

	public function getApiMethodName()
	{
		return "taobao.icp.submit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyAddress,"companyAddress");
		RequestCheckUtil::checkNotNull($this->companyCertNo,"companyCertNo");
		RequestCheckUtil::checkNotNull($this->companyCertType,"companyCertType");
		RequestCheckUtil::checkNotNull($this->companyCity,"companyCity");
		RequestCheckUtil::checkNotNull($this->companyDistrict,"companyDistrict");
		RequestCheckUtil::checkNotNull($this->companyKind,"companyKind");
		RequestCheckUtil::checkNotNull($this->companyMasterCertNo,"companyMasterCertNo");
		RequestCheckUtil::checkNotNull($this->companyMasterCertType,"companyMasterCertType");
		RequestCheckUtil::checkNotNull($this->companyMasterEmail,"companyMasterEmail");
		RequestCheckUtil::checkNotNull($this->companyMasterName,"companyMasterName");
		RequestCheckUtil::checkNotNull($this->companyMasterPhone,"companyMasterPhone");
		RequestCheckUtil::checkNotNull($this->companyName,"companyName");
		RequestCheckUtil::checkNotNull($this->companyState,"companyState");
		RequestCheckUtil::checkNotNull($this->companySuperior,"companySuperior");
		RequestCheckUtil::checkNotNull($this->siteDomain,"siteDomain");
		RequestCheckUtil::checkNotNull($this->siteHomePage,"siteHomePage");
		RequestCheckUtil::checkNotNull($this->siteIp,"siteIp");
		RequestCheckUtil::checkNotNull($this->siteMasterCertNo,"siteMasterCertNo");
		RequestCheckUtil::checkNotNull($this->siteMasterCertType,"siteMasterCertType");
		RequestCheckUtil::checkNotNull($this->siteMasterEmail,"siteMasterEmail");
		RequestCheckUtil::checkNotNull($this->siteMasterName,"siteMasterName");
		RequestCheckUtil::checkNotNull($this->siteMasterPhone,"siteMasterPhone");
		RequestCheckUtil::checkNotNull($this->siteName,"siteName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
