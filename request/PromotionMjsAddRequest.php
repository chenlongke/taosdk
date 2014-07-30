<?php
/**
 * TOP API: taobao.promotion.mjs.add request
 * 
 * @author auto create
 * @since 1.0, 2011-06-20 00:00:00
 */
class PromotionMjsAddRequest
{
	/** 
	 * 满就送活动结束时间。系统会将年月日保留,时分秒置成23:59:59。开始和结束时间可在同一天或相差大于一天。
	 **/
	private $endTime;
	
	/** 
	 * 满就送备注。长度限制100。
	 **/
	private $memo;
	
	/** 
	 * 满就送优惠列表。full_money:优惠条件(正整数必填[1,20000],多级时这个字段值必须由小到大排序,不能相等);(1)reduce_money:减掉的钱数(正整数,必须小于对应的full_money)。(2)gift_name:礼品名称(最长15个汉字);gift_url:礼品的链接(与gift_name一组，当gift_name不空时，可选)。(3)free_post:是否免邮(true时免邮。false时不免邮,且area_ids和reduce_after忽略)。area_ids:不免邮区域码(当free_post为true时,为可选。';'分割,最多10个,见PromotionMjs对应字段可取值);reduce_after:减后满/减前满(当free_post为true时,reduce_after为可选。true时为减(full_money-reduce_money)后满才免邮(reduce_money不为0)。false时,满后才免邮)coupon_value:优惠卷面额(默认减后满full_money才送卷)[3,5,10,20,50,100]选一;coupon_time:优惠卷的有效期(格式:yyyy-MM-dd HH:mm:ss)。(5)points:积分(只有B卖家允许设置,为大于0且小于(full_money*100)/2的整数)。单级满就送[1,2,3,4,5]这5个组合最少选择一个组合,多级满就送这5个中[2,5]个进行组合。5是B卖家允许使用。具体字段说明见数据结构PromotionMjs字段说明。
	 **/
	private $mjsList;
	
	/** 
	 * 满就送活动名称。最长50汉字。
	 **/
	private $mjsName;
	
	/** 
	 * 上不封顶。这个字段只有在优惠方式为普通时，才有效。否则忽略。当为true时，上不封顶被选择。封顶：'100元减10元，200元也减10元，300也减10';不封顶:'100元减10元，200减20，300减30。
	 **/
	private $noCap;
	
	/** 
	 * 满就送活动开始时间。大于当前系统时间，小于活动结束时间。系统会将年月日保留,时分秒置0。
	 **/
	private $startTime;
	
	/** 
	 * 满就送优惠方式分为普通和多级两种。'GENERAL'为普通优惠;'MULTILEVEL'为多级优惠。普通优惠时，优惠只有一条记录。多级优惠时，优惠是[2,5]个记录的列表(mjs_list)。扶植版只可以是普通优惠。
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setMjsList($mjsList)
	{
		$this->mjsList = $mjsList;
		$this->apiParas["mjs_list"] = $mjsList;
	}

	public function getMjsList()
	{
		return $this->mjsList;
	}

	public function setMjsName($mjsName)
	{
		$this->mjsName = $mjsName;
		$this->apiParas["mjs_name"] = $mjsName;
	}

	public function getMjsName()
	{
		return $this->mjsName;
	}

	public function setNoCap($noCap)
	{
		$this->noCap = $noCap;
		$this->apiParas["no_cap"] = $noCap;
	}

	public function getNoCap()
	{
		return $this->noCap;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "taobao.promotion.mjs.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->mjsList,"mjsList");
		RequestCheckUtil::checkNotNull($this->mjsName,"mjsName");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
