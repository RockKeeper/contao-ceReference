<?php
    /**
     *
     *          _           _                       _
     *         | |         | |                     | |
     *      ___| | __ _ ___| |____      _____  _ __| | _____
     *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
     *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
     *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
     *                                        web development
     *
     *     http://www.slash-works.de </> hallo@slash-works.de
     *
     *
     * @author      rwollenburg
     * @since       10.09.14 11:49
     * @package     slashworks
     *
     */

    /**
     * Register the classes
     */
    ClassLoader::addClasses(array(
                                'slashworks\ContentReference' => 'system/modules/ceReference/elements/ContentReference.php',
                            )
    );

    /**
     * Register the templates
     */
    TemplateLoader::addFiles(array(
                                 'ce_reference' => 'system/modules/ceReference/templates/elements',
                             )
    );