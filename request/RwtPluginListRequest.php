<?php
/**
 * TOP API: taobao.rwt.plugin.list request
 * 
 * @author auto create
 * @since 1.0, 2011-09-09 00:00:00
 */
class RwtPluginListRequest
{
	/** 
	 * 任我淘插件的appkey
	 **/
	private $appkey;
	
	/** 
	 * 查询关键字
	 **/
	private $keyword;
	
	/** 
	 * 排序规则（不区分大小写）:asc、desc
	 **/
	private $orderSeq;
	
	/** 
	 * 排序字段（不区分大小写）:"gmtUpload":(上传时间);"gmtModified":(修改时间);"downloadCount":(下载次数);"price":(价格)
	 **/
	private $orderString;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页显示的个数
	 **/
	private $pageSize;
	
	/** 
	 * 插件是否免费: 0 代表不收费 ; 1代表收费
	 **/
	private $policy;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setOrderSeq($orderSeq)
	{
		$this->orderSeq = $orderSeq;
		$this->apiParas["orderSeq"] = $orderSeq;
	}

	public function getOrderSeq()
	{
		return $this->orderSeq;
	}

	public function setOrderString($orderString)
	{
		$this->orderString = $orderString;
		$this->apiParas["orderString"] = $orderString;
	}

	public function getOrderString()
	{
		return $this->orderString;
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

	public function setPolicy($policy)
	{
		$this->policy = $policy;
		$this->apiParas["policy"] = $policy;
	}

	public function getPolicy()
	{
		return $this->policy;
	}

	public function getApiMethodName()
	{
		return "taobao.rwt.plugin.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->policy,1,"policy");
		RequestCheckUtil::checkMinValue($this->policy,0,"policy");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
