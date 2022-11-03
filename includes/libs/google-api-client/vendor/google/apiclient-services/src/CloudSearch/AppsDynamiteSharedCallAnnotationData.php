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

namespace FluentMail\Google\Service\CloudSearch;

class AppsDynamiteSharedCallAnnotationData extends \Google\Model
{
  /**
   * @var string
   */
  public $callEndedTimestamp;
  protected $callMetadataType = AppsDynamiteSharedCallMetadata::class;
  protected $callMetadataDataType = '';
  /**
   * @var string
   */
  public $callStatus;

  /**
   * @param string
   */
  public function setCallEndedTimestamp($callEndedTimestamp)
  {
    $this->callEndedTimestamp = $callEndedTimestamp;
  }
  /**
   * @return string
   */
  public function getCallEndedTimestamp()
  {
    return $this->callEndedTimestamp;
  }
  /**
   * @param AppsDynamiteSharedCallMetadata
   */
  public function setCallMetadata(AppsDynamiteSharedCallMetadata $callMetadata)
  {
    $this->callMetadata = $callMetadata;
  }
  /**
   * @return AppsDynamiteSharedCallMetadata
   */
  public function getCallMetadata()
  {
    return $this->callMetadata;
  }
  /**
   * @param string
   */
  public function setCallStatus($callStatus)
  {
    $this->callStatus = $callStatus;
  }
  /**
   * @return string
   */
  public function getCallStatus()
  {
    return $this->callStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppsDynamiteSharedCallAnnotationData::class, 'Google_Service_CloudSearch_AppsDynamiteSharedCallAnnotationData');
