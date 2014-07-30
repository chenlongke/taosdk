<?php
/**
 * TOP API: taobao.game.verticalprops.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-04 00:00:00
 */
class GameVerticalpropsGetRequest
{
	/** 
	 * 叶子类目ID（游戏ID）
	 **/
	private $cid;
	
	/** 
	 * 属性:属性值。仅包含物品类型属性
	 **/
	private $props;
	
	/** 
	 * 寄售为CONSIGNMENT，担保为GUARANTEE
	 **/
	private $tradeType;
	
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

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.game.verticalprops.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->props,"props");
		RequestCheckUtil::checkNotNull($this->tradeType,"tradeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
