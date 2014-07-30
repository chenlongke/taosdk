<?php
/**
 * TOP API: taobao.game.items.search request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameItemsSearchRequest
{
	/** 
	 * 宝贝状态：SELLDOWN表示卖家下架，ADMINDOWN表示小二下架，NEVER表示从未上架
	 **/
	private $auctionStatus;
	
	/** 
	 * 游戏区pv
	 **/
	private $gameArea;
	
	/** 
	 * 游戏ID
	 **/
	private $gameId;
	
	/** 
	 * 游戏服pv
	 **/
	private $gameServer;
	
	/** 
	 * 是否支持无货赔付
	 **/
	private $isFreeze;
	
	/** 
	 * 当前页数
	 **/
	private $pageNo;
	
	/** 
	 * 查询关键词
	 **/
	private $q;
	
	/** 
	 * 三种状态：在售(ONSALE），下架(UNDER)，售完(SOLDOUT)；默认在售
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setAuctionStatus($auctionStatus)
	{
		$this->auctionStatus = $auctionStatus;
		$this->apiParas["auction_status"] = $auctionStatus;
	}

	public function getAuctionStatus()
	{
		return $this->auctionStatus;
	}

	public function setGameArea($gameArea)
	{
		$this->gameArea = $gameArea;
		$this->apiParas["game_area"] = $gameArea;
	}

	public function getGameArea()
	{
		return $this->gameArea;
	}

	public function setGameId($gameId)
	{
		$this->gameId = $gameId;
		$this->apiParas["game_id"] = $gameId;
	}

	public function getGameId()
	{
		return $this->gameId;
	}

	public function setGameServer($gameServer)
	{
		$this->gameServer = $gameServer;
		$this->apiParas["game_server"] = $gameServer;
	}

	public function getGameServer()
	{
		return $this->gameServer;
	}

	public function setIsFreeze($isFreeze)
	{
		$this->isFreeze = $isFreeze;
		$this->apiParas["is_freeze"] = $isFreeze;
	}

	public function getIsFreeze()
	{
		return $this->isFreeze;
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

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getApiMethodName()
	{
		return "taobao.game.items.search";
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
