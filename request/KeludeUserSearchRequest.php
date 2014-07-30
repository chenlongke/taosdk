<?php
/**
 * TOP API: taobao.kelude.user.search request
 * 
 * @author auto create
 * @since 1.0, 2014-04-14 00:00:00
 */
class KeludeUserSearchRequest
{
	/** 
	 * 是否包含外部人员
	 **/
	private $includeExtend;
	
	/** 
	 * 每页参数，第几页
	 **/
	private $pageNo;
	
	/** 
	 * 每页参数，每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 用户标示（可以为花名、域账号、工号、邮箱、ID）
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setIncludeExtend($includeExtend)
	{
		$this->includeExtend = $includeExtend;
		$this->apiParas["include_extend"] = $includeExtend;
	}

	public function getIncludeExtend()
	{
		return $this->includeExtend;
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

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.user.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->includeExtend,"includeExtend");
		RequestCheckUtil::checkNotNull($this->user,"user");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
