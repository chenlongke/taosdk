<?php
/**
 * TOP API: taobao.jianghu.fans.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-20 00:00:00
 */
class JianghuFansGetRequest
{
	/** 
	 * 查询的结束条目序号
	 **/
	private $end;
	
	/** 
	 * 查询的开始条目序号
	 **/
	private $start;
	
	/** 
	 * 达人的id号
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setEnd($end)
	{
		$this->end = $end;
		$this->apiParas["end"] = $end;
	}

	public function getEnd()
	{
		return $this->end;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
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
		return "taobao.jianghu.fans.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->end,"end");
		RequestCheckUtil::checkNotNull($this->start,"start");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
