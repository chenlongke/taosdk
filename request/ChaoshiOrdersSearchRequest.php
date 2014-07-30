<?php
/**
 * TOP API: taobao.chaoshi.orders.search request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 00:00:00
 */
class ChaoshiOrdersSearchRequest
{
	/** 
	 * 结束查询的确认收货时间
	 **/
	private $endConfirmTime;
	
	/** 
	 * 结束查询的付款时间
	 **/
	private $endPayTime;
	
	/** 
	 * 查询时间范围的结束时间（按照订单修改时间查询）。必须大于开始时间(时间跨度不能大于24小时)，格式:yyyy-MM-dd HH:mm:ss。建议使用30分钟以内的时间跨度，能大大提高响应速度和成功率。
	 **/
	private $endTime;
	
	/** 
	 * 需要返回的字段。目前支持有： 1.ChaoshiOrder中可以指定返回的fields: biz_order_id, buyer_nick, seller_nick, buy_amount, biz_type, gmt_create, last_modified, fail_reason, end_time, pay_time, adjust_fee, discount_fee, refund_fee, cod_status, out_logistics_id, post_fee, total_fee, point_fee, night_delivery，goods_total_fee

<br><br>2.ChaoshiChildOrder中可以指定返回fields：child_orders.biz_order_id, child_orders.buy_amount, child_orders.last_modified, child_orders.fail_reason, child_orders.end_time, child_orders.point_rate, child_orders.adjust_fee, child_orders.discount_fee, child_orders.refund_fee, child_orders.auction_id, child_orders.auction_title, child_orders.auction_price, child_orders.parent_id, child_orders.sku_properties, child_orders.buyer_obtain_point
<br><br>
3.如需返回ChaoshiChildOrder的所有内容，传入“child_orders_all”
	 **/
	private $fields;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围：1~20，默认值：15
	 **/
	private $pageSize;
	
	/** 
	 * 开始查询的确认收货时间
	 **/
	private $startConfirmTime;
	
	/** 
	 * 开始查询的付款时间
	 **/
	private $startPayTime;
	
	/** 
	 * 需查询时间范围的开始时间（按照订单修改时间查询）。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndConfirmTime($endConfirmTime)
	{
		$this->endConfirmTime = $endConfirmTime;
		$this->apiParas["end_confirm_time"] = $endConfirmTime;
	}

	public function getEndConfirmTime()
	{
		return $this->endConfirmTime;
	}

	public function setEndPayTime($endPayTime)
	{
		$this->endPayTime = $endPayTime;
		$this->apiParas["end_pay_time"] = $endPayTime;
	}

	public function getEndPayTime()
	{
		return $this->endPayTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartConfirmTime($startConfirmTime)
	{
		$this->startConfirmTime = $startConfirmTime;
		$this->apiParas["start_confirm_time"] = $startConfirmTime;
	}

	public function getStartConfirmTime()
	{
		return $this->startConfirmTime;
	}

	public function setStartPayTime($startPayTime)
	{
		$this->startPayTime = $startPayTime;
		$this->apiParas["start_pay_time"] = $startPayTime;
	}

	public function getStartPayTime()
	{
		return $this->startPayTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.orders.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
