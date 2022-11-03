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

namespace FluentMail\Google\Service\DLP;

class GooglePrivacyDlpV2OutputStorageConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $outputSchema;
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';

  /**
   * @param string
   */
  public function setOutputSchema($outputSchema)
  {
    $this->outputSchema = $outputSchema;
  }
  /**
   * @return string
   */
  public function getOutputSchema()
  {
    return $this->outputSchema;
  }
  /**
   * @param GooglePrivacyDlpV2BigQueryTable
   */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /**
   * @return GooglePrivacyDlpV2BigQueryTable
   */
  public function getTable()
  {
    return $this->table;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2OutputStorageConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2OutputStorageConfig');
