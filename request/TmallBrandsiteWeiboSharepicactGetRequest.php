<?php
/**
 * TOP API: tmall.brandsite.weibo.sharepicact.get request
 * 
 * @author auto create
 * @since 1.0, 2013-11-21 00:00:00
 */
class TmallBrandsiteWeiboSharepicactGetRequest
{
	/** 
	 * 需要第几页数据
	 **/
	private $pageNo;
	
	/** 
	 * 每页晒图的个数，默认8个，最大值100个
	 **/
	private $pageSize;
	
	/** 
	 * 新浪的userId
	 **/
	private $sinaUserId;
	
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

	public function setSinaUserId($sinaUserId)
	{
		$this->sinaUserId = $sinaUserId;
		$this->apiParas["sina_user_id"] = $sinaUserId;
	}

	public function getSinaUserId()
	{
		return $this->sinaUserId;
	}

	public function getApiMethodName()
	{
		return "tmall.brandsite.weibo.sharepicact.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sinaUserId,"sinaUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
