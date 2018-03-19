<?php

declare(strict_types=1);

namespace Acme\PHPDishExamplePlugin;

use PHPDish\Bundle\CoreBundle\Plugin\PHPDishPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class AcmePHPDishExamplePlugin extends Bundle
{
    use PHPDishPluginTrait;
}
