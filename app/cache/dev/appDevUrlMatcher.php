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

        // blog_admin_dashboard
        if (rtrim($pathinfo, '/') === '/admin') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_blog_admin_dashboard;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_admin_dashboard');
            }

            return array (  '_controller' => 'App\\GrabberBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'blog_admin_dashboard',);
        }
        not_blog_admin_dashboard:

        if (0 === strpos($pathinfo, '/contents/get')) {
            // all_articles_on_page
            if ($pathinfo === '/contents/getarticles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_all_articles_on_page;
                }

                return array (  '_controller' => 'App\\GrabberBundle\\Controller\\ContentsController::allArticlesOnPageAction',  '_route' => 'all_articles_on_page',);
            }
            not_all_articles_on_page:

            // get_subtopics
            if ($pathinfo === '/contents/getsubtopics') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_subtopics;
                }

                return array (  '_controller' => 'App\\GrabberBundle\\Controller\\ContentsController::getSubtopicsOnTopicAction',  '_route' => 'get_subtopics',);
            }
            not_get_subtopics:

            // get_all_subtopics
            if ($pathinfo === '/contents/getallsubtopics') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_all_subtopics;
                }

                return array (  '_controller' => 'App\\GrabberBundle\\Controller\\ContentsController::getAllSubtopicsAction',  '_route' => 'get_all_subtopics',);
            }
            not_get_all_subtopics:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // admin_login
                    if ($pathinfo === '/admin/login') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_login;
                        }

                        return array (  '_controller' => 'App\\GrabberBundle\\Controller\\SecuredController::loginAction',  '_route' => 'admin_login',);
                    }
                    not_admin_login:

                    // admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_security_check;
                        }

                        return array (  '_controller' => 'App\\GrabberBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => 'admin_security_check',);
                    }
                    not_admin_security_check:

                }

                // app_admin_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'App\\GrabberBundle\\Controller\\SecuredController::logoutAction',  '_route' => 'app_admin_logout',);
                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/app/grabber')) {
                if (0 === strpos($pathinfo, '/admin/app/grabber/contents')) {
                    // admin_app_grabber_contents_list
                    if ($pathinfo === '/admin/app/grabber/contents/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_list',  '_route' => 'admin_app_grabber_contents_list',);
                    }

                    // admin_app_grabber_contents_create
                    if ($pathinfo === '/admin/app/grabber/contents/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_create',  '_route' => 'admin_app_grabber_contents_create',);
                    }

                    // admin_app_grabber_contents_batch
                    if ($pathinfo === '/admin/app/grabber/contents/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_batch',  '_route' => 'admin_app_grabber_contents_batch',);
                    }

                    // admin_app_grabber_contents_edit
                    if (preg_match('#^/admin/app/grabber/contents/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_contents_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_edit',));
                    }

                    // admin_app_grabber_contents_delete
                    if (preg_match('#^/admin/app/grabber/contents/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_contents_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_delete',));
                    }

                    // admin_app_grabber_contents_show
                    if (preg_match('#^/admin/app/grabber/contents/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_contents_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_show',));
                    }

                    // admin_app_grabber_contents_export
                    if ($pathinfo === '/admin/app/grabber/contents/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_app_grabber_contents_export',  '_route' => 'admin_app_grabber_contents_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/grabber/domains')) {
                    // admin_app_grabber_domains_list
                    if ($pathinfo === '/admin/app/grabber/domains/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_list',  '_route' => 'admin_app_grabber_domains_list',);
                    }

                    // admin_app_grabber_domains_create
                    if ($pathinfo === '/admin/app/grabber/domains/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_create',  '_route' => 'admin_app_grabber_domains_create',);
                    }

                    // admin_app_grabber_domains_batch
                    if ($pathinfo === '/admin/app/grabber/domains/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_batch',  '_route' => 'admin_app_grabber_domains_batch',);
                    }

                    // admin_app_grabber_domains_edit
                    if (preg_match('#^/admin/app/grabber/domains/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_domains_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_edit',));
                    }

                    // admin_app_grabber_domains_delete
                    if (preg_match('#^/admin/app/grabber/domains/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_domains_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_delete',));
                    }

                    // admin_app_grabber_domains_show
                    if (preg_match('#^/admin/app/grabber/domains/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_domains_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_show',));
                    }

                    // admin_app_grabber_domains_export
                    if ($pathinfo === '/admin/app/grabber/domains/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.contents',  '_sonata_name' => 'admin_app_grabber_domains_export',  '_route' => 'admin_app_grabber_domains_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/grabber/regulars')) {
                    // admin_app_grabber_regulars_list
                    if ($pathinfo === '/admin/app/grabber/regulars/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_list',  '_route' => 'admin_app_grabber_regulars_list',);
                    }

                    // admin_app_grabber_regulars_create
                    if ($pathinfo === '/admin/app/grabber/regulars/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_create',  '_route' => 'admin_app_grabber_regulars_create',);
                    }

                    // admin_app_grabber_regulars_batch
                    if ($pathinfo === '/admin/app/grabber/regulars/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_batch',  '_route' => 'admin_app_grabber_regulars_batch',);
                    }

                    // admin_app_grabber_regulars_edit
                    if (preg_match('#^/admin/app/grabber/regulars/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_regulars_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_edit',));
                    }

                    // admin_app_grabber_regulars_delete
                    if (preg_match('#^/admin/app/grabber/regulars/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_regulars_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_delete',));
                    }

                    // admin_app_grabber_regulars_show
                    if (preg_match('#^/admin/app/grabber/regulars/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_regulars_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_show',));
                    }

                    // admin_app_grabber_regulars_export
                    if ($pathinfo === '/admin/app/grabber/regulars/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.regulars',  '_sonata_name' => 'admin_app_grabber_regulars_export',  '_route' => 'admin_app_grabber_regulars_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/grabber/navigations')) {
                    // admin_app_grabber_navigations_list
                    if ($pathinfo === '/admin/app/grabber/navigations/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_list',  '_route' => 'admin_app_grabber_navigations_list',);
                    }

                    // admin_app_grabber_navigations_create
                    if ($pathinfo === '/admin/app/grabber/navigations/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_create',  '_route' => 'admin_app_grabber_navigations_create',);
                    }

                    // admin_app_grabber_navigations_batch
                    if ($pathinfo === '/admin/app/grabber/navigations/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_batch',  '_route' => 'admin_app_grabber_navigations_batch',);
                    }

                    // admin_app_grabber_navigations_edit
                    if (preg_match('#^/admin/app/grabber/navigations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_navigations_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_edit',));
                    }

                    // admin_app_grabber_navigations_delete
                    if (preg_match('#^/admin/app/grabber/navigations/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_navigations_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_delete',));
                    }

                    // admin_app_grabber_navigations_show
                    if (preg_match('#^/admin/app/grabber/navigations/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grabber_navigations_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_show',));
                    }

                    // admin_app_grabber_navigations_export
                    if ($pathinfo === '/admin/app/grabber/navigations/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.navigations',  '_sonata_name' => 'admin_app_grabber_navigations_export',  '_route' => 'admin_app_grabber_navigations_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
