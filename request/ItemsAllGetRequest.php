<?php
/**
 * TOP API: taobao.items.all.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ItemsAllGetRequest
{
	/** 
	 * 商品类目ID。ItemCat中的cid。可以通过taobao.itemcats.get取到
	 **/
	private $cid;
	
	/** 
	 * 需返回的字段列表。可选值：Item商品结构体中的以下字段： 
approve_status,num_iid,title,nick,type,cid,pic_path,num,props,valid_thru, 
list_time,price,has_discount,has_invoice,has_warranty,has_showcase, 
modified,delist_time,postage_id,seller_cids,outer_id；字段之间用“,”分隔。 
不支持其他字段，如果需要获取其他字段数据，调用taobao.item.get。
	 **/
	private $fields;
	
	/** 
	 * 排序方式。格式为column:asc/desc ，column可选值:list_time(上架时间),delist_time(下架时间),num(商品数量);默认上架时间降序(即最新上架排在前面)。如按照上架时间降序排序方式为list_time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
用此接口获取数据，当翻页获取的条数（page_no*page_size）超过10万条,为了保护后台搜索引擎，接口将报错。请大家尽可能的细化自己的搜索条件，或者转调taobao.items.onsale.get和taobao.items.inventory.get根据修改时间分段获取商品
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值：200；默认值：40。
	 **/
	private $pageSize;
	
	/** 
	 * 搜索字段。搜索商品的title。
	 **/
	private $q;
	
	/** 
	 * 卖家店铺内自定义类目ID。多个之间用“,”分隔。可以根据taobao.sellercats.list.get获得
	 **/
	private $sellerCids;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function getApiMethodName()
	{
		return "taobao.items.all.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxValue($this->pageNo,600,"pageNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
