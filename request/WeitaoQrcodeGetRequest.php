<?php
/**
 * TOP API: taobao.weitao.qrcode.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class WeitaoQrcodeGetRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $itemId;
	
	/** 
	 * 系统自动生成
	 **/
	private $shopId;
	
	/** 
	 * 系统自动生成
	 **/
	private $type;
	
	/** 
	 * 系统自动生成
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.qrcode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
