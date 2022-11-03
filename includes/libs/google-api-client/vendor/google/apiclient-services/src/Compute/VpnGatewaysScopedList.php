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

namespace FluentMail\Google\Service\Compute;

class VpnGatewaysScopedList extends \Google\Collection
{
  protected $collection_key = 'vpnGateways';
  protected $vpnGatewaysType = VpnGateway::class;
  protected $vpnGatewaysDataType = 'array';
  protected $warningType = VpnGatewaysScopedListWarning::class;
  protected $warningDataType = '';

  /**
   * @param VpnGateway[]
   */
  public function setVpnGateways($vpnGateways)
  {
    $this->vpnGateways = $vpnGateways;
  }
  /**
   * @return VpnGateway[]
   */
  public function getVpnGateways()
  {
    return $this->vpnGateways;
  }
  /**
   * @param VpnGatewaysScopedListWarning
   */
  public function setWarning(VpnGatewaysScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return VpnGatewaysScopedListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpnGatewaysScopedList::class, 'Google_Service_Compute_VpnGatewaysScopedList');
