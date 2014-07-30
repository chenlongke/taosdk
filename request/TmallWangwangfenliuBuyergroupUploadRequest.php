<?php
/**
 * TOP API: tmall.wangwangfenliu.buyergroup.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class TmallWangwangfenliuBuyergroupUploadRequest
{
	/** 
	 * 买家名单列表,单次上传买家名单列表个数要小于1000，按照逗号分隔计算个数
	 **/
	private $buyerList;
	
	/** 
	 * 上传标识 0,覆盖；1 追加；-1删除  格式为Sting
	 **/
	private $flag;
	
	/** 
	 * 服务分组名称
	 **/
	private $groupName;
	
	/** 
	 * 商家id
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setBuyerList($buyerList)
	{
		$this->buyerList = $buyerList;
		$this->apiParas["buyer_list"] = $buyerList;
	}

	public function getBuyerList()
	{
		return $this->buyerList;
	}

	public function setFlag($flag)
	{
		$this->flag = $flag;
		$this->apiParas["flag"] = $flag;
	}

	public function getFlag()
	{
		return $this->flag;
	}

	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
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

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.buyergroup.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerList,"buyerList");
		RequestCheckUtil::checkNotNull($this->flag,"flag");
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxLength($this->groupName,64,"groupName");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkMaxLength($this->sellerId,64,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
