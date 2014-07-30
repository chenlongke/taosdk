<?php
/**
 * TOP API: taobao.tbk.mobile.items.query request
 * 
 * @author auto create
 * @since 1.0, 2013-12-16 00:00:00
 */
class TbkMobileItemsQueryRequest
{
	/** 
	 * 需返回的字段列表.可选值:num_iid,title,price,discount_price,promotions,postage,item_location,pic_url,volume,nick,shop_type,item_url;字段之间用","分隔
	 **/
	private $fields;
	
	/** 
	 * 查询词
	 **/
	private $q;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.mobile.items.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->q,"q");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
