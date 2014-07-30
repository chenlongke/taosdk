<?php
/**
 * TOP API: taobao.kelude.project.user.projects request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class KeludeProjectUserProjectsRequest
{
	/** 
	 * 第几页
	 **/
	private $pageNo;
	
	/** 
	 * 一页多少行
	 **/
	private $pageSize;
	
	/** 
	 * 项目的类型，有Project,Daily两种，不填搜全部
	 **/
	private $stamp;
	
	/** 
	 * 用户的id
	 **/
	private $userId;
	
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

	public function setStamp($stamp)
	{
		$this->stamp = $stamp;
		$this->apiParas["stamp"] = $stamp;
	}

	public function getStamp()
	{
		return $this->stamp;
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
		return "taobao.kelude.project.user.projects";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
