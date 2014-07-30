<?php
/**
 * TOP API: taobao.item.modules.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-17 00:00:00
 */
class ItemModulesGetRequest
{
	/** 
	 * 查明卖家的模块列表时，支持分页查询
此参数表示要获取第几页
	 **/
	private $currentPage;
	
	/** 
	 * 排序方式
0：代表升序；1：代表降序
	 **/
	private $orderBy;
	
	/** 
	 * 排序字段，支持两种排序 模块的修改时间和创建时间 0：代表创建时间；1：代表修改时间
	 **/
	private $orderField;
	
	/** 
	 * 查明卖家的模块列表时，支持分页查询
此参数表示分页的大小
	 **/
	private $pageSize;
	
	/** 
	 * 搜索模块时，用到的模块标题关键词
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setOrderField($orderField)
	{
		$this->orderField = $orderField;
		$this->apiParas["order_field"] = $orderField;
	}

	public function getOrderField()
	{
		return $this->orderField;
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.item.modules.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
