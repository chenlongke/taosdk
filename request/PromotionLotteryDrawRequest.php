<?php
/**
 * TOP API: taobao.promotion.lottery.draw request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 00:00:00
 */
class PromotionLotteryDrawRequest
{
	/** 
	 * 抽奖分组. 可抽指定组奖品
	 **/
	private $group;
	
	/** 
	 * 抽奖ID
	 **/
	private $lotteryId;
	
	/** 
	 * 抽奖密钥 一个抽奖规则对应一个
	 **/
	private $lotteryKey;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setGroup($group)
	{
		$this->group = $group;
		$this->apiParas["group"] = $group;
	}

	public function getGroup()
	{
		return $this->group;
	}

	public function setLotteryId($lotteryId)
	{
		$this->lotteryId = $lotteryId;
		$this->apiParas["lottery_id"] = $lotteryId;
	}

	public function getLotteryId()
	{
		return $this->lotteryId;
	}

	public function setLotteryKey($lotteryKey)
	{
		$this->lotteryKey = $lotteryKey;
		$this->apiParas["lottery_key"] = $lotteryKey;
	}

	public function getLotteryKey()
	{
		return $this->lotteryKey;
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

	public function getApiMethodName()
	{
		return "taobao.promotion.lottery.draw";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lotteryId,"lotteryId");
		RequestCheckUtil::checkNotNull($this->lotteryKey,"lotteryKey");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
