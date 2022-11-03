<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace FluentMail\Google\Service\ChromePolicy;

class GoogleChromePolicyV1ModifyOrgUnitPolicyRequest extends \Google\Model
{
  protected $policyTargetKeyType = GoogleChromePolicyV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  protected $policyValueType = GoogleChromePolicyV1PolicyValue::class;
  protected $policyValueDataType = '';
  /**
   * @var string
   */
  public $updateMask;

  /**
   * @param GoogleChromePolicyV1PolicyTargetKey
   */
  public function setPolicyTargetKey(GoogleChromePolicyV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /**
   * @return GoogleChromePolicyV1PolicyTargetKey
   */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
  /**
   * @param GoogleChromePolicyV1PolicyValue
   */
  public function setPolicyValue(GoogleChromePolicyV1PolicyValue $policyValue)
  {
    $this->policyValue = $policyValue;
  }
  /**
   * @return GoogleChromePolicyV1PolicyValue
   */
  public function getPolicyValue()
  {
    return $this->policyValue;
  }
  /**
   * @param string
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromePolicyV1ModifyOrgUnitPolicyRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyV1ModifyOrgUnitPolicyRequest');
