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

namespace FluentMail\Google\Service\ArtifactRegistry\Resource;

use FluentMail\Google\Service\ArtifactRegistry\ImportGooGetArtifactsRequest;
use FluentMail\Google\Service\ArtifactRegistry\Operation;

/**
 * The "gooGetArtifacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $artifactregistryService = new Google\Service\ArtifactRegistry(...);
 *   $gooGetArtifacts = $artifactregistryService->gooGetArtifacts;
 *  </code>
 */
class ProjectsLocationsRepositoriesGooGetArtifacts extends \Google\Service\Resource
{
  /**
   * Imports GooGet artifacts. The returned Operation will complete once the
   * resources are imported. Package, Version, and File resources are created
   * based on the imported artifacts. Imported artifacts that conflict with
   * existing resources are ignored. (gooGetArtifacts.import)
   *
   * @param string $parent The name of the parent resource where the artifacts
   * will be imported.
   * @param ImportGooGetArtifactsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function import($parent, ImportGooGetArtifactsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('import', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRepositoriesGooGetArtifacts::class, 'Google_Service_ArtifactRegistry_Resource_ProjectsLocationsRepositoriesGooGetArtifacts');
