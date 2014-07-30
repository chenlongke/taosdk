<?php
/**
 * TOP API: taobao.trade.idle.create request
 * 
 * @author auto create
 * @since 1.0, 2013-04-02 00:00:00
 */
class TradeIdleCreateRequest
{
	/** 
	 * 邮寄地址的id，当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（当此参数不为空时收货地址详细信息已经确认，则new_divisioncode、new_postcode、new_address、new_name、new_mobile、new_phone将被无效。当有新的收货地址时，address_id则为空，收货地址将采用新的收货地址信息，则new_divisioncode、new_postcode、new_address、new_name、new_mobile、new_phone的值将被采用。）
	 **/
	private $addressId;
	
	/** 
	 * 下单打入特殊的标记，改标记必须在文档中有描述，并且系统可以识别，目前支持ttid_value这个值
	 **/
	private $attrList;
	
	/** 
	 * 买家留言备注信息长度在500字符
	 **/
	private $buyerMemo;
	
	/** 
	 * excway:0表示在线交易
excway:1表示线下交易（见面交易）
	 **/
	private $excway;
	
	/** 
	 * 新增收货地址的收件人地址，当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（当address_id不为空时，此值传入无效，此时可以不传入）
	 **/
	private $newAddress;
	
	/** 
	 * 新增收货地址的区域码，当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（通过调用接口得到标准的区域码。当address_id不为空时，此值传入无效，此时可以不传入）区位码严格按照提供的xml中省市区对应的区域码来设置。(TOP提供省市区转换区域码的xml文件)
	 **/
	private $newDivisioncode;
	
	/** 
	 * 新增收货地址的手机号码,当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（当address_id不为空时，此值传入无效，此时可以不传入。new_mobile与new_phone至少一个不为空）当excway=1在见面易的时候，手机和电话至少留一个。
	 **/
	private $newMobile;
	
	/** 
	 * 新增收货地址的收件人姓名,当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（当address_id不为空时，此值传入无效，此时可以不传入）当excway=1在见面易的时候，必须要传入收货人姓名。
	 **/
	private $newName;
	
	/** 
	 * 新增收货地址的电话号码，当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（当address_id不为空时，此值传入无效，此时可以不传入。new_mobile与new_phone至少一个不为空）当excway=1在见面易的时候，手机和电话至少留一个。
	 **/
	private $newPhone;
	
	/** 
	 * 新增收货地址的邮编,当excway=0在线交易的时候，默认快递，需要传入收货地址和收货人信息。（当address_id不为空时，此值传入无效，此时可以不传入）
	 **/
	private $newPostcode;
	
	/** 
	 * 购买的闲置宝贝的数量
	 **/
	private $num;
	
	/** 
	 * 闲置商品的宝贝id
	 **/
	private $numId;
	
	/** 
	 * 外部订单号，可以自定义，为了防止重复提交订单
	 **/
	private $outId;
	
	private $apiParas = array();
	
	public function setAddressId($addressId)
	{
		$this->addressId = $addressId;
		$this->apiParas["address_id"] = $addressId;
	}

	public function getAddressId()
	{
		return $this->addressId;
	}

	public function setAttrList($attrList)
	{
		$this->attrList = $attrList;
		$this->apiParas["attr_list"] = $attrList;
	}

	public function getAttrList()
	{
		return $this->attrList;
	}

	public function setBuyerMemo($buyerMemo)
	{
		$this->buyerMemo = $buyerMemo;
		$this->apiParas["buyer_memo"] = $buyerMemo;
	}

	public function getBuyerMemo()
	{
		return $this->buyerMemo;
	}

	public function setExcway($excway)
	{
		$this->excway = $excway;
		$this->apiParas["excway"] = $excway;
	}

	public function getExcway()
	{
		return $this->excway;
	}

	public function setNewAddress($newAddress)
	{
		$this->newAddress = $newAddress;
		$this->apiParas["new_address"] = $newAddress;
	}

	public function getNewAddress()
	{
		return $this->newAddress;
	}

	public function setNewDivisioncode($newDivisioncode)
	{
		$this->newDivisioncode = $newDivisioncode;
		$this->apiParas["new_divisioncode"] = $newDivisioncode;
	}

	public function getNewDivisioncode()
	{
		return $this->newDivisioncode;
	}

	public function setNewMobile($newMobile)
	{
		$this->newMobile = $newMobile;
		$this->apiParas["new_mobile"] = $newMobile;
	}

	public function getNewMobile()
	{
		return $this->newMobile;
	}

	public function setNewName($newName)
	{
		$this->newName = $newName;
		$this->apiParas["new_name"] = $newName;
	}

	public function getNewName()
	{
		return $this->newName;
	}

	public function setNewPhone($newPhone)
	{
		$this->newPhone = $newPhone;
		$this->apiParas["new_phone"] = $newPhone;
	}

	public function getNewPhone()
	{
		return $this->newPhone;
	}

	public function setNewPostcode($newPostcode)
	{
		$this->newPostcode = $newPostcode;
		$this->apiParas["new_postcode"] = $newPostcode;
	}

	public function getNewPostcode()
	{
		return $this->newPostcode;
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

	public function setNumId($numId)
	{
		$this->numId = $numId;
		$this->apiParas["num_id"] = $numId;
	}

	public function getNumId()
	{
		return $this->numId;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.idle.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->excway,"excway");
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkNotNull($this->numId,"numId");
		RequestCheckUtil::checkNotNull($this->outId,"outId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
