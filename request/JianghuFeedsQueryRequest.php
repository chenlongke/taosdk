<?php
/**
 * TOP API: taobao.jianghu.feeds.query request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuFeedsQueryRequest
{
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始.
	 **/
	private $pageNo;
	
	/** 
	 * 需要返回的条数。小于等于0默认是10条.最大50.
	 **/
	private $pageSize;
	
	/** 
	 * 产生feed的app，如果查多个以逗号分隔如1001,1002(须数字)
	 **/
	private $queryAppId;
	
	/** 
	 * 查询目标用户的uid，默认为查询当前用户的。根据用户的隐私控制策略，返回相应的Feed。(须数字)
	 **/
	private $queryUid;
	
	private $apiParas = array();
	
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

	public function setQueryAppId($queryAppId)
	{
		$this->queryAppId = $queryAppId;
		$this->apiParas["query_app_id"] = $queryAppId;
	}

	public function getQueryAppId()
	{
		return $this->queryAppId;
	}

	public function setQueryUid($queryUid)
	{
		$this->queryUid = $queryUid;
		$this->apiParas["query_uid"] = $queryUid;
	}

	public function getQueryUid()
	{
		return $this->queryUid;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.feeds.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
