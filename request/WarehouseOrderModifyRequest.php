<?php
/**
 * TOP API: taobao.warehouse.order.modify request
 * 
 * @author auto create
 * @since 1.0, 2011-01-14 00:00:00
 */
class WarehouseOrderModifyRequest
{
	/** 
	 * 赠品数量列表，以逗号隔开，数量必须和outer_ids字段中的outer_id数量一致，并且一一对应,传入的数字可以是负数，表示减少商品。当传入的数量和原有的数量之和小于等于0时表示删除，大于0时：若原赠品存在执行修改操作，不存在执行添加操作
	 **/
	private $goodsQuantitys;
	
	/** 
	 * 物流订单LP号，与交易订单号二者必填一个.优先级别：交易订单号>物流订单LP号
	 **/
	private $orderCode;
	
	/** 
	 * 商家编码列表，以逗号隔开，一次最多60个赠品
	 **/
	private $outerIds;
	
	/** 
	 * 交易订单号，与物流订单LP号二者必填一个，优先级别：交易订单号>物流订单LP号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setGoodsQuantitys($goodsQuantitys)
	{
		$this->goodsQuantitys = $goodsQuantitys;
		$this->apiParas["goods_quantitys"] = $goodsQuantitys;
	}

	public function getGoodsQuantitys()
	{
		return $this->goodsQuantitys;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOuterIds($outerIds)
	{
		$this->outerIds = $outerIds;
		$this->apiParas["outer_ids"] = $outerIds;
	}

	public function getOuterIds()
	{
		return $this->outerIds;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.warehouse.order.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->goodsQuantitys,"goodsQuantitys");
		RequestCheckUtil::checkMaxListSize($this->goodsQuantitys,60,"goodsQuantitys");
		RequestCheckUtil::checkMaxLength($this->orderCode,40,"orderCode");
		RequestCheckUtil::checkNotNull($this->outerIds,"outerIds");
		RequestCheckUtil::checkMaxListSize($this->outerIds,60,"outerIds");
		RequestCheckUtil::checkMaxLength($this->outerIds,64,"outerIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
