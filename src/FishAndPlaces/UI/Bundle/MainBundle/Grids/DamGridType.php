<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Grids;

use Doctrine\DBAL\Types\DateTimeType;
use Prezent\Grid\BaseGridType;
use Prezent\Grid\Extension\Core\Type\StringType;
use Prezent\Grid\GridBuilder;

class DamGridType extends BaseGridType
{
    public function buildGrid(GridBuilder $builder, array $options = [])
    {
        $builder
            ->addColumn('id', StringType::class, [
                'label' => 'ID',
                'url'   => '/view/{id}',
            ])
            ->addColumn('name', StringType::class)
            ->addColumn('created', DateTimeType::class, ['pattern' => 'yyyy qqq'])
            ->addAction('edit', ['url' => '/edit/{id}'])
        ;
    }
}
