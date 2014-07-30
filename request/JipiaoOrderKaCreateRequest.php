<?php
/**
 * TOP API: taobao.jipiao.order.ka.create request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoOrderKaCreateRequest
{
	/** 
	 * 外部编号,航空公司订单的唯一标识
	 **/
	private $bookCode;
	
	/** 
	 * 外部用户信息，包括：user_id（用户编号）;用户手机（user_phone）;
------示例------ {"user_id":"1023","user_phone":"13901234567"}
	 **/
	private $bookUser;
	
	/** 
	 * 去程到达机场三字码
	 **/
	private $depArrAirport;
	
	/** 
	 * 去程航班到达时间,格式:"yyyy-MM-dd HH24:MI"
	 **/
	private $depArrTime;
	
	/** 
	 * 去程航程舱位,如:Y
	 **/
	private $depCbNo;
	
	/** 
	 * 去程出发机场三字码
	 **/
	private $depDepAirport;
	
	/** 
	 * 去程航班起飞时间,格式:"yyyy-MM-dd HH24:MI"
	 **/
	private $depDepTime;
	
	/** 
	 * 去程外部产品类型,0:普通产品,1:东航,2:深航,3:南航,4:海航
	 **/
	private $depExType;
	
	/** 
	 * 去程航班号
	 **/
	private $depFltNo;
	
	/** 
	 * 机票提供商id
	 **/
	private $depSellerId;
	
	/** 
	 * 乘机人列表（按航段分），多条用半角逗号分隔，单条信息json格式，包括： passenger_name（乘机人姓名）; trip_type（航程类型，0:单程，1:往返）; trip_segment（航段，1:去程，2:回程）; ticket_no（票号）; pnr（订座记录）; passenger_type（乘机人类型，0:成人，1:儿童）; ticket_price（票价:分）; airport_fee（机场建设费:分）; oil_tax（燃油附加费:分）; passenger_ctype（证件类型，0：身份证，1：护照，2：学生证，3：军人证，4：回乡证，5：台胞证，6：港澳台胞，7：国际海员，8：外国人永久居留证，9：其他）; passenger_cno（证件号码）; passenger_birthday（乘机人生日:yyyy-MM-dd）; travel_insurance（航空意外险价格:2000分）; travel_insurer（航空意外险供应商:中国人民财产保险公司）;
------示例------
{"passenger_name":"张三";"trip_type":"0";"trip_segment":"1";"ticket_no":"880-0123456789";"pnr":"MG2H7N";"passenger_type":"0";"ticket_price":"88000";"airport_fee":"5000";"oil_tax":"13000";"passenger_ctype":"0";"passenger_cno":"110220198002021234";"passenger_birthday":"1980-02-02";"travel_insurance":"2000";"travel_insurer":"中国人保"},{...}
	 **/
	private $passengers;
	
	/** 
	 * 联系人电子邮箱
	 **/
	private $relationEmail;
	
	/** 
	 * 联系人姓名,如:张三
	 **/
	private $relationName;
	
	/** 
	 * 联系人电话,必须是手机号码,如:13901234567
	 **/
	private $relationTel;
	
	/** 
	 * 联系人旺旺名称
	 **/
	private $relationWw;
	
	/** 
	 * 回程到达机场三字码
	 **/
	private $retArrAirport;
	
	/** 
	 * 回程航班到达时间,格式:"yyyy-MM-dd HH24:MI"
	 **/
	private $retArrTime;
	
	/** 
	 * 回程航班舱位码
	 **/
	private $retCbNo;
	
	/** 
	 * 回程出发机场三字码
	 **/
	private $retDepAirport;
	
	/** 
	 * 回程航班起飞时间,格式:"yyyy-MM-dd HH24:MI"
	 **/
	private $retDepTime;
	
	/** 
	 * 回程航班号
	 **/
	private $retFltNo;
	
	/** 
	 * 淘宝用户交易校验码
	 **/
	private $tbUserKey;
	
	/** 
	 * 机票买家用户帐号
	 **/
	private $tbUserNick;
	
	private $apiParas = array();
	
	public function setBookCode($bookCode)
	{
		$this->bookCode = $bookCode;
		$this->apiParas["book_code"] = $bookCode;
	}

	public function getBookCode()
	{
		return $this->bookCode;
	}

	public function setBookUser($bookUser)
	{
		$this->bookUser = $bookUser;
		$this->apiParas["book_user"] = $bookUser;
	}

	public function getBookUser()
	{
		return $this->bookUser;
	}

	public function setDepArrAirport($depArrAirport)
	{
		$this->depArrAirport = $depArrAirport;
		$this->apiParas["dep_arr_airport"] = $depArrAirport;
	}

	public function getDepArrAirport()
	{
		return $this->depArrAirport;
	}

	public function setDepArrTime($depArrTime)
	{
		$this->depArrTime = $depArrTime;
		$this->apiParas["dep_arr_time"] = $depArrTime;
	}

	public function getDepArrTime()
	{
		return $this->depArrTime;
	}

	public function setDepCbNo($depCbNo)
	{
		$this->depCbNo = $depCbNo;
		$this->apiParas["dep_cb_no"] = $depCbNo;
	}

	public function getDepCbNo()
	{
		return $this->depCbNo;
	}

	public function setDepDepAirport($depDepAirport)
	{
		$this->depDepAirport = $depDepAirport;
		$this->apiParas["dep_dep_airport"] = $depDepAirport;
	}

	public function getDepDepAirport()
	{
		return $this->depDepAirport;
	}

	public function setDepDepTime($depDepTime)
	{
		$this->depDepTime = $depDepTime;
		$this->apiParas["dep_dep_time"] = $depDepTime;
	}

	public function getDepDepTime()
	{
		return $this->depDepTime;
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

	public function setDepFltNo($depFltNo)
	{
		$this->depFltNo = $depFltNo;
		$this->apiParas["dep_flt_no"] = $depFltNo;
	}

	public function getDepFltNo()
	{
		return $this->depFltNo;
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

	public function setRetArrAirport($retArrAirport)
	{
		$this->retArrAirport = $retArrAirport;
		$this->apiParas["ret_arr_airport"] = $retArrAirport;
	}

	public function getRetArrAirport()
	{
		return $this->retArrAirport;
	}

	public function setRetArrTime($retArrTime)
	{
		$this->retArrTime = $retArrTime;
		$this->apiParas["ret_arr_time"] = $retArrTime;
	}

	public function getRetArrTime()
	{
		return $this->retArrTime;
	}

	public function setRetCbNo($retCbNo)
	{
		$this->retCbNo = $retCbNo;
		$this->apiParas["ret_cb_no"] = $retCbNo;
	}

	public function getRetCbNo()
	{
		return $this->retCbNo;
	}

	public function setRetDepAirport($retDepAirport)
	{
		$this->retDepAirport = $retDepAirport;
		$this->apiParas["ret_dep_airport"] = $retDepAirport;
	}

	public function getRetDepAirport()
	{
		return $this->retDepAirport;
	}

	public function setRetDepTime($retDepTime)
	{
		$this->retDepTime = $retDepTime;
		$this->apiParas["ret_dep_time"] = $retDepTime;
	}

	public function getRetDepTime()
	{
		return $this->retDepTime;
	}

	public function setRetFltNo($retFltNo)
	{
		$this->retFltNo = $retFltNo;
		$this->apiParas["ret_flt_no"] = $retFltNo;
	}

	public function getRetFltNo()
	{
		return $this->retFltNo;
	}

	public function setTbUserKey($tbUserKey)
	{
		$this->tbUserKey = $tbUserKey;
		$this->apiParas["tb_user_key"] = $tbUserKey;
	}

	public function getTbUserKey()
	{
		return $this->tbUserKey;
	}

	public function setTbUserNick($tbUserNick)
	{
		$this->tbUserNick = $tbUserNick;
		$this->apiParas["tb_user_nick"] = $tbUserNick;
	}

	public function getTbUserNick()
	{
		return $this->tbUserNick;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.order.ka.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookCode,"bookCode");
		RequestCheckUtil::checkMaxLength($this->bookCode,40,"bookCode");
		RequestCheckUtil::checkMaxLength($this->bookUser,1000,"bookUser");
		RequestCheckUtil::checkNotNull($this->depArrAirport,"depArrAirport");
		RequestCheckUtil::checkMaxLength($this->depArrAirport,4,"depArrAirport");
		RequestCheckUtil::checkNotNull($this->depArrTime,"depArrTime");
		RequestCheckUtil::checkMaxLength($this->depArrTime,20,"depArrTime");
		RequestCheckUtil::checkNotNull($this->depCbNo,"depCbNo");
		RequestCheckUtil::checkMaxLength($this->depCbNo,2,"depCbNo");
		RequestCheckUtil::checkNotNull($this->depDepAirport,"depDepAirport");
		RequestCheckUtil::checkMaxLength($this->depDepAirport,4,"depDepAirport");
		RequestCheckUtil::checkNotNull($this->depDepTime,"depDepTime");
		RequestCheckUtil::checkMaxLength($this->depDepTime,20,"depDepTime");
		RequestCheckUtil::checkNotNull($this->depExType,"depExType");
		RequestCheckUtil::checkNotNull($this->depFltNo,"depFltNo");
		RequestCheckUtil::checkMaxLength($this->depFltNo,7,"depFltNo");
		RequestCheckUtil::checkNotNull($this->depSellerId,"depSellerId");
		RequestCheckUtil::checkNotNull($this->passengers,"passengers");
		RequestCheckUtil::checkMaxLength($this->passengers,12000,"passengers");
		RequestCheckUtil::checkMaxLength($this->relationEmail,100,"relationEmail");
		RequestCheckUtil::checkNotNull($this->relationName,"relationName");
		RequestCheckUtil::checkMaxLength($this->relationName,32,"relationName");
		RequestCheckUtil::checkNotNull($this->relationTel,"relationTel");
		RequestCheckUtil::checkMaxLength($this->relationTel,20,"relationTel");
		RequestCheckUtil::checkMaxLength($this->relationWw,40,"relationWw");
		RequestCheckUtil::checkMaxLength($this->retArrAirport,4,"retArrAirport");
		RequestCheckUtil::checkMaxLength($this->retArrTime,20,"retArrTime");
		RequestCheckUtil::checkMaxLength($this->retCbNo,2,"retCbNo");
		RequestCheckUtil::checkMaxLength($this->retDepAirport,4,"retDepAirport");
		RequestCheckUtil::checkMaxLength($this->retDepTime,20,"retDepTime");
		RequestCheckUtil::checkMaxLength($this->retFltNo,7,"retFltNo");
		RequestCheckUtil::checkNotNull($this->tbUserKey,"tbUserKey");
		RequestCheckUtil::checkMaxLength($this->tbUserKey,256,"tbUserKey");
		RequestCheckUtil::checkNotNull($this->tbUserNick,"tbUserNick");
		RequestCheckUtil::checkMaxLength($this->tbUserNick,40,"tbUserNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
