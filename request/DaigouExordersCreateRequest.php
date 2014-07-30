<?php
/**
 * TOP API: taobao.daigou.exorders.create request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class DaigouExordersCreateRequest
{
	/** 
	 * 订单信息json格式字符串，格式如下：
{"ctOrderViewInfos":[{"id":132565648,"topCarriage":600},{"id":132565658,"topCarriage":1500}]}
	 **/
	private $ctOrderInfos;
	
	/** 
	 * 购买点唯一标志位
	 **/
	private $flags;
	
	private $apiParas = array();
	
	public function setCtOrderInfos($ctOrderInfos)
	{
		$this->ctOrderInfos = $ctOrderInfos;
		$this->apiParas["ct_order_infos"] = $ctOrderInfos;
	}

	public function getCtOrderInfos()
	{
		return $this->ctOrderInfos;
	}

	public function setFlags($flags)
	{
		$this->flags = $flags;
		$this->apiParas["flags"] = $flags;
	}

	public function getFlags()
	{
		return $this->flags;
	}

	public function getApiMethodName()
	{
		return "taobao.daigou.exorders.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ctOrderInfos,"ctOrderInfos");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
