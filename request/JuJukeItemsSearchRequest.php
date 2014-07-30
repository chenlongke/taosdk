<?php
/**
 * TOP API: taobao.ju.juke.items.search request
 * 
 * @author auto create
 * @since 1.0, 2012-10-18 00:00:00
 */
class JuJukeItemsSearchRequest
{
	/** 
	 * 聚划算二级类目id：  
        FZ_NZ(服装_男装)，
	FZ_NX(服装_男鞋)，
	FZ_NVZ(服装_女装)，
	FZ_NVX(服装_女鞋)，
	FZ_YDX(服装_运动鞋)，
	FZ_NY(服装_内衣)，
	DQ_XJ(电器_小家电)，
	DQ_DJ(电器_大家电)，
	DQ_PJ(电器_配件)，
	DQ_HL(电器_护理)，
	DQ_BG(电器_办公设备)，
	PS_XB(配饰_箱包)，
	PS_ZB(配饰_珠宝)，
	PS_SB(配饰_手表)，
	PS_PS(配饰_配饰)，
	PS_SP(配饰_饰品)，
	MR_HF(美容_护肤)，
	MR_CZ(美容_彩妆)，
	MR_QT(美容_其他)，
	SM_SJ(数码_手机)，
	SM_DN(数码_电脑)，
	SM_YY(数码_影音数码)，
	SM_PJ(数码_数码配件)，
	SM_BJB(数码_笔记本)，
	SM_XJ(数码_相机)，
	JJ_JC(家居_建材)，
	JJ_JJ(家居_家具)，
	JJ_JF(家居_家纺)，
	JJ_JS(家居_家饰)，
	JJ_BH(家居_百货)，
	JJ_CJ(家居_厨具)，
	MY_YF(母婴_孕妇)，
	MY_YP(母婴_用品)，
	MY_DZ(母婴_童装)，
	MY_YY(母婴_营养)，
	SP_BJ(食品_保健)，
	SP_LS(食品_零食)，
	SP_SX(食品_生鲜)，
	WT_YD(文体_运动)，
	WT_SJ(文体_书籍)，
	WT_WJ(文体_玩具)，
	WT_HW(文体_户外)，
	WT_QC(文体_汽车)，
	FW_WL(服务_网络)，
	FW_CW(服务_吃喝玩乐)，
	FW_FW(服务_服务)，
	FW_ZF(服务_租房)，
	QT_QT(其它_其它类目)
	 **/
	private $childCategoryid;
	
	/** 
	 * 页码,从0开始
	 **/
	private $pageNo;
	
	/** 
	 * 页面记录数
	 **/
	private $pageSize;
	
	/** 
	 * 聚划算一级类目id:  
	FW(服务)，
	DQ(电器)，
	JJ(家居)，	
	QT(其它)，
	SP(食品)
	PS(配饰)，
	FZ(服装)，	
	MY(母婴)，	
	MR(美容)，		
	SM(数码)，
	WT(文体)
	 **/
	private $parentCategoryid;
	
	/** 
	 * 推广商在淘客联盟的memberid
	 **/
	private $pid;
	
	private $apiParas = array();
	
	public function setChildCategoryid($childCategoryid)
	{
		$this->childCategoryid = $childCategoryid;
		$this->apiParas["child_categoryid"] = $childCategoryid;
	}

	public function getChildCategoryid()
	{
		return $this->childCategoryid;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setParentCategoryid($parentCategoryid)
	{
		$this->parentCategoryid = $parentCategoryid;
		$this->apiParas["parent_categoryid"] = $parentCategoryid;
	}

	public function getParentCategoryid()
	{
		return $this->parentCategoryid;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.juke.items.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,0,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->parentCategoryid,"parentCategoryid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
