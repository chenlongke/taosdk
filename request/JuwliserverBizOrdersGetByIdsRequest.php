<?php
/**
 * TOP API: taobao.juwliserver.biz.orders.get.by.ids request
 * 
 * @author auto create
 * @since 1.0, 2012-10-31 00:00:00
 */
class JuwliserverBizOrdersGetByIdsRequest
{
	/** 
	 * 订单id 列表
	 **/
	private $orderIdList;
	
	private $apiParas = array();
	
	public function setOrderIdList($orderIdList)
	{
		$this->orderIdList = $orderIdList;
		$this->apiParas["order_id_list"] = $orderIdList;
	}

	public function getOrderIdList()
	{
		return $this->orderIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.biz.orders.get.by.ids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderIdList,"orderIdList");
		RequestCheckUtil::checkMaxListSize($this->orderIdList,30,"orderIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
