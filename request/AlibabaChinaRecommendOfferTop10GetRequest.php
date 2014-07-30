<?php
/**
 * TOP API: alibaba.china.recommend.offer.top10.get request
 * 
 * @author auto create
 * @since 1.0, 2014-01-28 00:00:00
 */
class AlibabaChinaRecommendOfferTop10GetRequest
{
	/** 
	 * 店铺用户名
	 **/
	private $memberids;
	
	/** 
	 * 打点参数
	 **/
	private $pageid;
	
	/** 
	 * 算法配置号
	 **/
	private $recid;
	
	/** 
	 * UserID，当前用户ID
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setMemberids($memberids)
	{
		$this->memberids = $memberids;
		$this->apiParas["memberids"] = $memberids;
	}

	public function getMemberids()
	{
		return $this->memberids;
	}

	public function setPageid($pageid)
	{
		$this->pageid = $pageid;
		$this->apiParas["pageid"] = $pageid;
	}

	public function getPageid()
	{
		return $this->pageid;
	}

	public function setRecid($recid)
	{
		$this->recid = $recid;
		$this->apiParas["recid"] = $recid;
	}

	public function getRecid()
	{
		return $this->recid;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "alibaba.china.recommend.offer.top10.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memberids,"memberids");
		RequestCheckUtil::checkNotNull($this->recid,"recid");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
