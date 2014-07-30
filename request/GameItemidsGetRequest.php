<?php
/**
 * TOP API: taobao.game.itemids.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameItemidsGetRequest
{
	/** 
	 * 叶子类目ID（游戏ID）
	 **/
	private $cid;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 卖家的数字ID
	 **/
	private $userId;
	
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.game.itemids.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
