<?php
/**
 * TOP API: taobao.cloudstore.files.search request
 * 
 * @author auto create
 * @since 1.0, 2012-07-12 00:00:00
 */
class CloudstoreFilesSearchRequest
{
	/** 
	 * 文件分类编号
	 **/
	private $dirId;
	
	/** 
	 * 查询添加结束时间点，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endCreated;
	
	/** 
	 * 查询文件修改结束时间，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endModified;
	
	/** 
	 * 文件编号
	 **/
	private $fileId;
	
	/** 
	 * 文件标题,最大长度50字符，中英文都算一字符，精确匹配
	 **/
	private $fileName;
	
	/** 
	 * 0：文件查询结果排序,created:desc按添加时间从晚到早(默认),
1： created:asc按添加时间从早到晚
	 **/
	private $orderBy;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回100条,默认值50
	 **/
	private $pageSize;
	
	/** 
	 * 查询文件添加开始时间点，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startCreated;
	
	/** 
	 * 查询文件修改开始时间，格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;
	
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

	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
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

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function getApiMethodName()
	{
		return "taobao.cloudstore.files.search";
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
