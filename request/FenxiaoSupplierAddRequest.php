<?php
/**
 * TOP API: taobao.fenxiao.supplier.add request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class FenxiaoSupplierAddRequest
{
	/** 
	 * 支付宝帐号(16位ID)
	 **/
	private $alipayUid;
	
	/** 
	 * 主营品牌（1-100个汉字）
	 **/
	private $brand;
	
	/** 
	 * 是否自有品牌 (枚举类型：OWN_BRAND[自有]、ACTION_BRAND[代理]、OTHERS_BRAND[其它])
	 **/
	private $brandOwnership;
	
	/** 
	 * 公司简介（1-1000个汉字）
	 **/
	private $companyIntro;
	
	/** 
	 * 公司名称（1-40个字符组成）
	 **/
	private $companyName;
	
	/** 
	 * 1：公司供应商 MERCHANT
2：个人供应商 INDIVIDUAL
默认情况为供应商
	 **/
	private $companyType;
	
	/** 
	 * 联系人（1-20个字符组成）
	 **/
	private $contactPerson;
	
	/** 
	 * 电子邮箱（必须符合email格式,且只能为1-50个字符）
	 **/
	private $email;
	
	/** 
	 * 手机（首位0后接11位或11位数字字符）
	 **/
	private $mobile;
	
	/** 
	 * 固定电话（14-20个数字且用 - 分割，3-4位区号+“-”+7-8位号码+“-”+1-6位号码 
）例：021-56986952-1555
	 **/
	private $phone;
	
	/** 
	 * 主营类目(淘宝店铺类目标识ID组成,用","分割，且只能为1-5个ID)
	 **/
	private $shopcats;
	
	/** 
	 * 网站链接（1-1024个字符组成）
	 **/
	private $site;
	
	/** 
	 * 供应商帐号名 （由4-20个字母或数字组成，不支持中文，不能以数字开头） 例：中文站会员名。
	 **/
	private $username;
	
	/** 
	 * 旺旺ID（旺旺ID只能为1-20个字符）
	 **/
	private $wangwang;
	
	private $apiParas = array();
	
	public function setAlipayUid($alipayUid)
	{
		$this->alipayUid = $alipayUid;
		$this->apiParas["alipay_uid"] = $alipayUid;
	}

	public function getAlipayUid()
	{
		return $this->alipayUid;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setBrandOwnership($brandOwnership)
	{
		$this->brandOwnership = $brandOwnership;
		$this->apiParas["brand_ownership"] = $brandOwnership;
	}

	public function getBrandOwnership()
	{
		return $this->brandOwnership;
	}

	public function setCompanyIntro($companyIntro)
	{
		$this->companyIntro = $companyIntro;
		$this->apiParas["company_intro"] = $companyIntro;
	}

	public function getCompanyIntro()
	{
		return $this->companyIntro;
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

	public function setCompanyType($companyType)
	{
		$this->companyType = $companyType;
		$this->apiParas["company_type"] = $companyType;
	}

	public function getCompanyType()
	{
		return $this->companyType;
	}

	public function setContactPerson($contactPerson)
	{
		$this->contactPerson = $contactPerson;
		$this->apiParas["contact_person"] = $contactPerson;
	}

	public function getContactPerson()
	{
		return $this->contactPerson;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
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

	public function setShopcats($shopcats)
	{
		$this->shopcats = $shopcats;
		$this->apiParas["shopcats"] = $shopcats;
	}

	public function getShopcats()
	{
		return $this->shopcats;
	}

	public function setSite($site)
	{
		$this->site = $site;
		$this->apiParas["site"] = $site;
	}

	public function getSite()
	{
		return $this->site;
	}

	public function setUsername($username)
	{
		$this->username = $username;
		$this->apiParas["username"] = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setWangwang($wangwang)
	{
		$this->wangwang = $wangwang;
		$this->apiParas["wangwang"] = $wangwang;
	}

	public function getWangwang()
	{
		return $this->wangwang;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.supplier.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayUid,"alipayUid");
		RequestCheckUtil::checkNotNull($this->brand,"brand");
		RequestCheckUtil::checkNotNull($this->brandOwnership,"brandOwnership");
		RequestCheckUtil::checkNotNull($this->companyIntro,"companyIntro");
		RequestCheckUtil::checkNotNull($this->companyName,"companyName");
		RequestCheckUtil::checkNotNull($this->contactPerson,"contactPerson");
		RequestCheckUtil::checkNotNull($this->email,"email");
		RequestCheckUtil::checkNotNull($this->phone,"phone");
		RequestCheckUtil::checkNotNull($this->shopcats,"shopcats");
		RequestCheckUtil::checkNotNull($this->username,"username");
		RequestCheckUtil::checkNotNull($this->wangwang,"wangwang");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
