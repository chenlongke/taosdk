<?php
/**
 * TOP API: taobao.chaoshi.refunds.search request
 * 
 * @author auto create
 * @since 1.0, 2014-01-22 00:00:00
 */
class ChaoshiRefundsSearchRequest
{
	/** 
	 * 查询修改结束时间，必须大于修改开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss。
	 **/
	private $endModified;
	
	/** 
	 * 经营TP的昵称
	 **/
	private $nick;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围：1~100，默认值：40。建议使用40~50，可以提高成功率，减少超时数量。
	 **/
	private $pageSize;
	
	/** 
	 * 查询修改开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function getApiMethodName()
	{
		return "taobao.chaoshi.refunds.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endModified,"endModified");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startModified,"startModified");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
