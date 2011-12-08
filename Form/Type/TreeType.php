<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Sonata\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Form\DataTransformer\ModelToIdTransformer;
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceList;

class TreeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->prependClientTransformer(new ModelToIdTransformer($options['model_manager'], $options['class']));
    }

    public function getDefaultOptions(array $options)
    {
        $defaultOptions = array(
            'template'          => 'choice',
            'multiple'          => false,
            'expanded'          => false,
            'model_manager'     => null,
            'class'             => null,
            'property'          => null,
            'query'             => null,
            'choices'           => null,
            'parent'            => 'choice',
            'preferred_choices' => array(),
        );

        $options = array_replace($defaultOptions, $options);

        if (!isset($options['choice_list'])) {
            $defaultOptions['choice_list'] = new ModelChoiceList(
                $options['model_manager'],
                $options['class'],
                $options['property'],
                $options['query'],
                $options['choices']
            );
        }

        return $defaultOptions;
    }

    public function getParent(array $options)
    {
        return $options['parent'];
    }

    public function getName()
    {
        return 'sonata_type_tree';
    }
}
