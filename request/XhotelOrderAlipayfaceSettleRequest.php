<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.settle request
 * 
 * @author auto create
 * @since 1.0, 2014-04-09 00:00:00
 */
class XhotelOrderAlipayfaceSettleRequest
{
	/** 
	 * 离店日期，用于校验总房费收取。
	 **/
	private $checkOut;
	
	/** 
	 * 备注信息
	 **/
	private $memo;
	
	/** 
	 * 客人的其他消费金额。最终会和total_room_fee合并后从消费者账号中扣款
	 **/
	private $otherFee;
	
	/** 
	 * 其他消费明细
	 **/
	private $otherFeeDetail;
	
	/** 
	 * 淘宝订单号
	 **/
	private $tid;
	
	/** 
	 * 总房费,单位为分。不包含其他额外服务的消费。
	 **/
	private $totalRoomFee;
	
	private $apiParas = array();
	
	public function setCheckOut($checkOut)
	{
		$this->checkOut = $checkOut;
		$this->apiParas["check_out"] = $checkOut;
	}

	public function getCheckOut()
	{
		return $this->checkOut;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOtherFee($otherFee)
	{
		$this->otherFee = $otherFee;
		$this->apiParas["other_fee"] = $otherFee;
	}

	public function getOtherFee()
	{
		return $this->otherFee;
	}

	public function setOtherFeeDetail($otherFeeDetail)
	{
		$this->otherFeeDetail = $otherFeeDetail;
		$this->apiParas["other_fee_detail"] = $otherFeeDetail;
	}

	public function getOtherFeeDetail()
	{
		return $this->otherFeeDetail;
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

	public function setTotalRoomFee($totalRoomFee)
	{
		$this->totalRoomFee = $totalRoomFee;
		$this->apiParas["total_room_fee"] = $totalRoomFee;
	}

	public function getTotalRoomFee()
	{
		return $this->totalRoomFee;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.alipayface.settle";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkOut,"checkOut");
		RequestCheckUtil::checkMaxLength($this->memo,512,"memo");
		RequestCheckUtil::checkNotNull($this->otherFee,"otherFee");
		RequestCheckUtil::checkMinValue($this->otherFee,0,"otherFee");
		RequestCheckUtil::checkMaxLength($this->otherFeeDetail,1024,"otherFeeDetail");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkMinValue($this->tid,0,"tid");
		RequestCheckUtil::checkNotNull($this->totalRoomFee,"totalRoomFee");
		RequestCheckUtil::checkMinValue($this->totalRoomFee,0,"totalRoomFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
