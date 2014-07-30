<?php
/**
 * TOP API: taobao.trade.price.update request
 * 
 * @author auto create
 * @since 1.0, 2012-09-25 00:00:00
 */
class TradePriceUpdateRequest
{
	/** 
	 * 每笔订单所对应的修改价格，负数为减少，正数为增加，需要与oids一一对应。
	 **/
	private $adjustFees;
	
	/** 
	 * 子订单编号列表，用逗号分隔开，需要与后面的adjust_fees一一对应
	 **/
	private $oids;
	
	/** 
	 * 邮费，单位是元，按照小数格式3.50来写
	 **/
	private $postageFee;
	
	/** 
	 * 交易订单ID（主订单号）
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setAdjustFees($adjustFees)
	{
		$this->adjustFees = $adjustFees;
		$this->apiParas["adjust_fees"] = $adjustFees;
	}

	public function getAdjustFees()
	{
		return $this->adjustFees;
	}

	public function setOids($oids)
	{
		$this->oids = $oids;
		$this->apiParas["oids"] = $oids;
	}

	public function getOids()
	{
		return $this->oids;
	}

	public function setPostageFee($postageFee)
	{
		$this->postageFee = $postageFee;
		$this->apiParas["postage_fee"] = $postageFee;
	}

	public function getPostageFee()
	{
		return $this->postageFee;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.price.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adjustFees,"adjustFees");
		RequestCheckUtil::checkNotNull($this->oids,"oids");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkMinValue($this->tid,1,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
