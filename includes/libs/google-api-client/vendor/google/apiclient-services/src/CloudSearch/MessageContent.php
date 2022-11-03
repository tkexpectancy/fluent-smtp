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

class MessageContent extends \Google\Collection
{
  protected $collection_key = 'segment';
  protected $attachmentType = Attachment::class;
  protected $attachmentDataType = 'array';
  protected $segmentType = Segment::class;
  protected $segmentDataType = 'array';

  /**
   * @param Attachment[]
   */
  public function setAttachment($attachment)
  {
    $this->attachment = $attachment;
  }
  /**
   * @return Attachment[]
   */
  public function getAttachment()
  {
    return $this->attachment;
  }
  /**
   * @param Segment[]
   */
  public function setSegment($segment)
  {
    $this->segment = $segment;
  }
  /**
   * @return Segment[]
   */
  public function getSegment()
  {
    return $this->segment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MessageContent::class, 'Google_Service_CloudSearch_MessageContent');
