<?php
/**
 * TOP API: taobao.kelude.version.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class KeludeVersionSearchRequest
{
	/** 
	 * 版本id列表
	 **/
	private $idList;
	
	/** 
	 * 项目名，模糊匹配
	 **/
	private $name;
	
	/** 
	 * 页码，不传默认为1
	 **/
	private $pageNo;
	
	/** 
	 * 一页多少行，不传默认为10
	 **/
	private $pageSize;
	
	/** 
	 * 项目id
	 **/
	private $projectId;
	
	/** 
	 * 项目id列表
	 **/
	private $projectIdList;
	
	/** 
	 * 项目状态，0表示未发布，1表示发布，9表示删除。不传输出全部
	 **/
	private $status;
	
	/** 
	 * 更新时间的起始时间
	 **/
	private $updatedAtFrom;
	
	/** 
	 * 更新时间的结束时间
	 **/
	private $updatedAtTo;
	
	private $apiParas = array();
	
	public function setIdList($idList)
	{
		$this->idList = $idList;
		$this->apiParas["id_list"] = $idList;
	}

	public function getIdList()
	{
		return $this->idList;
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

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
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

	public function getApiMethodName()
	{
		return "taobao.kelude.version.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->idList,20,"idList");
		RequestCheckUtil::checkMaxListSize($this->projectIdList,20,"projectIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
