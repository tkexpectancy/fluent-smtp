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

namespace FluentMail\Google\Service\Fitness;

class Dataset extends \Google\Collection
{
  protected $collection_key = 'point';
  /**
   * @var string
   */
  public $dataSourceId;
  /**
   * @var string
   */
  public $maxEndTimeNs;
  /**
   * @var string
   */
  public $minStartTimeNs;
  /**
   * @var string
   */
  public $nextPageToken;
  protected $pointType = DataPoint::class;
  protected $pointDataType = 'array';

  /**
   * @param string
   */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /**
   * @return string
   */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /**
   * @param string
   */
  public function setMaxEndTimeNs($maxEndTimeNs)
  {
    $this->maxEndTimeNs = $maxEndTimeNs;
  }
  /**
   * @return string
   */
  public function getMaxEndTimeNs()
  {
    return $this->maxEndTimeNs;
  }
  /**
   * @param string
   */
  public function setMinStartTimeNs($minStartTimeNs)
  {
    $this->minStartTimeNs = $minStartTimeNs;
  }
  /**
   * @return string
   */
  public function getMinStartTimeNs()
  {
    return $this->minStartTimeNs;
  }
  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * @param DataPoint[]
   */
  public function setPoint($point)
  {
    $this->point = $point;
  }
  /**
   * @return DataPoint[]
   */
  public function getPoint()
  {
    return $this->point;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Dataset::class, 'Google_Service_Fitness_Dataset');
