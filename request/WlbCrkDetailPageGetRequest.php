<?php
/**
 * TOP API: taobao.wlb.crk.detail.page.get request
 * 
 * @author auto create
 * @since 1.0, 2011-04-12 00:00:00
 */
class WlbCrkDetailPageGetRequest
{
	/** 
	 * 出入库单的状态：
WAIT_CONFIRM--待确认
CONFIRMED--已确认
	 **/
	private $crkDetailStatus;
	
	/** 
	 * 分页查询的页数，默认1
	 **/
	private $pageNo;
	
	/** 
	 * 分页查询的每页数量，默认30
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCrkDetailStatus($crkDetailStatus)
	{
		$this->crkDetailStatus = $crkDetailStatus;
		$this->apiParas["crk_detail_status"] = $crkDetailStatus;
	}

	public function getCrkDetailStatus()
	{
		return $this->crkDetailStatus;
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
		return "taobao.wlb.crk.detail.page.get";
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
