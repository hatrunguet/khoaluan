<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/9caa9fd')) {
            // _assetic_9caa9fd
            if ($pathinfo === '/css/9caa9fd.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9caa9fd',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9caa9fd',);
            }

            if (0 === strpos($pathinfo, '/css/9caa9fd_')) {
                // _assetic_9caa9fd_0
                if ($pathinfo === '/css/9caa9fd_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9caa9fd',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9caa9fd_0',);
                }

                // _assetic_9caa9fd_1
                if ($pathinfo === '/css/9caa9fd_styles.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9caa9fd',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_9caa9fd_1',);
                }

                // _assetic_9caa9fd_2
                if ($pathinfo === '/css/9caa9fd_londinium-theme.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9caa9fd',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_9caa9fd_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/3f41bee')) {
                // _assetic_3f41bee
                if ($pathinfo === '/js/3f41bee.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f41bee',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3f41bee',);
                }

                if (0 === strpos($pathinfo, '/js/3f41bee_part_1_')) {
                    if (0 === strpos($pathinfo, '/js/3f41bee_part_1_application_')) {
                        // _assetic_3f41bee_0
                        if ($pathinfo === '/js/3f41bee_part_1_application_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3f41bee',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3f41bee_0',);
                        }

                        // _assetic_3f41bee_1
                        if ($pathinfo === '/js/3f41bee_part_1_application_blank_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '3f41bee',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3f41bee_1',);
                        }

                    }

                    // _assetic_3f41bee_2
                    if ($pathinfo === '/js/3f41bee_part_1_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f41bee',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3f41bee_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/de641a8')) {
                // _assetic_de641a8
                if ($pathinfo === '/js/de641a8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_de641a8',);
                }

                if (0 === strpos($pathinfo, '/js/de641a8_part_1_')) {
                    // _assetic_de641a8_0
                    if ($pathinfo === '/js/de641a8_part_1_autosize_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_de641a8_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/de641a8_part_1_input')) {
                        // _assetic_de641a8_1
                        if ($pathinfo === '/js/de641a8_part_1_inputlimit.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_de641a8_1',);
                        }

                        // _assetic_de641a8_2
                        if ($pathinfo === '/js/de641a8_part_1_inputmask_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_de641a8_2',);
                        }

                    }

                    // _assetic_de641a8_3
                    if ($pathinfo === '/js/de641a8_part_1_listbox_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_de641a8_3',);
                    }

                    // _assetic_de641a8_4
                    if ($pathinfo === '/js/de641a8_part_1_multiselect_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_de641a8_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/de641a8_part_1_s')) {
                        // _assetic_de641a8_5
                        if ($pathinfo === '/js/de641a8_part_1_select2.min_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_de641a8_5',);
                        }

                        // _assetic_de641a8_6
                        if ($pathinfo === '/js/de641a8_part_1_switch.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_de641a8_6',);
                        }

                    }

                    // _assetic_de641a8_7
                    if ($pathinfo === '/js/de641a8_part_1_tags.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_de641a8_7',);
                    }

                    // _assetic_de641a8_8
                    if ($pathinfo === '/js/de641a8_part_1_uniform.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_de641a8_8',);
                    }

                    // _assetic_de641a8_9
                    if ($pathinfo === '/js/de641a8_part_1_validate.min_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de641a8',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_de641a8_9',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/1ab215a')) {
                // _assetic_1ab215a
                if ($pathinfo === '/js/1ab215a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1ab215a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1ab215a',);
                }

                // _assetic_1ab215a_0
                if ($pathinfo === '/js/1ab215a_datatables.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1ab215a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1ab215a_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/05545f9')) {
                // _assetic_05545f9
                if ($pathinfo === '/js/05545f9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '05545f9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_05545f9',);
                }

                if (0 === strpos($pathinfo, '/js/05545f9_')) {
                    if (0 === strpos($pathinfo, '/js/05545f9_part_1_')) {
                        if (0 === strpos($pathinfo, '/js/05545f9_part_1_application_')) {
                            // _assetic_05545f9_0
                            if ($pathinfo === '/js/05545f9_part_1_application_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '05545f9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_05545f9_0',);
                            }

                            // _assetic_05545f9_1
                            if ($pathinfo === '/js/05545f9_part_1_application_blank_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '05545f9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_05545f9_1',);
                            }

                        }

                        // _assetic_05545f9_2
                        if ($pathinfo === '/js/05545f9_part_1_bootstrap.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '05545f9',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_05545f9_2',);
                        }

                    }

                    // _assetic_05545f9_3
                    if ($pathinfo === '/js/05545f9_datatables.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '05545f9',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_05545f9_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/5ed6ffa')) {
            // _assetic_5ed6ffa
            if ($pathinfo === '/css/5ed6ffa.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5ed6ffa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5ed6ffa',);
            }

            if (0 === strpos($pathinfo, '/css/5ed6ffa_')) {
                // _assetic_5ed6ffa_0
                if ($pathinfo === '/css/5ed6ffa_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5ed6ffa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5ed6ffa_0',);
                }

                // _assetic_5ed6ffa_1
                if ($pathinfo === '/css/5ed6ffa_bootstrap.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5ed6ffa',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_5ed6ffa_1',);
                }

                // _assetic_5ed6ffa_2
                if ($pathinfo === '/css/5ed6ffa_color_1_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5ed6ffa',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_5ed6ffa_2',);
                }

                // _assetic_5ed6ffa_3
                if ($pathinfo === '/css/5ed6ffa_DT_bootstrap_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5ed6ffa',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_5ed6ffa_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a6810d0')) {
            // _assetic_a6810d0
            if ($pathinfo === '/js/a6810d0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a6810d0',);
            }

            if (0 === strpos($pathinfo, '/js/a6810d0_')) {
                // _assetic_a6810d0_0
                if ($pathinfo === '/js/a6810d0_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a6810d0_0',);
                }

                // _assetic_a6810d0_1
                if ($pathinfo === '/js/a6810d0_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a6810d0_1',);
                }

                // _assetic_a6810d0_2
                if ($pathinfo === '/js/a6810d0_ebro_datatables_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a6810d0_2',);
                }

                // _assetic_a6810d0_3
                if ($pathinfo === '/js/a6810d0_jquery.dataTables.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a6810d0_3',);
                }

                // _assetic_a6810d0_4
                if ($pathinfo === '/js/a6810d0_DT_bootstrap_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a6810d0_4',);
                }

                // _assetic_a6810d0_5
                if ($pathinfo === '/js/a6810d0_JMenu.jquery_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a6810d0_5',);
                }

                // _assetic_a6810d0_6
                if ($pathinfo === '/js/a6810d0_jquery.ba-resize.min_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a6810d0',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_a6810d0_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/f37455d')) {
            // _assetic_f37455d
            if ($pathinfo === '/css/f37455d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f37455d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f37455d',);
            }

            // _assetic_f37455d_0
            if ($pathinfo === '/css/f37455d_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f37455d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f37455d_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // acme_permission_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_permission_homepage')), array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/function')) {
            // admin
            if ($pathinfo === '/function') {
                return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
            }

            // permission
            if ($pathinfo === '/function/permission') {
                return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::permissionAction',  '_route' => 'permission',);
            }

            if (0 === strpos($pathinfo, '/function/create')) {
                // createUser
                if ($pathinfo === '/function/createUser') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::createUserAction',  '_route' => 'createUser',);
                }

                // createTTHC
                if ($pathinfo === '/function/createTTHC') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::createTTHCAction',  '_route' => 'createTTHC',);
                }

                // createLinhvuc
                if ($pathinfo === '/function/createLinhvuc') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::createLinhvucAction',  '_route' => 'createLinhvuc',);
                }

                // createVaitro
                if ($pathinfo === '/function/createVaitro') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::createVaitroAction',  '_route' => 'createVaitro',);
                }

                // createFunc
                if ($pathinfo === '/function/createFunc') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::createFuncAction',  '_route' => 'createFunc',);
                }

            }

            // initialData
            if ($pathinfo === '/function/initial') {
                return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::intinialDataAction',  '_route' => 'initialData',);
            }

            // editPermission
            if (0 === strpos($pathinfo, '/function/editPermission') && preg_match('#^/function/editPermission/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editPermission')), array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::editPermissionAction',));
            }

            // addPermission
            if (0 === strpos($pathinfo, '/function/addPermission') && preg_match('#^/function/addPermission/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addPermission')), array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::addPermissionAction',));
            }

            if (0 === strpos($pathinfo, '/function/statistic')) {
                // statistic
                if ($pathinfo === '/function/statistic') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::statisticAction',  '_route' => 'statistic',);
                }

                // statisticProfile
                if ($pathinfo === '/function/statisticProfile') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\StaffController::statisticProfileAction',  '_route' => 'statisticProfile',);
                }

            }

            // xulyhoso
            if ($pathinfo === '/function/xulyhoso') {
                return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\LanhdaoController::xulyhosoAction',  '_route' => 'xulyhoso',);
            }

            if (0 === strpos($pathinfo, '/function/t')) {
                // thongkehoso
                if ($pathinfo === '/function/thongkehoso') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\LanhdaoController::thongkehosoAction',  '_route' => 'thongkehoso',);
                }

                // tableUser
                if ($pathinfo === '/function/tableuser') {
                    return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\PermissionController::tableUserAction',  '_route' => 'tableUser',);
                }

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Acme\\PermissionBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/function/log')) {
            // login_check
            if ($pathinfo === '/function/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/function/logout') {
                return array('_route' => 'logout');
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
