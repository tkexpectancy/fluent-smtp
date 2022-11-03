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

namespace FluentMail\Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1PersonDetectionConfig extends \Google\Model
{
  /**
   * @var bool
   */
  public $includeAttributes;
  /**
   * @var bool
   */
  public $includeBoundingBoxes;
  /**
   * @var bool
   */
  public $includePoseLandmarks;

  /**
   * @param bool
   */
  public function setIncludeAttributes($includeAttributes)
  {
    $this->includeAttributes = $includeAttributes;
  }
  /**
   * @return bool
   */
  public function getIncludeAttributes()
  {
    return $this->includeAttributes;
  }
  /**
   * @param bool
   */
  public function setIncludeBoundingBoxes($includeBoundingBoxes)
  {
    $this->includeBoundingBoxes = $includeBoundingBoxes;
  }
  /**
   * @return bool
   */
  public function getIncludeBoundingBoxes()
  {
    return $this->includeBoundingBoxes;
  }
  /**
   * @param bool
   */
  public function setIncludePoseLandmarks($includePoseLandmarks)
  {
    $this->includePoseLandmarks = $includePoseLandmarks;
  }
  /**
   * @return bool
   */
  public function getIncludePoseLandmarks()
  {
    return $this->includePoseLandmarks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVideointelligenceV1PersonDetectionConfig::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1PersonDetectionConfig');
