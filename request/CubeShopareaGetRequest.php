<?php
/**
 * TOP API: taobao.cube.shoparea.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-13 00:00:00
 */
class CubeShopareaGetRequest
{
	/** 
	 * 淘宝后台类目id, 可以只写一个,如1101, 可以写多个,需要用逗号隔开,如1101,1512,11 最多为10个
	 **/
	private $cids;
	
	/** 
	 * 结束日期,限制为最近3个月
	 **/
	private $end;
	
	/** 
	 * 开始日期,限制为最近3个月
	 **/
	private $start;
	
	private $apiParas = array();
	
	public function setCids($cids)
	{
		$this->cids = $cids;
		$this->apiParas["cids"] = $cids;
	}

	public function getCids()
	{
		return $this->cids;
	}

	public function setEnd($end)
	{
		$this->end = $end;
		$this->apiParas["end"] = $end;
	}

	public function getEnd()
	{
		return $this->end;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function getApiMethodName()
	{
		return "taobao.cube.shoparea.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cids,"cids");
		RequestCheckUtil::checkMaxListSize($this->cids,10,"cids");
		RequestCheckUtil::checkMaxLength($this->cids,100,"cids");
		RequestCheckUtil::checkNotNull($this->end,"end");
		RequestCheckUtil::checkNotNull($this->start,"start");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
