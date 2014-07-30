<?php
/**
 * TOP API: taobao.fenxiao.cooperation.addproductline request
 * 
 * @author auto create
 * @since 1.0, 2011-06-09 00:00:00
 */
class FenxiaoCooperationAddproductlineRequest
{
	/** 
	 * 分销商ID
	 **/
	private $distributorId;
	
	/** 
	 * 产品线ID列表
	 **/
	private $productlineList;
	
	/** 
	 * 分销方式： AGENT(代销)、DEALER(经销)(默认为代销)
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setDistributorId($distributorId)
	{
		$this->distributorId = $distributorId;
		$this->apiParas["distributor_id"] = $distributorId;
	}

	public function getDistributorId()
	{
		return $this->distributorId;
	}

	public function setProductlineList($productlineList)
	{
		$this->productlineList = $productlineList;
		$this->apiParas["productline_list"] = $productlineList;
	}

	public function getProductlineList()
	{
		return $this->productlineList;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.cooperation.addproductline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->distributorId,"distributorId");
		RequestCheckUtil::checkNotNull($this->productlineList,"productlineList");
		RequestCheckUtil::checkMaxListSize($this->productlineList,10,"productlineList");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
