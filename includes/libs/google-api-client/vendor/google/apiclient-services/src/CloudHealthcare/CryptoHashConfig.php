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

namespace FluentMail\Google\Service\CloudHealthcare;

class CryptoHashConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $cryptoKey;
  protected $kmsWrappedType = KmsWrappedCryptoKey::class;
  protected $kmsWrappedDataType = '';

  /**
   * @param string
   */
  public function setCryptoKey($cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /**
   * @return string
   */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /**
   * @param KmsWrappedCryptoKey
   */
  public function setKmsWrapped(KmsWrappedCryptoKey $kmsWrapped)
  {
    $this->kmsWrapped = $kmsWrapped;
  }
  /**
   * @return KmsWrappedCryptoKey
   */
  public function getKmsWrapped()
  {
    return $this->kmsWrapped;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CryptoHashConfig::class, 'Google_Service_CloudHealthcare_CryptoHashConfig');
