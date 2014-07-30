<?php
/**
 * TOP API: taobao.wangwang.voip.number.stat.set request
 * 
 * @author auto create
 * @since 1.0, 2013-08-23 00:00:00
 */
class WangwangVoipNumberStatSetRequest
{
	/** 
	 * 需要设置的号码
	 **/
	private $number;
	
	/** 
	 * 状态代码
0：服务中
1：未服务 
2：未激活
3：激活
	 **/
	private $stat;
	
	/** 
	 * 号码所属卖家账号
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setStat($stat)
	{
		$this->stat = $stat;
		$this->apiParas["stat"] = $stat;
	}

	public function getStat()
	{
		return $this->stat;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.voip.number.stat.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->number,"number");
		RequestCheckUtil::checkMaxLength($this->number,20,"number");
		RequestCheckUtil::checkNotNull($this->stat,"stat");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
		RequestCheckUtil::checkMaxLength($this->uid,64,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
