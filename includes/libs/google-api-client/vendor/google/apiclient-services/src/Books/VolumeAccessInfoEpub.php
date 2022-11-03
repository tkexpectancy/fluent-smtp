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

namespace FluentMail\Google\Service\Books;

class VolumeAccessInfoEpub extends \Google\Model
{
  /**
   * @var string
   */
  public $acsTokenLink;
  /**
   * @var string
   */
  public $downloadLink;
  /**
   * @var bool
   */
  public $isAvailable;

  /**
   * @param string
   */
  public function setAcsTokenLink($acsTokenLink)
  {
    $this->acsTokenLink = $acsTokenLink;
  }
  /**
   * @return string
   */
  public function getAcsTokenLink()
  {
    return $this->acsTokenLink;
  }
  /**
   * @param string
   */
  public function setDownloadLink($downloadLink)
  {
    $this->downloadLink = $downloadLink;
  }
  /**
   * @return string
   */
  public function getDownloadLink()
  {
    return $this->downloadLink;
  }
  /**
   * @param bool
   */
  public function setIsAvailable($isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }
  /**
   * @return bool
   */
  public function getIsAvailable()
  {
    return $this->isAvailable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VolumeAccessInfoEpub::class, 'Google_Service_Books_VolumeAccessInfoEpub');
