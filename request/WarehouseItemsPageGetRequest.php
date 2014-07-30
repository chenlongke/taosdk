<?php
/**
 * TOP API: taobao.warehouse.items.page.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-07 00:00:00
 */
class WarehouseItemsPageGetRequest
{
	/** 
	 * 商品条形码/货号。可从taobao.warehouse.items.get处获得
	 **/
	private $barCode;
	
	/** 
	 * 商品名称。可从taobao.warehouse.items.get处获得
	 **/
	private $itemName;
	
	/** 
	 * 商家编码。可从taobao.warehouse.items.get处获得
	 **/
	private $outerId;
	
	/** 
	 * 当前页，默认为1，最大页数取决于用户拥有的商品数和一页显示的记录数
	 **/
	private $pageNo;
	
	/** 
	 * 一页显示记录数，默认为20。最多为50，如果用户输入的记录数大于50，则按默认一页显示50条记录
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setItemName($itemName)
	{
		$this->itemName = $itemName;
		$this->apiParas["item_name"] = $itemName;
	}

	public function getItemName()
	{
		return $this->itemName;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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
		return "taobao.warehouse.items.page.get";
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
