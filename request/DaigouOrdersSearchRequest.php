<?php
/**
 * TOP API: taobao.daigou.orders.search request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class DaigouOrdersSearchRequest
{
	/** 
	 * 查询的当前页数默认为1
	 **/
	private $currentPage;
	
	/** 
	 * 代购单创建时间查询字段.时间段的结束时间.
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 代购单创建时间查询字段.时间段的起始时间.
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 商品id查询字段,根据商品id查询该商品的代购单
	 **/
	private $itemId;
	
	/** 
	 * 代购单id,根据代购单id查询返回对应的代购单
	 **/
	private $orderId;
	
	/** 
	 * 外部订单号(以","分隔开的)
	 **/
	private $outerProxyNums;
	
	/** 
	 * 根据网点名称查询该网点下的代购单情况.该字段只针对渠道用户状态下的查询有效.渠道用户状态参见用户类型字段
	 **/
	private $siteName;
	
	/** 
	 * 网点编号,根据网点编号查询某个网点下的代购单.该字段只针对渠道用户状态下的查询有效.渠道用户状态参见用户类型字段
	 **/
	private $siteNum;
	
	/** 
	 * 代购单的交易状态
0:等待渠道下单
1:等待渠道付款
2:等待卖家发货
3:等待网点确认收货
4:等待渠道确认收货
5:交易成功
6:交易关闭
7:问题订单
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setGmtCreateEnd($gmtCreateEnd)
	{
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmt_create_end"] = $gmtCreateEnd;
	}

	public function getGmtCreateEnd()
	{
		return $this->gmtCreateEnd;
	}

	public function setGmtCreateStart($gmtCreateStart)
	{
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmt_create_start"] = $gmtCreateStart;
	}

	public function getGmtCreateStart()
	{
		return $this->gmtCreateStart;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOuterProxyNums($outerProxyNums)
	{
		$this->outerProxyNums = $outerProxyNums;
		$this->apiParas["outer_proxy_nums"] = $outerProxyNums;
	}

	public function getOuterProxyNums()
	{
		return $this->outerProxyNums;
	}

	public function setSiteName($siteName)
	{
		$this->siteName = $siteName;
		$this->apiParas["site_name"] = $siteName;
	}

	public function getSiteName()
	{
		return $this->siteName;
	}

	public function setSiteNum($siteNum)
	{
		$this->siteNum = $siteNum;
		$this->apiParas["site_num"] = $siteNum;
	}

	public function getSiteNum()
	{
		return $this->siteNum;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.daigou.orders.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
