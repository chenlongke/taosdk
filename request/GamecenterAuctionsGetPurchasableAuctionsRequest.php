<?php
/**
 * TOP API: taobao.gamecenter.auctions.getPurchasableAuctions request
 * 
 * @author auto create
 * @since 1.0, 2014-01-08 00:00:00
 */
class GamecenterAuctionsGetPurchasableAuctionsRequest
{
	/** 
	 * 当前页
	 **/
	private $currentpage;
	
	/** 
	 * 扩展属性
	 **/
	private $extendinfo;
	
	/** 
	 * 每页显示多少条
	 **/
	private $pagesize;
	
	/** 
	 * 第一次调用时可不传，后面翻页需要传
	 **/
	private $totalitem;
	
	private $apiParas = array();
	
	public function setCurrentpage($currentpage)
	{
		$this->currentpage = $currentpage;
		$this->apiParas["currentpage"] = $currentpage;
	}

	public function getCurrentpage()
	{
		return $this->currentpage;
	}

	public function setExtendinfo($extendinfo)
	{
		$this->extendinfo = $extendinfo;
		$this->apiParas["extendinfo"] = $extendinfo;
	}

	public function getExtendinfo()
	{
		return $this->extendinfo;
	}

	public function setPagesize($pagesize)
	{
		$this->pagesize = $pagesize;
		$this->apiParas["pagesize"] = $pagesize;
	}

	public function getPagesize()
	{
		return $this->pagesize;
	}

	public function setTotalitem($totalitem)
	{
		$this->totalitem = $totalitem;
		$this->apiParas["totalitem"] = $totalitem;
	}

	public function getTotalitem()
	{
		return $this->totalitem;
	}

	public function getApiMethodName()
	{
		return "taobao.gamecenter.auctions.getPurchasableAuctions";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentpage,"currentpage");
		RequestCheckUtil::checkNotNull($this->pagesize,"pagesize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
