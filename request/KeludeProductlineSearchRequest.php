<?php
/**
 * TOP API: taobao.kelude.productline.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-02 00:00:00
 */
class KeludeProductlineSearchRequest
{
	/** 
	 * 祖先产品线id，返回直接、间接挂在这个产品线下的产品线列表
	 **/
	private $ancestorId;
	
	/** 
	 * 公司id
	 **/
	private $companyId;
	
	/** 
	 * 产品线id
	 **/
	private $id;
	
	/** 
	 * 产品线id的列表
	 **/
	private $idList;
	
	/** 
	 * 产品线名字
	 **/
	private $name;
	
	/** 
	 * 页码，不传默认为1
	 **/
	private $pageNo;
	
	/** 
	 * 一页多少行，不传默认为20
	 **/
	private $pageSize;
	
	/** 
	 * 上级产品线的id，返回直接产品线列表
	 **/
	private $parentId;
	
	/** 
	 * 上级产品线id的列表，返回直接挂在这些产品线下的产品线
	 **/
	private $parentIdList;
	
	/** 
	 * 来源，目前有Kelude和aone2,不传输出全部产品线
	 **/
	private $source;
	
	/** 
	 * 来源平台的id
	 **/
	private $sourceId;
	
	/** 
	 * 产品线状态，1表示活动，4表示删除，不传输出全部
	 **/
	private $status;
	
	/** 
	 * 更新时间开始时间
	 **/
	private $updatedAtFrom;
	
	/** 
	 * 更新时间结束时间
	 **/
	private $updatedAtTo;
	
	private $apiParas = array();
	
	public function setAncestorId($ancestorId)
	{
		$this->ancestorId = $ancestorId;
		$this->apiParas["ancestor_id"] = $ancestorId;
	}

	public function getAncestorId()
	{
		return $this->ancestorId;
	}

	public function setCompanyId($companyId)
	{
		$this->companyId = $companyId;
		$this->apiParas["company_id"] = $companyId;
	}

	public function getCompanyId()
	{
		return $this->companyId;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

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

	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
		$this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

	public function setParentIdList($parentIdList)
	{
		$this->parentIdList = $parentIdList;
		$this->apiParas["parent_id_list"] = $parentIdList;
	}

	public function getParentIdList()
	{
		return $this->parentIdList;
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
		return "taobao.kelude.productline.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->idList,20,"idList");
		RequestCheckUtil::checkMaxListSize($this->parentIdList,20,"parentIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
