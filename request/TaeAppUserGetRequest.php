<?php
/**
 * TOP API: taobao.tae.app.user.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-15 00:00:00
 */
class TaeAppUserGetRequest
{
	/** 
	 * 应用标识appkey
	 **/
	private $app;
	
	/** 
	 * 当前页码，第一页为1
	 **/
	private $currentPage;
	
	/** 
	 * 一页大小
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setApp($app)
	{
		$this->app = $app;
		$this->apiParas["app"] = $app;
	}

	public function getApp()
	{
		return $this->app;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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
		return "taobao.tae.app.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->app,"app");
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,4096,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
