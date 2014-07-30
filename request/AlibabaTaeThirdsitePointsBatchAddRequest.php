<?php
/**
 * TOP API: alibaba.tae.thirdsite.points.batch.add request
 * 
 * @author auto create
 * @since 1.0, 2014-03-31 00:00:00
 */
class AlibabaTaeThirdsitePointsBatchAddRequest
{
	/** 
	 * 批次结束的时间
	 **/
	private $endDate;
	
	/** 
	 * 积分批次的描述信息
	 **/
	private $memo;
	
	/** 
	 * 积分数量
	 **/
	private $number;
	
	/** 
	 * 是否是无限数量类型的积分批次，1->无限数量,0->限制数量的。即使是无限数量的积分类型，发送的积分总量也不能超过9223372036854775807
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
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

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.tae.thirdsite.points.batch.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkNotNull($this->number,"number");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
