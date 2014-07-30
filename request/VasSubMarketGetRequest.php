<?php
/**
 * TOP API: taobao.vas.sub.market.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class VasSubMarketGetRequest
{
	/** 
	 * 商品Code
	 **/
	private $articleCode;
	
	/** 
	 * 商品规格Code
	 **/
	private $articleItemCode;
	
	/** 
	 * 订购查询结束时间
	 **/
	private $endDate;
	
	/** 
	 * 商品集市类型
6：淘宝箱集市
2010：超级旺铺
2012-量子统计
2020：数据魔方
2030：视体验-T台秀
2025：数据报告
2050：淘江湖游戏
	 **/
	private $marketType;
	
	/** 
	 * 运营商Code
	 **/
	private $operatorCode;
	
	/** 
	 * 订购查询开始时间
	 **/
	private $startDate;
	
	/** 
	 * 查询订购状态：
ALL -- 所有订购记录信息
VALID -- 有效订购记录
HIST -- 过期历史的订购记录
	 **/
	private $status;
	
	/** 
	 * 用户的昵称需要使用UTF-8编码装换一下
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setArticleCode($articleCode)
	{
		$this->articleCode = $articleCode;
		$this->apiParas["article_code"] = $articleCode;
	}

	public function getArticleCode()
	{
		return $this->articleCode;
	}

	public function setArticleItemCode($articleItemCode)
	{
		$this->articleItemCode = $articleItemCode;
		$this->apiParas["article_item_code"] = $articleItemCode;
	}

	public function getArticleItemCode()
	{
		return $this->articleItemCode;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setMarketType($marketType)
	{
		$this->marketType = $marketType;
		$this->apiParas["market_type"] = $marketType;
	}

	public function getMarketType()
	{
		return $this->marketType;
	}

	public function setOperatorCode($operatorCode)
	{
		$this->operatorCode = $operatorCode;
		$this->apiParas["operator_code"] = $operatorCode;
	}

	public function getOperatorCode()
	{
		return $this->operatorCode;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.vas.sub.market.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->articleCode,64,"articleCode");
		RequestCheckUtil::checkMaxLength($this->articleItemCode,64,"articleItemCode");
		RequestCheckUtil::checkMaxValue($this->marketType,100000000000,"marketType");
		RequestCheckUtil::checkMinValue($this->marketType,1,"marketType");
		RequestCheckUtil::checkMaxLength($this->operatorCode,64,"operatorCode");
		RequestCheckUtil::checkMaxLength($this->status,16,"status");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
		RequestCheckUtil::checkMaxLength($this->userNick,256,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
