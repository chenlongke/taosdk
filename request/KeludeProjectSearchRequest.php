<?php
/**
 * TOP API: taobao.kelude.project.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-01 00:00:00
 */
class KeludeProjectSearchRequest
{
	/** 
	 * 公司id
	 **/
	private $companyId;
	
	/** 
	 * 项目名称
	 **/
	private $name;
	
	/** 
	 * 第几页，不填默认为第一页
	 **/
	private $pageNo;
	
	/** 
	 * 一页多少条数据，不填默认为20条
	 **/
	private $pageSize;
	
	/** 
	 * 产品线id
	 **/
	private $productlineId;
	
	/** 
	 * 产品线id的列表
	 **/
	private $productlineIdList;
	
	/** 
	 * 项目id的列表
	 **/
	private $projectIdList;
	
	/** 
	 * 公开私有。0表示公开，1表示私有
	 **/
	private $scope;
	
	/** 
	 * 项目来源，aone2代表从aone2同步过来的项目，kelude代表在kelude平台创建的项目
	 **/
	private $source;
	
	/** 
	 * 来源平台项目对应的id
	 **/
	private $sourceId;
	
	/** 
	 * Project，Daily2种值。Project代表项目，Daily代表日常。不填则搜索两种值下的数据
	 **/
	private $stamp;
	
	/** 
	 * 项目类型的列表
	 **/
	private $stampList;
	
	/** 
	 * 项目状态，1表示活动状态，4表示删除状态，不填搜索两种状态下的数据
	 **/
	private $status;
	
	/** 
	 * 更新开始时间
	 **/
	private $updatedAtFrom;
	
	/** 
	 * 更新结束时间
	 **/
	private $updatedAtTo;
	
	/** 
	 * 作者id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
		$this->apiParas["company_id"] = $companyId;
	}

	public function getCompanyId()
	{
		return $this->companyId;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setProductlineId($productlineId)
	{
		$this->productlineId = $productlineId;
		$this->apiParas["productline_id"] = $productlineId;
	}

	public function getProductlineId()
	{
		return $this->productlineId;
	}

	public function setProductlineIdList($productlineIdList)
	{
		$this->productlineIdList = $productlineIdList;
		$this->apiParas["productline_id_list"] = $productlineIdList;
	}

	public function getProductlineIdList()
	{
		return $this->productlineIdList;
	}

	public function setProjectIdList($projectIdList)
	{
		$this->projectIdList = $projectIdList;
		$this->apiParas["project_id_list"] = $projectIdList;
	}

	public function getProjectIdList()
	{
		return $this->projectIdList;
	}

	public function setScope($scope)
	{
		$this->scope = $scope;
		$this->apiParas["scope"] = $scope;
	}

	public function getScope()
	{
		return $this->scope;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setSourceId($sourceId)
	{
		$this->sourceId = $sourceId;
		$this->apiParas["source_id"] = $sourceId;
	}

	public function getSourceId()
	{
		return $this->sourceId;
	}

	public function setStamp($stamp)
	{
		$this->stamp = $stamp;
		$this->apiParas["stamp"] = $stamp;
	}

	public function getStamp()
	{
		return $this->stamp;
	}

	public function setStampList($stampList)
	{
		$this->stampList = $stampList;
		$this->apiParas["stamp_list"] = $stampList;
	}

	public function getStampList()
	{
		return $this->stampList;
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

	public function setUpdatedAtFrom($updatedAtFrom)
	{
		$this->updatedAtFrom = $updatedAtFrom;
		$this->apiParas["updated_at_from"] = $updatedAtFrom;
	}

	public function getUpdatedAtFrom()
	{
		return $this->updatedAtFrom;
	}

	public function setUpdatedAtTo($updatedAtTo)
	{
		$this->updatedAtTo = $updatedAtTo;
		$this->apiParas["updated_at_to"] = $updatedAtTo;
	}

	public function getUpdatedAtTo()
	{
		return $this->updatedAtTo;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.project.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->productlineIdList,20,"productlineIdList");
		RequestCheckUtil::checkMaxListSize($this->projectIdList,20,"projectIdList");
		RequestCheckUtil::checkMaxListSize($this->stampList,20,"stampList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
