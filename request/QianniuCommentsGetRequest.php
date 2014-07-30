<?php
/**
 * TOP API: taobao.qianniu.comments.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-21 00:00:00
 */
class QianniuCommentsGetRequest
{
	/** 
	 * 活动id
	 **/
	private $activityId;
	
	/** 
	 * 标记是热门评论2 还是所有评论  1
	 **/
	private $cmtType;
	
	/** 
	 * 页码 从1开始
	 **/
	private $page;
	
	/** 
	 * 获取一页的大小
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function setCmtType($cmtType)
	{
		$this->cmtType = $cmtType;
		$this->apiParas["cmt_type"] = $cmtType;
	}

	public function getCmtType()
	{
		return $this->cmtType;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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

	public function getApiMethodName()
	{
		return "taobao.qianniu.comments.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkNotNull($this->cmtType,"cmtType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
