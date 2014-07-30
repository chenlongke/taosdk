<?php
/**
 * TOP API: taobao.tongcheng.api.listevoucher request
 * 
 * @author auto create
 * @since 1.0, 2013-05-28 00:00:00
 */
class TongchengApiListevoucherRequest
{
	/** 
	 * 代金券类型
1在线购买,2满就送 0全部
	 **/
	private $conferType;
	
	/** 
	 * 是否忽略所有判断条件,显示个人已购的所有代金券
默认0,只显示未过期的
1显示所有
	 **/
	private $isall;
	
	/** 
	 * 显示条数
	 **/
	private $limit;
	
	/** 
	 * 偏移量,默认0
	 **/
	private $offset;
	
	/** 
	 * 指定商户发布的代金券
商户的淘宝Uid
0不限
	 **/
	private $sellerId;
	
	/** 
	 * 淘宝的用户Uid
	 **/
	private $taobaoUid;
	
	/** 
	 * 代金券状态
1未使用,
2已使用,
5过期且退款,
6作废已退款  
0全部
	 **/
	private $voucherStatus;
	
	private $apiParas = array();
	
	public function setConferType($conferType)
	{
		$this->conferType = $conferType;
		$this->apiParas["confer_type"] = $conferType;
	}

	public function getConferType()
	{
		return $this->conferType;
	}

	public function setIsall($isall)
	{
		$this->isall = $isall;
		$this->apiParas["isall"] = $isall;
	}

	public function getIsall()
	{
		return $this->isall;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setTaobaoUid($taobaoUid)
	{
		$this->taobaoUid = $taobaoUid;
		$this->apiParas["taobao_uid"] = $taobaoUid;
	}

	public function getTaobaoUid()
	{
		return $this->taobaoUid;
	}

	public function setVoucherStatus($voucherStatus)
	{
		$this->voucherStatus = $voucherStatus;
		$this->apiParas["voucher_status"] = $voucherStatus;
	}

	public function getVoucherStatus()
	{
		return $this->voucherStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.tongcheng.api.listevoucher";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->taobaoUid,"taobaoUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
