<?php
/**
 * TOP API: taobao.media.private.dir.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-18 00:00:00
 */
class MediaPrivateDirGetRequest
{
	/** 
	 * 多媒体应用接入biz_code
	 **/
	private $bizCode;
	
	/** 
	 * 目录id
	 **/
	private $dirId;
	
	/** 
	 * 查询添加结束时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 目录名称查询
	 **/
	private $name;
	
	/** 
	 * 目录查询结果排序,time:desc按上传时间从晚到早(默认), time:asc按上传时间从早到晚
	 **/
	private $orderBy;
	
	/** 
	 * owner_id
	 **/
	private $ownerId;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回100条,默认值40
	 **/
	private $pageSize;
	
	/** 
	 * 取二级分类时设置为对应父分类id
取一级分类时父分类id设为0
取全部分类的时候不设或设为-1
	 **/
	private $parentId;
	
	/** 
	 * 查询添加开始时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
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

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["owner_id"] = $ownerId;
	}

	public function getOwnerId()
	{
		return $this->ownerId;
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.media.private.dir.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkMaxValue($this->dirId,9223372036854775807,"dirId");
		RequestCheckUtil::checkNotNull($this->ownerId,"ownerId");
		RequestCheckUtil::checkMaxValue($this->ownerId,9223372036854775807,"ownerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
