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

namespace FluentMail\Google\Service\Integrations;

class EnterpriseCrmFrontendsEventbusProtoParameterMapField extends \Google\Model
{
  protected $literalValueType = EnterpriseCrmFrontendsEventbusProtoParameterValueType::class;
  protected $literalValueDataType = '';
  /**
   * @var string
   */
  public $referenceKey;

  /**
   * @param EnterpriseCrmFrontendsEventbusProtoParameterValueType
   */
  public function setLiteralValue(EnterpriseCrmFrontendsEventbusProtoParameterValueType $literalValue)
  {
    $this->literalValue = $literalValue;
  }
  /**
   * @return EnterpriseCrmFrontendsEventbusProtoParameterValueType
   */
  public function getLiteralValue()
  {
    return $this->literalValue;
  }
  /**
   * @param string
   */
  public function setReferenceKey($referenceKey)
  {
    $this->referenceKey = $referenceKey;
  }
  /**
   * @return string
   */
  public function getReferenceKey()
  {
    return $this->referenceKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterMapField::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterMapField');
