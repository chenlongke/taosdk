<?php
/**
 * TOP API: taobao.tongcheng.api.listsellerevoucher request
 * 
 * @author auto create
 * @since 1.0, 2013-05-28 00:00:00
 */
class TongchengApiListsellerevoucherRequest
{
	/** 
	 * 代金券类型
	 **/
	private $confertype;
	
	/** 
	 * 维度
	 **/
	private $latitude;
	
	/** 
	 * 每页获取数
	 **/
	private $limit;
	
	/** 
	 * 地理位置经度
	 **/
	private $longitude;
	
	/** 
	 * 起始偏移量
	 **/
	private $offset;
	
	/** 
	 * 代金券发布商家id
	 **/
	private $sellerid;
	
	/** 
	 * 店铺的id
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setConfertype($confertype)
	{
		$this->confertype = $confertype;
		$this->apiParas["confertype"] = $confertype;
	}

	public function getConfertype()
	{
		return $this->confertype;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
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

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
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

	public function setSellerid($sellerid)
	{
		$this->sellerid = $sellerid;
		$this->apiParas["sellerid"] = $sellerid;
	}

	public function getSellerid()
	{
		return $this->sellerid;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function getApiMethodName()
	{
		return "taobao.tongcheng.api.listsellerevoucher";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
