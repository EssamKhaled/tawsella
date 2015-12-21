<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/account-info')) {
            // account-info-edit
            if ($pathinfo === '/account-info') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_accountinfoedit;
                }

                return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\AccountInfoController::indexAction',  '_route' => 'account-info-edit',);
            }
            not_accountinfoedit:

            // account-info-update
            if ($pathinfo === '/account-info/update') {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_accountinfoupdate;
                }

                return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\AccountInfoController::updateAction',  '_route' => 'account-info-update',);
            }
            not_accountinfoupdate:

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_home;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }
        not_home:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/article')) {
                // article_view
                if (0 === strpos($pathinfo, '/article/view') && preg_match('#^/article/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\HomeController::viewAction',));
                }
                not_article_view:

                // filter_category
                if (0 === strpos($pathinfo, '/article/category') && preg_match('#^/article/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_filter_category;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filter_category')), array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\HomeController::filterViewAction',));
                }
                not_filter_category:

            }

            // add_comment
            if ($pathinfo === '/ajax/add-comment') {
                return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\HomeController::addCommentAction',  '_route' => 'add_comment',);
            }

        }

        if (0 === strpos($pathinfo, '/my-rides')) {
            // my-rides
            if (rtrim($pathinfo, '/') === '/my-rides') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_myrides;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my-rides');
                }

                return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\MyRidesController::indexAction',  '_route' => 'my-rides',);
            }
            not_myrides:

            if (0 === strpos($pathinfo, '/my-rides/edit')) {
                // offer-ride-edit
                if (preg_match('#^/my\\-rides/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_offerrideedit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer-ride-edit')), array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\MyRidesController::editAction',));
                }
                not_offerrideedit:

                // offer-ride-update
                if (preg_match('#^/my\\-rides/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_offerrideupdate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer-ride-update')), array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\MyRidesController::updateAction',));
                }
                not_offerrideupdate:

            }

            // offer-ride-delete
            if (0 === strpos($pathinfo, '/my-rides/delete') && preg_match('#^/my\\-rides/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offerridedelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer-ride-delete')), array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\MyRidesController::deleteAction',));
            }
            not_offerridedelete:

        }

        if (0 === strpos($pathinfo, '/offer-ride')) {
            if (0 === strpos($pathinfo, '/offer-ride/new')) {
                // offer-ride
                if (rtrim($pathinfo, '/') === '/offer-ride/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_offerride;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'offer-ride');
                    }

                    return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::indexAction',  '_route' => 'offer-ride',);
                }
                not_offerride:

                // create_offerRide
                if ($pathinfo === '/offer-ride/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_create_offerRide;
                    }

                    return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::createAction',  '_route' => 'create_offerRide',);
                }
                not_create_offerRide:

            }

            // offer-ride-confirmation
            if ($pathinfo === '/offer-ride/confirmation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offerrideconfirmation;
                }

                return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::confirmAction',  '_route' => 'offer-ride-confirmation',);
            }
            not_offerrideconfirmation:

            // offer-ride-available
            if ($pathinfo === '/offer-ride/available') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offerrideavailable;
                }

                return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::availableAction',  '_route' => 'offer-ride-available',);
            }
            not_offerrideavailable:

            if (0 === strpos($pathinfo, '/offer-ride/search-')) {
                // offer-ride-search-result
                if ($pathinfo === '/offer-ride/search-result') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_offerridesearchresult;
                    }

                    return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::searchResultAction',  '_route' => 'offer-ride-search-result',);
                }
                not_offerridesearchresult:

                // offer-ride-search-filter
                if ($pathinfo === '/offer-ride/search-filter') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_offerridesearchfilter;
                    }

                    return array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::searchFilterAction',  '_route' => 'offer-ride-search-filter',);
                }
                not_offerridesearchfilter:

            }

            // offer-ride-more-details
            if (0 === strpos($pathinfo, '/offer-ride/more-details') && preg_match('#^/offer\\-ride/more\\-details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offerridemoredetails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer-ride-more-details')), array (  '_controller' => 'Tawsella\\FrontendBundle\\Controller\\OfferRideController::moreDetailsAction',));
            }
            not_offerridemoredetails:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
