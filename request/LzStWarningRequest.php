<?php
/**
 * TOP API: taobao.lz.st.warning request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class LzStWarningRequest
{
	/** 
	 * 支付宝成交金额配置值
	 **/
	private $amt;
	
	/** 
	 * 是否开启支付宝成交金额配置值[0,1]
	 **/
	private $amtenable;
	
	/** 
	 * 支付宝成交件数配置值
	 **/
	private $num;
	
	/** 
	 * 是否开启支付宝成交笔数配置值[0,1]
	 **/
	private $numenable;
	
	/** 
	 * 浏览量配置值
	 **/
	private $pv;
	
	/** 
	 * 是否开启pv配置值 [0,1]
	 **/
	private $pvenable;
	
	/** 
	 * 通过type区分是波动配置还是目标配置
type=0或1 表示波动预警是否开启小时报警
type=-1 表示目标达成
	 **/
	private $type;
	
	/** 
	 * 访客数配置值
	 **/
	private $uv;
	
	/** 
	 * 是否开启访客数配置值[0,1]
	 **/
	private $uvenable;
	
	private $apiParas = array();
	
	public function setAmt($amt)
	{
		$this->amt = $amt;
		$this->apiParas["amt"] = $amt;
	}

	public function getAmt()
	{
		return $this->amt;
	}

	public function setAmtenable($amtenable)
	{
		$this->amtenable = $amtenable;
		$this->apiParas["amtenable"] = $amtenable;
	}

	public function getAmtenable()
	{
		return $this->amtenable;
	}

	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setNumenable($numenable)
	{
		$this->numenable = $numenable;
		$this->apiParas["numenable"] = $numenable;
	}

	public function getNumenable()
	{
		return $this->numenable;
	}

	public function setPv($pv)
	{
		$this->pv = $pv;
		$this->apiParas["pv"] = $pv;
	}

	public function getPv()
	{
		return $this->pv;
	}

	public function setPvenable($pvenable)
	{
		$this->pvenable = $pvenable;
		$this->apiParas["pvenable"] = $pvenable;
	}

	public function getPvenable()
	{
		return $this->pvenable;
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

	public function setUv($uv)
	{
		$this->uv = $uv;
		$this->apiParas["uv"] = $uv;
	}

	public function getUv()
	{
		return $this->uv;
	}

	public function setUvenable($uvenable)
	{
		$this->uvenable = $uvenable;
		$this->apiParas["uvenable"] = $uvenable;
	}

	public function getUvenable()
	{
		return $this->uvenable;
	}

	public function getApiMethodName()
	{
		return "taobao.lz.st.warning";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amt,"amt");
		RequestCheckUtil::checkNotNull($this->amtenable,"amtenable");
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkNotNull($this->numenable,"numenable");
		RequestCheckUtil::checkNotNull($this->pv,"pv");
		RequestCheckUtil::checkNotNull($this->pvenable,"pvenable");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->uv,"uv");
		RequestCheckUtil::checkNotNull($this->uvenable,"uvenable");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
