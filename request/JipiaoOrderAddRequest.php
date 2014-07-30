<?php
/**
 * TOP API: taobao.jipiao.order.add request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoOrderAddRequest
{
	/** 
	 * 去程舱位等级 头等舱：0，商务舱：1，经济舱：2
	 **/
	private $arrCbClass;
	
	/** 
	 * 回程航班舱位id
	 **/
	private $arrCbId;
	
	/** 
	 * 回程舱位类型： 头等舱：0， 商务舱：1， 经济舱：2， 普通特价舱：6， 限售舱：7， 让利舱：8， 特殊：10
	 **/
	private $arrCbType;
	
	/** 
	 * 回程日期，格式为yyyy-MM-dd
	 **/
	private $arrDate;
	
	/** 
	 * 回程外部产品类型.
0：普通产品，
1:东航，
2:深航
	 **/
	private $arrExType;
	
	/** 
	 * 回程航班id
	 **/
	private $arrFltId;
	
	/** 
	 * 回程机票提供商id
	 **/
	private $arrSellerId;
	
	/** 
	 * 回程特价产品id，如果是特价产品才有值
	 **/
	private $arrSpId;
	
	/** 
	 * taobao昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 去程舱位等级
头等舱：0，商务舱：1，经济舱：2
	 **/
	private $depCbClass;
	
	/** 
	 * 去程航程舱位id
	 **/
	private $depCbId;
	
	/** 
	 * 去程舱位类型：
头等舱：0，
商务舱：1，
经济舱：2，
普通特价舱：6，
限售舱：7，
让利舱：8，
特殊：10
	 **/
	private $depCbType;
	
	/** 
	 * 去程日期 格式为yyyy-MM-dd
	 **/
	private $depDate;
	
	/** 
	 * 去程外部产品类型. 
0:普通产品，
1:东航， 
2:深航
	 **/
	private $depExType;
	
	/** 
	 * 去程航班id
	 **/
	private $depFltId;
	
	/** 
	 * 去程机票提供商id
	 **/
	private $depSellerId;
	
	/** 
	 * 去程特价产品id
	 **/
	private $depSpId;
	
	/** 
	 * 联系人列表，其中每一个联系人信息以分号分隔，包括：passengerId，passenger_name，passenger_ctype，（0：身份证，1：护照，2：学生证，3：军人证，4：回乡证，5：台胞证，6：港澳台胞，7：国际海员，8：外国人永久居留证，9：其他）passenger_cno，passenger_birthday（yyyy-MM-dd），

passengerId：如果有值，表示是选择的某个常用乘机人，如果没有值，表示新增的乘机人
	 **/
	private $passengers;
	
	/** 
	 * 联系人邮箱
	 **/
	private $relationEmail;
	
	/** 
	 * 联系人姓名
	 **/
	private $relationName;
	
	/** 
	 * 联系人电话,必须是手机号码
	 **/
	private $relationTel;
	
	/** 
	 * 联系人旺旺
	 **/
	private $relationWw;
	
	/** 
	 * 配送行程单地址 格式为：省,市,区,地址，如果没有值，表示不需要行程单
	 **/
	private $trafficAddr;
	
	/** 
	 * 配送行程单接收人电话
	 **/
	private $trafficPhone;
	
	/** 
	 * 邮编
	 **/
	private $trafficPost;
	
	/** 
	 * 配送行程单接收人
	 **/
	private $trafficReceiver;
	
	private $apiParas = array();
	
	public function setArrCbClass($arrCbClass)
	{
		$this->arrCbClass = $arrCbClass;
		$this->apiParas["arr_cb_class"] = $arrCbClass;
	}

	public function getArrCbClass()
	{
		return $this->arrCbClass;
	}

	public function setArrCbId($arrCbId)
	{
		$this->arrCbId = $arrCbId;
		$this->apiParas["arr_cb_id"] = $arrCbId;
	}

	public function getArrCbId()
	{
		return $this->arrCbId;
	}

	public function setArrCbType($arrCbType)
	{
		$this->arrCbType = $arrCbType;
		$this->apiParas["arr_cb_type"] = $arrCbType;
	}

	public function getArrCbType()
	{
		return $this->arrCbType;
	}

	public function setArrDate($arrDate)
	{
		$this->arrDate = $arrDate;
		$this->apiParas["arr_date"] = $arrDate;
	}

	public function getArrDate()
	{
		return $this->arrDate;
	}

	public function setArrExType($arrExType)
	{
		$this->arrExType = $arrExType;
		$this->apiParas["arr_ex_type"] = $arrExType;
	}

	public function getArrExType()
	{
		return $this->arrExType;
	}

	public function setArrFltId($arrFltId)
	{
		$this->arrFltId = $arrFltId;
		$this->apiParas["arr_flt_id"] = $arrFltId;
	}

	public function getArrFltId()
	{
		return $this->arrFltId;
	}

	public function setArrSellerId($arrSellerId)
	{
		$this->arrSellerId = $arrSellerId;
		$this->apiParas["arr_seller_id"] = $arrSellerId;
	}

	public function getArrSellerId()
	{
		return $this->arrSellerId;
	}

	public function setArrSpId($arrSpId)
	{
		$this->arrSpId = $arrSpId;
		$this->apiParas["arr_sp_id"] = $arrSpId;
	}

	public function getArrSpId()
	{
		return $this->arrSpId;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setDepCbClass($depCbClass)
	{
		$this->depCbClass = $depCbClass;
		$this->apiParas["dep_cb_class"] = $depCbClass;
	}

	public function getDepCbClass()
	{
		return $this->depCbClass;
	}

	public function setDepCbId($depCbId)
	{
		$this->depCbId = $depCbId;
		$this->apiParas["dep_cb_id"] = $depCbId;
	}

	public function getDepCbId()
	{
		return $this->depCbId;
	}

	public function setDepCbType($depCbType)
	{
		$this->depCbType = $depCbType;
		$this->apiParas["dep_cb_type"] = $depCbType;
	}

	public function getDepCbType()
	{
		return $this->depCbType;
	}

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setDepExType($depExType)
	{
		$this->depExType = $depExType;
		$this->apiParas["dep_ex_type"] = $depExType;
	}

	public function getDepExType()
	{
		return $this->depExType;
	}

	public function setDepFltId($depFltId)
	{
		$this->depFltId = $depFltId;
		$this->apiParas["dep_flt_id"] = $depFltId;
	}

	public function getDepFltId()
	{
		return $this->depFltId;
	}

	public function setDepSellerId($depSellerId)
	{
		$this->depSellerId = $depSellerId;
		$this->apiParas["dep_seller_id"] = $depSellerId;
	}

	public function getDepSellerId()
	{
		return $this->depSellerId;
	}

	public function setDepSpId($depSpId)
	{
		$this->depSpId = $depSpId;
		$this->apiParas["dep_sp_id"] = $depSpId;
	}

	public function getDepSpId()
	{
		return $this->depSpId;
	}

	public function setPassengers($passengers)
	{
		$this->passengers = $passengers;
		$this->apiParas["passengers"] = $passengers;
	}

	public function getPassengers()
	{
		return $this->passengers;
	}

	public function setRelationEmail($relationEmail)
	{
		$this->relationEmail = $relationEmail;
		$this->apiParas["relation_email"] = $relationEmail;
	}

	public function getRelationEmail()
	{
		return $this->relationEmail;
	}

	public function setRelationName($relationName)
	{
		$this->relationName = $relationName;
		$this->apiParas["relation_name"] = $relationName;
	}

	public function getRelationName()
	{
		return $this->relationName;
	}

	public function setRelationTel($relationTel)
	{
		$this->relationTel = $relationTel;
		$this->apiParas["relation_tel"] = $relationTel;
	}

	public function getRelationTel()
	{
		return $this->relationTel;
	}

	public function setRelationWw($relationWw)
	{
		$this->relationWw = $relationWw;
		$this->apiParas["relation_ww"] = $relationWw;
	}

	public function getRelationWw()
	{
		return $this->relationWw;
	}

	public function setTrafficAddr($trafficAddr)
	{
		$this->trafficAddr = $trafficAddr;
		$this->apiParas["traffic_addr"] = $trafficAddr;
	}

	public function getTrafficAddr()
	{
		return $this->trafficAddr;
	}

	public function setTrafficPhone($trafficPhone)
	{
		$this->trafficPhone = $trafficPhone;
		$this->apiParas["traffic_phone"] = $trafficPhone;
	}

	public function getTrafficPhone()
	{
		return $this->trafficPhone;
	}

	public function setTrafficPost($trafficPost)
	{
		$this->trafficPost = $trafficPost;
		$this->apiParas["traffic_post"] = $trafficPost;
	}

	public function getTrafficPost()
	{
		return $this->trafficPost;
	}

	public function setTrafficReceiver($trafficReceiver)
	{
		$this->trafficReceiver = $trafficReceiver;
		$this->apiParas["traffic_receiver"] = $trafficReceiver;
	}

	public function getTrafficReceiver()
	{
		return $this->trafficReceiver;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.order.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->depCbClass,"depCbClass");
		RequestCheckUtil::checkNotNull($this->depCbId,"depCbId");
		RequestCheckUtil::checkNotNull($this->depCbType,"depCbType");
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkNotNull($this->depExType,"depExType");
		RequestCheckUtil::checkNotNull($this->depFltId,"depFltId");
		RequestCheckUtil::checkNotNull($this->depSellerId,"depSellerId");
		RequestCheckUtil::checkNotNull($this->depSpId,"depSpId");
		RequestCheckUtil::checkNotNull($this->passengers,"passengers");
		RequestCheckUtil::checkNotNull($this->relationName,"relationName");
		RequestCheckUtil::checkNotNull($this->relationTel,"relationTel");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
