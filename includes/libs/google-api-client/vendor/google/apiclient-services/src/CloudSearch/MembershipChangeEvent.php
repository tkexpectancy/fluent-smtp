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

class MembershipChangeEvent extends \Google\Collection
{
  protected $collection_key = 'participantId';
  /**
   * @var string
   */
  public $leaveReason;
  protected $participantIdType = StoredParticipantId::class;
  protected $participantIdDataType = 'array';
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setLeaveReason($leaveReason)
  {
    $this->leaveReason = $leaveReason;
  }
  /**
   * @return string
   */
  public function getLeaveReason()
  {
    return $this->leaveReason;
  }
  /**
   * @param StoredParticipantId[]
   */
  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
  /**
   * @return StoredParticipantId[]
   */
  public function getParticipantId()
  {
    return $this->participantId;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MembershipChangeEvent::class, 'Google_Service_CloudSearch_MembershipChangeEvent');
