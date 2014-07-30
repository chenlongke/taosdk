<?php
/**
 * TOP API: taobao.lz.st.hourtrend request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class LzStHourtrendRequest
{
	/** 
	 * 查询日期
	 **/
	private $day;
	
	/** 
	 * 查询指标类型可以为 [pv,uv,amt,num],如果多个用逗号分隔
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setDay($day)
	{
		$this->day = $day;
		$this->apiParas["day"] = $day;
	}

	public function getDay()
	{
		return $this->day;
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
		return "taobao.lz.st.hourtrend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->day,"day");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
