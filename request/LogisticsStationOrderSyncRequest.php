<?php
/**
 * TOP API: taobao.logistics.station.order.sync request
 * 
 * @author auto create
 * @since 1.0, 2013-12-24 00:00:00
 */
class LogisticsStationOrderSyncRequest
{
	/** 
	 * 物流订单ID，与stationId配合定位自提订单
	 **/
	private $lgOrderId;
	
	/** 
	 * 备注，本次操作的备注，一般由操作人员填写
	 **/
	private $note;
	
	/** 
	 * 卖家ID，与tradeId配合定位自提订单
	 **/
	private $sellerId;
	
	/** 
	 * 是否发送消息通知，在某些状态变化中，会向自提订单收件人发送相应的消息通知
	 **/
	private $sendMsg;
	
	/** 
	 * 自提订单ID，与stationId配合定位自提订单
	 **/
	private $staOrderId;
	
	/** 
	 * 站点ID，与staOrderId或lgOrderId配合定位自提订单
	 **/
	private $stationId;
	
	/** 
	 * 更新自提订单状态
	 **/
	private $status;
	
	/** 
	 * 交易订单ID，与sellerId配合定位自提订单
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setLgOrderId($lgOrderId)
	{
		$this->lgOrderId = $lgOrderId;
		$this->apiParas["lg_order_id"] = $lgOrderId;
	}

	public function getLgOrderId()
	{
		return $this->lgOrderId;
	}

	public function setNote($note)
	{
		$this->note = $note;
		$this->apiParas["note"] = $note;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSendMsg($sendMsg)
	{
		$this->sendMsg = $sendMsg;
		$this->apiParas["send_msg"] = $sendMsg;
	}

	public function getSendMsg()
	{
		return $this->sendMsg;
	}

	public function setStaOrderId($staOrderId)
	{
		$this->staOrderId = $staOrderId;
		$this->apiParas["sta_order_id"] = $staOrderId;
	}

	public function getStaOrderId()
	{
		return $this->staOrderId;
	}

	public function setStationId($stationId)
	{
		$this->stationId = $stationId;
		$this->apiParas["station_id"] = $stationId;
	}

	public function getStationId()
	{
		return $this->stationId;
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

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.station.order.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sendMsg,"sendMsg");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
