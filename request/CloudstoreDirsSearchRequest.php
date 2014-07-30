<?php
/**
 * TOP API: taobao.cloudstore.dirs.search request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreDirsSearchRequest
{
	/** 
	 * 媒体文件分类编号
	 **/
	private $dirId;
	
	/** 
	 * 媒体文件分类名称，精确匹配
	 **/
	private $dirName;
	
	/** 
	 * 按创建时间排序
0： 升序
1： 降序
默认值1
	 **/
	private $orderBy;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回1000条,默认值100
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function setDirName($dirName)
	{
		$this->dirName = $dirName;
		$this->apiParas["dir_name"] = $dirName;
	}

	public function getDirName()
	{
		return $this->dirName;
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

	public function getApiMethodName()
	{
		return "taobao.cloudstore.dirs.search";
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
