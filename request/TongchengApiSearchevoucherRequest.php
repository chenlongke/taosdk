<?php
/**
 * TOP API: taobao.tongcheng.api.searchevoucher request
 * 
 * @author auto create
 * @since 1.0, 2013-08-08 00:00:00
 */
class TongchengApiSearchevoucherRequest
{
	/** 
	 * 统计指定时间之后用户购买的现金券
	 **/
	private $begindate;
	
	/** 
	 * 代金券类型 1在线购买,2满就送 0全部
	 **/
	private $conferType;
	
	/** 
	 * 结束时间，统计截至时间
	 **/
	private $enddate;
	
	/** 
	 * 现金券id
	 **/
	private $fid;
	
	/** 
	 * 显示条数
	 **/
	private $limit;
	
	/** 
	 * 偏移量,默认0
	 **/
	private $offset;
	
	/** 
	 * 指定商户发布的代金券 商户的淘宝Uid 0不限
	 **/
	private $sellerId;
	
	/** 
	 * 用户的淘宝用户名，如果传入该参数查询出该用户购买的现金券信息
默认可传""
	 **/
	private $username;
	
	/** 
	 * 代金券状态 1未使用, 2已使用, 3已过期, 4已作废，5锁定中。
默认可传0，代表全部
	 **/
	private $voucherStatus;
	
	private $apiParas = array();
	
	public function setBegindate($begindate)
	{
		$this->begindate = $begindate;
		$this->apiParas["begindate"] = $begindate;
	}

	public function getBegindate()
	{
		return $this->begindate;
	}

	public function setConferType($conferType)
	{
		$this->conferType = $conferType;
		$this->apiParas["confer_type"] = $conferType;
	}

	public function getConferType()
	{
		return $this->conferType;
	}

	public function setEnddate($enddate)
	{
		$this->enddate = $enddate;
		$this->apiParas["enddate"] = $enddate;
	}

	public function getEnddate()
	{
		return $this->enddate;
	}

	public function setFid($fid)
	{
		$this->fid = $fid;
		$this->apiParas["fid"] = $fid;
	}

	public function getFid()
	{
		return $this->fid;
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

	public function setUsername($username)
	{
		$this->username = $username;
		$this->apiParas["username"] = $username;
	}

	public function getUsername()
	{
		return $this->username;
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
		return "taobao.tongcheng.api.searchevoucher";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->begindate,"begindate");
		RequestCheckUtil::checkNotNull($this->enddate,"enddate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
