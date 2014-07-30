<?php
/**
 * TOP API: taobao.taobaoke.ext.report.get request
 * 
 * @author auto create
 * @since 1.0, 2012-10-17 00:00:00
 */
class TaobaokeExtReportGetRequest
{
	/** 
	 * 需要查询的b2cid（如果不指定，返回pubid下所有）
	 **/
	private $b2cid;
	
	/** 
	 * 需返回的字段列表.可选值:TaobaokeExtReportMember淘宝客外部B2C报表成员结构体中除开earning_time的所有字段;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 当前页数.只能获取1-499页数据.
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回结果数,默认是40条.最大每页100
	 **/
	private $pageSize;
	
	/** 
	 * 查询报表的时间跨度，单位秒。
以用户输入的start_time时间为起始时间，start_time+span为结束时间，查询该时间段内的订单。
span最小值为1秒，
span最大值为86400秒(24小时)
	 **/
	private $span;
	
	/** 
	 * 需要查询报表的开始日期，有效的日期为从当前日期开始起90天以内的订单
	 **/
	private $startTime;
	
	/** 
	 * 订单状态，必须输入N,S,F,P其中任意一值。
N-新建
S-成功
F-失败
P-结算
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setB2cid($b2cid)
	{
		$this->b2cid = $b2cid;
		$this->apiParas["b2cid"] = $b2cid;
	}

	public function getB2cid()
	{
		return $this->b2cid;
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

	public function setSpan($span)
	{
		$this->span = $span;
		$this->apiParas["span"] = $span;
	}

	public function getSpan()
	{
		return $this->span;
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
		return "taobao.taobaoke.ext.report.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxValue($this->pageNo,499,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkNotNull($this->span,"span");
		RequestCheckUtil::checkMaxValue($this->span,86400,"span");
		RequestCheckUtil::checkMinValue($this->span,60,"span");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
