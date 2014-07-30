<?php
/**
 * TOP API: taobao.daigou.exorders.cancel request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class DaigouExordersCancelRequest
{
	/** 
	 * 运费险dgOrderId的字符串列表.多个运费险dgOrderId,以半角逗号分隔.可以只传单个,必传参数
	 **/
	private $orderIds;
	
	private $apiParas = array();
	
	public function setOrderIds($orderIds)
	{
		$this->orderIds = $orderIds;
		$this->apiParas["order_ids"] = $orderIds;
	}

	public function getOrderIds()
	{
		return $this->orderIds;
	}

	public function getApiMethodName()
	{
		return "taobao.daigou.exorders.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderIds,"orderIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
