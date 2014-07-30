<?php
/**
 * TOP API: taobao.dd.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class DdOrderConfirmRequest
{
	/** 
	 * 淘宝订单id对应的门店收银订单id
	 **/
	private $cashierOrderid;
	
	/** 
	 * 一些异常信息
1：桌台未关
同一个用户在同一个桌台多次下单要求可以加单
2：订单总价不一样
3：商品单价不一样
4: 换台
	 **/
	private $code;
	
	/** 
	 * json格式，反馈菜品沽清，价格变化等信息<BR/>

[
  {
    "itemid": "455",
    "soldout":1,
    "price": 58.00,
    "skucode": "455_1-2_2-3"
  }
]
	 **/
	private $items;
	
	/** 
	 * 用来记录订单反馈的信息;
建议用JSON格式，
如果换台{"tableno":"001","tablename":"1号台"}
	 **/
	private $message;
	
	/** 
	 * 淘宝点点订单id（非淘宝订单）
	 **/
	private $orderid;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	/** 
	 * 确认订单状态
0：失败
10：淘点单数据成功写入门店预订单
2：淘点单成功开台or进入后厨
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setCashierOrderid($cashierOrderid)
	{
		$this->cashierOrderid = $cashierOrderid;
		$this->apiParas["cashier_orderid"] = $cashierOrderid;
	}

	public function getCashierOrderid()
	{
		return $this->cashierOrderid;
	}

	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setOrderid($orderid)
	{
		$this->orderid = $orderid;
		$this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid()
	{
		return $this->orderid;
	}

	public function setSellerUsernick($sellerUsernick)
	{
		$this->sellerUsernick = $sellerUsernick;
		$this->apiParas["seller_usernick"] = $sellerUsernick;
	}

	public function getSellerUsernick()
	{
		return $this->sellerUsernick;
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
		return "taobao.dd.order.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderid,"orderid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
