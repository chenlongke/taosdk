<?php
/**
 * TOP API: taobao.item.dealinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ItemDealinfoGetRequest
{
	/** 
	 * 需要返回的字段。目前支持有：
sales_count,rates_count
	 **/
	private $fields;
	
	/** 
	 * 商品数字ID
	 **/
	private $numIid;
	
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.dealinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
