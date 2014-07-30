<?php
/**
 * TOP API: taobao.tongcheng.api.searchsellerevoucher request
 * 
 * @author auto create
 * @since 1.0, 2013-06-04 00:00:00
 */
class TongchengApiSearchsellerevoucherRequest
{
	/** 
	 * 代金券类型,1在线购买,2满就送
0取所有类型
	 **/
	private $conferType;
	
	/** 
	 * 每页获取数据量
	 **/
	private $limit;
	
	/** 
	 * 开始偏移量
	 **/
	private $offset;
	
	/** 
	 * 上架时间,10位时间戳
0取所有
	 **/
	private $publishDate;
	
	/** 
	 * 下架时间,10位时间戳
0取所有
	 **/
	private $publishendDate;
	
	/** 
	 * 发布商户的淘宝uid号,0代表来判断商家
	 **/
	private $sellerId;
	
	/** 
	 * 外婆家100元代金券
传空,代表来根据名称搜索
	 **/
	private $voucherName;
	
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

	public function setPublishDate($publishDate)
	{
		$this->publishDate = $publishDate;
		$this->apiParas["publish_date"] = $publishDate;
	}

	public function getPublishDate()
	{
		return $this->publishDate;
	}

	public function setPublishendDate($publishendDate)
	{
		$this->publishendDate = $publishendDate;
		$this->apiParas["publishend_date"] = $publishendDate;
	}

	public function getPublishendDate()
	{
		return $this->publishendDate;
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

	public function setVoucherName($voucherName)
	{
		$this->voucherName = $voucherName;
		$this->apiParas["voucher_name"] = $voucherName;
	}

	public function getVoucherName()
	{
		return $this->voucherName;
	}

	public function getApiMethodName()
	{
		return "taobao.tongcheng.api.searchsellerevoucher";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->conferType,"conferType");
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->publishDate,"publishDate");
		RequestCheckUtil::checkNotNull($this->publishendDate,"publishendDate");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
