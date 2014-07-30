<?php
/**
 * TOP API: taobao.train.agent.rule.update request
 * 
 * @author auto create
 * @since 1.0, 2013-09-26 00:00:00
 */
class TrainAgentRuleUpdateRequest
{
	/** 
	 * 代理商id
	 **/
	private $agentId;
	
	/** 
	 * 规则示例：
售卖时间规则示例：{"start":7,"end":23,"beforeTrainDep":4}，无票阈值规则示例：{"threshold": 5}，黑名单规则示例：{"trainType": [8,12],"trainNumber": ["1043","G101","D71"]}，保险规则示例：[{"startPrice":0,"endPrice":10000,"insurancePrice":1000},{"startPrice":10000,"endPrice":20000,"insurancePrice":2000},{"startPrice":20000,"endPrice":10000000,"insurancePrice":3000}]，退票受理规则示例：{"start": 8,"end": 17,"beforeTrainDep": 3}

规则内容字段说明：
售卖时间规则字段：{"start":上班时间（整型）,"end":下班时间（整型）,"beforeTrainDep":可以买几小时后的车票（整型）}；
无票阈值规则字段：{"threshold": 无票阈值（整型）}；
黑名单规则字段：{"trainType": 车型id列表（list）,"trainNumber": 车次名列表(list)}；
保险规则字段：[{"startPrice":票价下限,"endPrice":票价上线,"insurancePrice":在上下限范围内的保险价格},{"startPrice":票价下限,"endPrice":票价上限,"insurancePrice":保险价格},{"startPrice":票价下限,"endPrice":票价无穷大用10000000表示,"insurancePrice":保险价格}]；
退票受理规则示例：{"start": 上班时间（整型）,"end": 下班时间（整型）,"beforeTrainDep": 表示提前开车几小时才能退票}
	 **/
	private $ruleInfo;
	
	/** 
	 * 规则名称，目前有5个规则，分别是：售卖时间规则、无票阈值规则、黑名单规则、退票受理规则、保险规则。
	 **/
	private $ruleName;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setRuleInfo($ruleInfo)
	{
		$this->ruleInfo = $ruleInfo;
		$this->apiParas["rule_info"] = $ruleInfo;
	}

	public function getRuleInfo()
	{
		return $this->ruleInfo;
	}

	public function setRuleName($ruleName)
	{
		$this->ruleName = $ruleName;
		$this->apiParas["rule_name"] = $ruleName;
	}

	public function getRuleName()
	{
		return $this->ruleName;
	}

	public function getApiMethodName()
	{
		return "taobao.train.agent.rule.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->ruleInfo,"ruleInfo");
		RequestCheckUtil::checkNotNull($this->ruleName,"ruleName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
