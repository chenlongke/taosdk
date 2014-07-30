<?php
/**
 * TOP API: taobao.jianghu.comments.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class JianghuCommentsGetRequest
{
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 每页显示的条数
	 **/
	private $pageSize;
	
	/** 
	 * 评论业务主体的主键。如feed的评论则为feedId
	 **/
	private $targetKey;
	
	/** 
	 * 评论类型。1:留言,2:投票,3:帮我挑,4:转帖,5:相册,6:日志,7:淘女郎,8:淘分享,9:叽歪,10:分享,11:掌柜说,12:淘单,13:试用中心
	 **/
	private $type;
	
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setTargetKey($targetKey)
	{
		$this->targetKey = $targetKey;
		$this->apiParas["target_key"] = $targetKey;
	}

	public function getTargetKey()
	{
		return $this->targetKey;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.comments.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetKey,"targetKey");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMaxValue($this->type,2147483647,"type");
		RequestCheckUtil::checkMinValue($this->type,-2147483648,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
