<?php
/**
 * TOP API: taobao.qianniu.tasklist.biz.get request
 * 
 * @author auto create
 * @since 1.0, 2014-04-16 00:00:00
 */
class QianniuTasklistBizGetRequest
{
	/** 
	 * 业务关键id，如交易任务里为订单id，客服任务里为客户nick。多个以逗号分离。
	 **/
	private $bizId;
	
	/** 
	 * 业务类型.各插件只负责处理自身业务类型的任务。如订单插件只处理'trade'类型的任务。
	 **/
	private $bizType;
	
	/** 
	 * 当前页数，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 接口返回的字段。具体字段名参见接口返回的qtask类型。(相比老接口，不需要填totalcount，直接在返回中包含了)
	 **/
	private $fields;
	
	/** 
	 * 是否需要meta信息，默认值为false
	 **/
	private $needMeta;
	
	/** 
	 * 排序字段，可以为id,gmt_create,gmt_finished,metadata_id等
	 **/
	private $orderBy;
	
	/** 
	 * asc为升，desc为降
	 **/
	private $orderType;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 逗号分隔的任务状态：0-未执行，2-执行完成，4-取消
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setNeedMeta($needMeta)
	{
		$this->needMeta = $needMeta;
		$this->apiParas["need_meta"] = $needMeta;
	}

	public function getNeedMeta()
	{
		return $this->needMeta;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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
		return "taobao.qianniu.tasklist.biz.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
