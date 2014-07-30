<?php
/**
 * TOP API: taobao.mysize.template.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-18 00:00:00
 */
class MysizeTemplateGetRequest
{
	/** 
	 * 需返回的字段列表。模板id ty_id和模板名称tp_name为默认返回值。其他可选值：tp_type、tp_data、created、modified;全部以英文逗号分割。依次代表的字段是模板类型、模板规则数据、模板创建时间、模板修改时间
	 **/
	private $fields;
	
	/** 
	 * 模板ID
	 **/
	private $tpId;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setTpId($tpId)
	{
		$this->tpId = $tpId;
		$this->apiParas["tp_id"] = $tpId;
	}

	public function getTpId()
	{
		return $this->tpId;
	}

	public function getApiMethodName()
	{
		return "taobao.mysize.template.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->tpId,"tpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
