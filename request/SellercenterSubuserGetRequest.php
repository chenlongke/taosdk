<?php
/**
 * TOP API: taobao.sellercenter.subuser.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-08 00:00:00
 */
class SellercenterSubuserGetRequest
{
	/** 
	 * 子账号ID
	 **/
	private $id;
	
	/** 
	 * 子账号昵称, 不支持模糊查询，加上主账号昵称长度小于23字节
	 **/
	private $nick;
	
	/** 
	 * 主账号昵称, 少于20字节，不支持模糊查询
	 **/
	private $sellerNick;
	
	/** 
	 * 子账号状态 1正常 2冻结，如果没设置该参数，返回所有状态子账号
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
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

	public function getApiMethodName()
	{
		return "taobao.sellercenter.subuser.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
