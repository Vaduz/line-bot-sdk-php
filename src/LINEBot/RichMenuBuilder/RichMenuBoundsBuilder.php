<?php

/**
 * Copyright 2017 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\RichMenuBuilder;

/**
 * A RichMenu bounds builder class
 *
 * @package LINE\LINEBot\RichMenu
 */
class RichMenuBoundsBuilder
{
    /** @var int */
    private $x;
    /** @var int */
    private $y;
    /** @var int */
    private $width;
    /** @var int */
    private $height;

    /**
     * RichMenuBoundsBuilder constructor.
     *
     * @param int $x Horizontal position relative to the top-left corner of the area.
     * @param int $y Vertical position relative to the top-left corner of the area.
     * @param int $width Width of the area.
     * @param int $height Height of the area.
     */
    public function __construct($x, $y, $width, $height)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Builds RichMenu bounds object.
     *
     * @return array Built bounds object.
     */
    public function build()
    {
        return [
            'x' => $this->x,
            'y' => $this->y,
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}
