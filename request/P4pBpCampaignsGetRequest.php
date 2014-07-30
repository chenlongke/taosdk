<?php
/**
 * TOP API: taobao.p4p.bp.campaigns.get request
 * 
 * @author auto create
 * @since 1.0, 2010-11-23 00:00:00
 */
class P4pBpCampaignsGetRequest
{
	/** 
	 * 广告计划id数组
	 **/
	private $campaignIds;
	
	/** 
	 * 淘宝会员的P4P 客户ID
	 **/
	private $custId;
	
	/** 
	 * 需要返回的字段
	 **/
	private $fields;
	
	/** 
	 * p4p签名信息
	 **/
	private $signature;
	
	private $apiParas = array();
	
	public function setCampaignIds($campaignIds)
	{
		$this->campaignIds = $campaignIds;
		$this->apiParas["campaign_ids"] = $campaignIds;
	}

	public function getCampaignIds()
	{
		return $this->campaignIds;
	}

	public function setCustId($custId)
	{
		$this->custId = $custId;
		$this->apiParas["cust_id"] = $custId;
	}

	public function getCustId()
	{
		return $this->custId;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setSignature($signature)
	{
		$this->signature = $signature;
		$this->apiParas["signature"] = $signature;
	}

	public function getSignature()
	{
		return $this->signature;
	}

	public function getApiMethodName()
	{
		return "taobao.p4p.bp.campaigns.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->custId,"custId");
		RequestCheckUtil::checkNotNull($this->signature,"signature");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
