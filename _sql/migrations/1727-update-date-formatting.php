<?php

declare(strict_types=1);

/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

use Shopware\Components\Migrations\AbstractMigration;

class Migrations_Migration1727 extends AbstractMigration
{
    public function up($modus)
    {
        $sql = <<<'EOD'
UPDATE `s_core_config_mails`
SET content = REPLACE(content, '|date_format:"%d.%m.%Y"', '|date_format:"d.m.Y"'),
    contentHTML = REPLACE(contentHTML, '|date_format:"%d.%m.%Y"', '|date_format:"d.m.Y"')
WHERE dirty = 0;
EOD;
        $this->addSql($sql);
    }
}
