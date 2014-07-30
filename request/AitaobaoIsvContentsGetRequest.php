<?php
/**
 * TOP API: taobao.aitaobao.isv.contents.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class AitaobaoIsvContentsGetRequest
{
	/** 
	 * 需要返回的字段，目前包括如下字段id,title,type_id,channle_id,tag_ids,custom_tags,link,desc,cover,images,status
	 **/
	private $fields;
	
	/** 
	 * 页码.结果页1~99
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.最大每页40
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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
		return "taobao.aitaobao.isv.contents.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
