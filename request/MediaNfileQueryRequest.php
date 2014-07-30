<?php
/**
 * TOP API: taobao.media.nfile.query request
 * 
 * @author auto create
 * @since 1.0, 2014-01-23 00:00:00
 */
class MediaNfileQueryRequest
{
	/** 
	 * 多媒体应用接入biz_code
	 **/
	private $bizCode;
	
	/** 
	 * json格式传递查询条件，支持：
1,fileId存在的情况下，直接根据fileId来查询,忽略其他条件
2,url存在的情况下，直接根据url解析后所得到的fileId进行查询，其它条件
3,fileIds（long[]类型）存在的情况下，直接根据fileIds来查询，忽略以下查询条件（分页条件除外）的情况.
4,支持urls（数组[]类型）存在的情况下，直接根据urls解析后所得到的fileIds进行查询，忽略（5）的情况.
5:orderBy条件，用于对查询结果进行排序.
6:分页条件（currentPage与pageSize配合使用.
	 **/
	private $jsonParam;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setJsonParam($jsonParam)
	{
		$this->jsonParam = $jsonParam;
		$this->apiParas["json_param"] = $jsonParam;
	}

	public function getJsonParam()
	{
		return $this->jsonParam;
	}

	public function getApiMethodName()
	{
		return "taobao.media.nfile.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->jsonParam,"jsonParam");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
