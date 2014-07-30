<?php
/**
 * TOP API: taobao.item.market.update.listing request
 * 
 * @author auto create
 * @since 1.0, 2011-05-30 00:00:00
 */
class ItemMarketUpdateListingRequest
{
	/** 
	 * 上架的商品数量
	 **/
	private $num;
	
	/** 
	 * 商品数字ID,该参数必须
	 **/
	private $numIid;
	
	private $apiParas = array();
	
	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
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
		return "taobao.item.market.update.listing";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
