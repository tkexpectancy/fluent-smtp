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

namespace FluentMail\Google\Service\ContainerAnalysis;

class FileOccurrence extends \Google\Collection
{
  protected $collection_key = 'filesLicenseInfo';
  public $attributions;
  public $comment;
  public $contributors;
  public $copyright;
  public $filesLicenseInfo;
  public $id;
  public $licenseComments;
  public $licenseConcluded;
  public $notice;

  public function setAttributions($attributions)
  {
    $this->attributions = $attributions;
  }
  public function getAttributions()
  {
    return $this->attributions;
  }
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setContributors($contributors)
  {
    $this->contributors = $contributors;
  }
  public function getContributors()
  {
    return $this->contributors;
  }
  public function setCopyright($copyright)
  {
    $this->copyright = $copyright;
  }
  public function getCopyright()
  {
    return $this->copyright;
  }
  public function setFilesLicenseInfo($filesLicenseInfo)
  {
    $this->filesLicenseInfo = $filesLicenseInfo;
  }
  public function getFilesLicenseInfo()
  {
    return $this->filesLicenseInfo;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLicenseComments($licenseComments)
  {
    $this->licenseComments = $licenseComments;
  }
  public function getLicenseComments()
  {
    return $this->licenseComments;
  }
  public function setLicenseConcluded($licenseConcluded)
  {
    $this->licenseConcluded = $licenseConcluded;
  }
  public function getLicenseConcluded()
  {
    return $this->licenseConcluded;
  }
  public function setNotice($notice)
  {
    $this->notice = $notice;
  }
  public function getNotice()
  {
    return $this->notice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FileOccurrence::class, 'Google_Service_ContainerAnalysis_FileOccurrence');
