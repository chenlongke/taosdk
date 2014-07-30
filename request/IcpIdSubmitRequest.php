<?php
/**
 * TOP API: taobao.icp.id.submit request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class IcpIdSubmitRequest
{
	/** 
	 * 由中国信息产业部颁发的备案号，如：20080224
	 **/
	private $icpId;
	
	/** 
	 * 备案所在省份简称，如：江（江苏），浙（浙江），沪（上海）
	 **/
	private $icpState;
	
	/** 
	 * 网站域名。如：taobao.com
	 **/
	private $siteDomain;
	
	private $apiParas = array();
	
	public function setIcpId($icpId)
	{
		$this->icpId = $icpId;
		$this->apiParas["icp_id"] = $icpId;
	}

	public function getIcpId()
	{
		return $this->icpId;
	}

	public function setIcpState($icpState)
	{
		$this->icpState = $icpState;
		$this->apiParas["icp_state"] = $icpState;
	}

	public function getIcpState()
	{
		return $this->icpState;
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

	public function getApiMethodName()
	{
		return "taobao.icp.id.submit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->icpId,"icpId");
		RequestCheckUtil::checkNotNull($this->icpState,"icpState");
		RequestCheckUtil::checkNotNull($this->siteDomain,"siteDomain");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
