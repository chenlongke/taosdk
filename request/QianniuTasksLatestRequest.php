<?php
/**
 * TOP API: taobao.qianniu.tasks.latest request
 * 
 * @author auto create
 * @since 1.0, 2014-02-21 00:00:00
 */
class QianniuTasksLatestRequest
{
	/** 
	 * 单个业务ID
	 **/
	private $bizId;
	
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 当前页数，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 逗号分隔的字段列表，各个字段含义： id：任务ID receiver_uid：执行者用户数字ID receiver_nick：执行者用户昵称 status：任务状态：0-未执行，1-执行中，2-执行完成，3-超时，4-取消，5-忽略 sub_status：子任务状态，由业务方自定义 finish_strategy：任务完成策略：1-一个人完成，2-所有人完成 gmt_finished：任务完成时间，格式：时间毫秒数 biz_type：业务类型 sub_biz_type：子业务类型 biz_id：业务ID biz_param：业务参数 biz_entry：业务入口 tag：任务标签 memo：任务备注
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
	 * 子任务类型
	 **/
	private $subBizType;
	
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

	public function setSubBizType($subBizType)
	{
		$this->subBizType = $subBizType;
		$this->apiParas["sub_biz_type"] = $subBizType;
	}

	public function getSubBizType()
	{
		return $this->subBizType;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.tasks.latest";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
