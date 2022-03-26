<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../">
    <title>Custom Bootstrap Dialer and Inpit Spinner Component by Keenthemes</title>
    <meta name="description"
          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free."/>
    <meta name="keywords"
          content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme"/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | Metronic"/>
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="{{asset('/assets/media/logos/favicon.ico')}}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body>
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="docs-page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_docs_aside" class="docs-aside" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_docs_aside_toggle">
            <!--begin::Logo-->
            <div class="docs-aside-logo flex-column-auto h-75px" id="kt_docs_aside_logo">
                <!--begin::Link-->
                <a href="../..//dist/index.html">
                    <img alt="Logo" src="{{asset('/assets/media/logos/logo-1-dark.svg')}}" class="h-15px"/>
                </a>
                <!--end::Link-->
            </div>
            <!--end::Logo-->
            <!--begin::Menu-->
            <div class="docs-aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 pe-lg-n2 me-lg-2"
                     id="kt_docs_aside_menu_wrapper" data-kt-scroll="true"
                     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                     data-kt-scroll-dependencies="#kt_docs_aside_logo" data-kt-scroll-wrappers="#kt_docs_aside_menu"
                     data-kt-scroll-offset="10px">
                    <!--begin::Menu-->
                    <div
                        class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                        id="#kt_docs_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Getting Started</h4>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/getting-started.html">
                                <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Build</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/getting-started/build/gulp.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Gulp</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/getting-started/build/webpack.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Webpack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/getting-started/multi-demo.html">
                                <span class="menu-title">Multi-demo</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/getting-started/file-structure.html">
                                <span class="menu-title">File Structure</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Customization</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/getting-started/customization/sass.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">SASS</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/getting-started/customization/javascript.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Javascript</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/getting-started/dark-mode.html">
                                <span class="menu-title">Dark Mode</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/getting-started/rtl.html">
                                <span class="menu-title">RTL Version</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="https://preview.keenthemes.com/metronic8//layout-builder.html" target="blank">
                                <span class="menu-title">Layout Builder</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Server Side Integration</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/getting-started/integration/blazor.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Blazor</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/getting-started/updates.html">
                                <span class="menu-title">Updates</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/getting-started/changelog.html">
										<span class="menu-title">Changelog
										<span
                                            class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v8.0.22</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/getting-started/references.html">
                                <span class="menu-title">References</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="h-30px"></div>
                        </div>
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Base</h4>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/utilities.html">
                                <span class="menu-title">Utilities</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Helpers</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/base/helpers/flex-layouts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Flex Layouts
												<span
                                                    class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/base/helpers/text.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Text</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/base/helpers/background.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Background</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/base/helpers/borders.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Borders</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/base/helpers/opacity.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Opacity</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/forms.html">
                                <span class="menu-title">Forms</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/buttons.html">
                                <span class="menu-title">Buttons</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/accordion.html">
                                <span class="menu-title">Accordion</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/alerts.html">
                                <span class="menu-title">Alerts</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/badges.html">
                                <span class="menu-title">Badges</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/breadcrumb.html">
                                <span class="menu-title">Breadcrumb</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/bullets.html">
										<span class="menu-title">Bullets
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/cards.html">
                                <span class="menu-title">Cards</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/carousel.html">
                                <span class="menu-title">Carousel</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/indicator.html">
										<span class="menu-title">Indicator
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/modal.html">
                                <span class="menu-title">Modal</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/overlay.html">
										<span class="menu-title">Overlay
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/pagination.html">
                                <span class="menu-title">Pagination</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/popovers.html">
                                <span class="menu-title">Popovers</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/tooltips.html">
                                <span class="menu-title">Tooltips</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/pulse.html">
										<span class="menu-title">Pulse
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/rating.html">
										<span class="menu-title">Rating
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/ribbon.html">
										<span class="menu-title">Ribbon
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/rotate.html">
										<span class="menu-title">Rotate
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/separator.html">
										<span class="menu-title">Separator
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/symbol.html">
										<span class="menu-title">Symbol
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/tables.html">
                                <span class="menu-title">Tables</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/base/tabs.html">
                                <span class="menu-title">Tabs</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="h-30px"></div>
                        </div>
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Forms</h4>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/clipboard.html">
                                <span class="menu-title">Clipboard</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/daterangepicker.html">
                                <span class="menu-title">Date Range Picker</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active py-2" href="../..//dist/documentation/forms/dialer.html">
										<span class="menu-title">Dialer
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/dropzonejs.html">
                                <span class="menu-title">DropzoneJS</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/flatpickr.html">
                                <span class="menu-title">Flatpickr</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">FormValidation</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/forms/formvalidation/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/forms/formvalidation/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/forms/formvalidation/advanced.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Advanced</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/image-input.html">
										<span class="menu-title">Image Input
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/inputmask.html">
                                <span class="menu-title">Inputmask</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2"
                               href="../..//dist/documentation/forms/bootstrap-multiselectsplitter.html">
                                <span class="menu-title">Multiselectsplitter</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/nouislider.html">
                                <span class="menu-title">noUiSlider</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/password-meter.html">
										<span class="menu-title">Password Meter
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/google-recaptcha.html">
                                <span class="menu-title">reCAPTCHA</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/select2.html">
                                <span class="menu-title">Select2</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/forms/tagify.html">
                                <span class="menu-title">Tagify</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="h-30px"></div>
                        </div>
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Editors</h4>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">TinyMCE</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/tinymce/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/tinymce/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/tinymce/plugins.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Plugin Addons</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/tinymce/hidden.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Hidden Menubar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">CKEditor</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/ckeditor/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/ckeditor/classic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Classic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/ckeditor/inline.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Inline</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/ckeditor/balloon.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Balloon</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/ckeditor/balloon-block.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Balloon Block</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/ckeditor/document.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Document</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Quill</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/quill/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/quill/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/editors/quill/autosave.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Autosave</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="h-30px"></div>
                        </div>
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Charts</h4>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">AmCharts</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/amcharts/charts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">AmChart Charts</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/amcharts/maps.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">AmChart Maps</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/amcharts/stock-charts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">AmChart Stock Charts</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/charts/apexcharts.html">
                                <span class="menu-title">ApexCharts</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/charts/chartjs.html">
                                <span class="menu-title">ChartJS</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Flotcharts</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic Chart</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/axis.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Axis Labels</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/tracking.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Tracking Curves</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/dynamic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Dynamic Chart</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/stack.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Stack Chart Controls</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/bar.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Bar Chart</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/flotcharts/pie.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Pie Chart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Google Charts</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/google-charts/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/google-charts/column.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Column Chart</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/google-charts/pie.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Pie Chart</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/charts/google-charts/line.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Line Chart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="h-30px"></div>
                        </div>
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">General</h4>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">DataTables</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/datatables/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/datatables/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/datatables/advanced.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Advanced</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/datatables/server-side.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Server Side</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/datatables/api.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">API</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Fullcalendar</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/drag-n-drop.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Drag-n-Drop</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/selectable.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Selectable Dates</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/background-events.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Background Events</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/locales.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Localization</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/fullcalendar/timezone.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Timezone</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/menu.html">
										<span class="menu-title">Menu
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/drawer.html">
										<span class="menu-title">Drawer
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">jKanban Board</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jkanban/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jkanban/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jkanban/color.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Colored</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jkanban/restricted.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Restricted</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jkanban/rich.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Rich Content</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/fslightbox.html">
                                <span class="menu-title">Fullscreen Lightbox</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/smooth-scroll.html">
                                <span class="menu-title">Smooth Scroll</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/stepper.html">
										<span class="menu-title">Stepper
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/scroll.html">
										<span class="menu-title">Scroll
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/search.html">
										<span class="menu-title">Quick Search
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/sticky.html">
										<span class="menu-title">Sticky
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/swapper.html">
										<span class="menu-title">Swapper
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/blockui.html">
										<span class="menu-title">BlockUI
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/toastr.html">
                                <span class="menu-title">Toastr</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/toggle.html">
										<span class="menu-title">Toggle
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/typedjs.html">
                                <span class="menu-title">Typed.js</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/cropper.html">
                                <span class="menu-title">Cropper</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Draggable</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/draggable/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/draggable/cards.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Draggable Cards</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/draggable/multiple-containers.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Multiple Containers</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/draggable/swappable.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Swappable</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/draggable/restricted.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Restricted</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/scrolltop.html">
										<span class="menu-title">Scrolltop
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/general/cookie.html">
										<span class="menu-title">Cookie
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Vis-Timeline</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/vis-timeline/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/vis-timeline/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/vis-timeline/style.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Custom Styling</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/vis-timeline/group.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Groups</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/vis-timeline/interaction.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Interactions</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/vis-timeline/template.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Templates</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">jsTree</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Overview</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Basic Tree</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/contextual.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Contextual Menu</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/customicons.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Custom Icons</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/dragdrop.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Drag &amp; Drop</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/checkable.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Checkable Tree</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2"
                                       href="../..//dist/documentation/general/jstree/ajax.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Ajax Data</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="h-30px"></div>
                        </div>
                        <div class="menu-item">
                            <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Icons</h4>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/icons/duotune.html">
										<span class="menu-title">Duotune
										<span
                                            class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/icons/duotone.html">
                                <span class="menu-title">Duotone</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/icons/bootstrap-icons.html">
                                <span class="menu-title">Bootstrap Icons</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/icons/font-awesome.html">
                                <span class="menu-title">Font Awesome</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link py-2" href="../..//dist/documentation/icons/line-awesome.html">
                                <span class="menu-title">Line Awesome</span>
                            </a>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="docs-wrapper d-flex flex-column flex-row-fluid" id="kt_docs_wrapper">
            <!--begin::Header-->
            <div id="kt_docs_header" class="docs-header align-items-stretch mb-2 mb-lg-10">
                <!--begin::Container-->
                <div class="container">
                    <div class="d-flex align-items-stretch justify-content-between py-3 h-75px">
                        <!--begin::Aside toggle-->
                        <div class="d-flex align-items-center d-lg-none me-3" title="Show aside menu">
                            <div class="btn btn-icon btn-flex btn-active-color-primary" id="kt_docs_aside_toggle">
                                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                <span class="svg-icon svg-icon-2tx mt-1">
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
													<path
                                                        d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                        fill="#000000" opacity="0.3"/>
												</g>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside toggle-->
                        <!--begin::Logo-->
                        <div class="d-flex d-lg-none align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                            <a href="../..//dist/index.html">
                                <img alt="Logo" src="{{asset('/assets/media/logos/logo-1-dark.svg')}}" class="h-15px"/>
                            </a>
                        </div>
                        <!--end::Logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between flex-lg-grow-1">
                            <!--begin::Header title-->
                            <div class="d-flex align-items-center" id="kt_docs_header_title">
                                <!--begin::Page title-->
                                <div
                                    class="docs-page-title d-flex flex-column flex-lg-row align-items-lg-center py-5 mb-lg-0"
                                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_docs_content_container', 'lg': '#kt_docs_header_title'}">
                                    <!--begin::Title-->
                                    <h1 class="d-flex align-items-center text-dark my-1 fs-4">Documentation
                                        <a href="../..//dist/documentation/getting-started/changelog.html"
                                           class="badge fw-bold fs-9 px-2 ms-2 badge-white text-hover-primary shadow-sm">v8.0.22</a>
                                    </h1>
                                    <!--end::Title-->
                                    <!--begin::Separator-->
                                    <span class="d-none d-lg-block bullet h-20px w-1px bg-secondary mx-4"></span>
                                    <!--end::Separator-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-6 my-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-gray-600">Forms</li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-dark">Dialer
                                            <span class="badge badge-success fw-bold fs-9 px-2 ms-2 cursor-default ms-2"
                                                  data-bs-toggle="tooltip" title="Developed in-house for Metronic">Exclusive</span>
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Header title-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <a class="btn btn-bg-white btn-color-gray-700 btn-active-primary fw-bolder me-4"
                                   href="https://preview.keenthemes.com/metronic8" target="_blank">Preview</a>
                                <a class="btn btn-primary fw-bolder" href="https://1.envato.market/EA4JP"
                                   target="_blank">Purchase</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <div class="border-gray-300 border-bottom border-bottom-dashed"></div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
                <!--begin::Container-->
                <div class="container" id="kt_docs_content_container">
                    <!--begin::Card-->
                    <div class="card mb-2">
                        <!--begin::Card Body-->
                        <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                            <!--begin::Section-->
                            <div class="pb-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-5" id="overview">
                                    <a href="#overview"></a>Overview</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">Dialer is an exclusive plugin of Metronic that enables user-friendly
                                    click based dialing functionality for any text input.
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-5" id="usage">
                                    <a href="#usage"></a>Usage</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">Dialer's CSS and Javascript files are bundled in the global style and
                                    scripts bundles and are globally included in all pages:
                                </div>
                                <!--end::Block-->
                                <!--begin::Code-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                            copy
                                        </button>
                                        <div class="highlight-code">
													<pre class="language-html">
<code class="language-html">&lt;link href="{{asset('/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/&gt;
&lt;script src="{{asset('/js/scripts.bundle.js')}}"&gt;&lt;/script&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-5" id="initialization">
                                    <a href="#initialization"></a>Initialization</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">
                                    <ul class="py-0">
                                        <li class="py-2">Dialer does not come with its own custom CSS and it uses global
                                            input controls and related elements.
                                        </li>
                                        <li class="py-2">Dialer instances are automatically initialized through
                                            <code>data-kt-dialer="true"</code>HTML attribute on document ready event.
                                        </li>
                                        <li class="py-2">Dialer instances can be created programmatically without using
                                            the above HTML attribute. See below for more info.
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-5" id="basic">
                                    <a href="#basic"></a>Basic Example</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">Basic example of Dialer based on Input Group:</div>
                                <!--end::Block-->
                                <!--begin::Block-->
                                <div class="py-5">
                                    <div class="rounded border p-10">
                                        <div>
                                            <label for="" class="form-label fw-bold mb-5">Input Dialer Examples:</label>
                                            <!--begin::Dialer-->
                                            <div class="input-group w-md-300px" data-kt-dialer="true"
                                                 data-kt-dialer-min="1000" data-kt-dialer-max="50000"
                                                 data-kt-dialer-step="1000" data-kt-dialer-prefix="$">
                                                <!--begin::Decrease control-->
                                                <button class="btn btn-icon btn-outline btn-outline-secondary"
                                                        type="button" data-kt-dialer-control="decrease">
                                                    <i class="bi bi-dash fs-1"></i>
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control" readonly="readonly"
                                                       placeholder="Amount" value="$10000"
                                                       data-kt-dialer-control="input"/>
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button class="btn btn-icon btn-outline btn-outline-secondary"
                                                        type="button" data-kt-dialer-control="increase">
                                                    <i class="bi bi-plus fs-1"></i>
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Block-->
                                <!--begin::Code-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                            copy
                                        </button>
                                        <div class="highlight-code">
													<pre class="language-html">
<code class="language-html">&lt;!--begin::Dialer--&gt;
&lt;div class="input-group w-md-300px"
    data-kt-dialer="true"
    data-kt-dialer-min="1000"
    data-kt-dialer-max="50000"
    data-kt-dialer-step="1000"
    data-kt-dialer-prefix="$"&gt;

    &lt;!--begin::Decrease control--&gt;
    &lt;button class="btn btn-icon btn-outline btn-outline-secondary" type="button" data-kt-dialer-control="decrease"&gt;
        &lt;i class="bi bi-dash fs-1"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Decrease control--&gt;

    &lt;!--begin::Input control--&gt;
    &lt;input type="text" class="form-control" readonly placeholder="Amount" value="$10000" data-kt-dialer-control="input"/&gt;
    &lt;!--end::Input control--&gt;

    &lt;!--begin::Increase control--&gt;
    &lt;button class="btn btn-icon btn-outline btn-outline-secondary" type="button" data-kt-dialer-control="increase"&gt;
        &lt;i class="bi bi-plus fs-1"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;!--end::Increase control--&gt;
&lt;/div&gt;
&lt;!--end::Dialer--&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-5" id="custom">
                                    <a href="#custom"></a>Custom Example</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">The Look and feel can be easily customized by using any input, button
                                    or icon variations:
                                </div>
                                <!--end::Block-->
                                <!--begin::Block-->
                                <div class="py-5">
                                    <div class="rounded border p-10">
                                        <div>
                                            <label for="" class="form-label fw-bold mb-5">Input Dialer Examples:</label>
                                            <!--begin::Dialer-->
                                            <div class="position-relative w-md-300px" data-kt-dialer="true"
                                                 data-kt-dialer-min="1000" data-kt-dialer-max="50000"
                                                 data-kt-dialer-step="1000" data-kt-dialer-prefix="$"
                                                 data-kt-dialer-decimals="2">
                                                <!--begin::Decrease control-->
                                                <button type="button"
                                                        class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                        data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotone/Interface/Minus-Square.svg-->
                                                    <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.25"
                                                                          d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                                                          fill="#12131A"/>
																	<path
                                                                        d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z"
                                                                        fill="#12131A"/>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text"
                                                       class="form-control form-control-solid border-0 ps-12"
                                                       data-kt-dialer-control="input" placeholder="Amount"
                                                       name="manageBudget" readonly="readonly" value="$36,000.00"/>
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button"
                                                        class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                        data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotone/Interface/Plus-Square.svg-->
                                                    <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.25" fill-rule="evenodd"
                                                                          clip-rule="evenodd"
                                                                          d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                                                          fill="#12131A"/>
																	<path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z"
                                                                          fill="#12131A"/>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Block-->
                                <!--begin::Code-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                            copy
                                        </button>
                                        <div class="highlight-code">
													<pre class="language-html">
<code class="language-html">&lt;!--begin::Dialer--&gt;
&lt;div class="position-relative w-md-300px"
    data-kt-dialer="true"
    data-kt-dialer-min="1000"
    data-kt-dialer-max="50000"
    data-kt-dialer-step="1000"
    data-kt-dialer-prefix="$"
    data-kt-dialer-decimals="2"&gt;

    &lt;!--begin::Decrease control--&gt;
    &lt;button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease"&gt;
        &lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;&lt;/svg&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Decrease control--&gt;

    &lt;!--begin::Input control--&gt;
    &lt;input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly value="$36,000.00" /&gt;
    &lt;!--end::Input control--&gt;

    &lt;!--begin::Increase control--&gt;
    &lt;button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase"&gt;
        &lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;&lt;/svg&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Increase control--&gt;
&lt;/div&gt;
&lt;!--end::Dialer--&gt;</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                                <div class="py-5">
                                    <!--begin::Information-->
                                    <div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Info-circle.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-warning me-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                         viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
														<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
														<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <div class="text-gray-700 fw-bold fs-6">While customizing the look and feel,
                                            ensure to maintain the control attributes(
                                            <code>data-kt-dialer-control="*"</code>) in order Dialer to function as
                                            expected.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Information-->
                                </div>
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-5" id="javascript">
                                    <a href="#javascript"></a>Javascript Example</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">An example of Dialer initialized in Javascript:</div>
                                <!--end::Block-->
                                <!--begin::Block-->
                                <div class="py-5">
                                    <div class="rounded border p-10">
                                        <div>
                                            <label for="" class="form-label fw-bold mb-5">Input Dialer Example:</label>
                                            <!--begin::Dialer-->
                                            <div class="position-relative w-md-300px" id="kt_dialer_example_1">
                                                <!--begin::Decrease control-->
                                                <button type="button"
                                                        class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                        data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotone/Interface/Minus-Square.svg-->
                                                    <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.25"
                                                                          d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                                                          fill="#12131A"/>
																	<path
                                                                        d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z"
                                                                        fill="#12131A"/>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text"
                                                       class="form-control form-control-solid border-0 ps-12"
                                                       data-kt-dialer-control="input" placeholder="Amount"
                                                       name="manageBudget" readonly="readonly" value="$36,000.00"/>
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button"
                                                        class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                        data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotone/Interface/Plus-Square.svg-->
                                                    <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.25" fill-rule="evenodd"
                                                                          clip-rule="evenodd"
                                                                          d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                                                          fill="#12131A"/>
																	<path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z"
                                                                          fill="#12131A"/>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Block-->
                                <!--begin::Code-->
                                <div class="py-5">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                            copy
                                        </button>
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                   href="#kt_highlight_610d47e1e7449" role="tab">JAVASCRIPT</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                   href="#kt_highlight_610d47e1e7451" role="tab">HTML</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_highlight_610d47e1e7449"
                                                 role="tabpanel">
                                                <div class="highlight-code">
															<pre class="language-javascript">
<code class="language-javascript">// Dialer container element
var dialerElement = document.querySelector("#kt_dialer_example_1");

// Create dialer object and initialize a new instance
var dialerObject = new KTDialer(dialerElement, {
    min: 1000,
    max: 50000,
    step: 1000,
    prefix: "$",
    decimals: 2
});</code>
</pre>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_highlight_610d47e1e7451" role="tabpanel">
                                                <div class="highlight-code">
															<pre class="language-html">
<code class="language-html">&lt;!--begin::Dialer--&gt;
&lt;div class="position-relative w-md-300px" id="kt_dialer_example_1"&gt;
    &lt;!--begin::Decrease control--&gt;
    &lt;button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease"&gt;
        &lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;&lt;/svg&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Decrease control--&gt;

    &lt;!--begin::Input control--&gt;
    &lt;input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" name="manageBudget" readonly value="$36,000.00" /&gt;
    &lt;!--end::Input control--&gt;

    &lt;!--begin::Increase control--&gt;
    &lt;button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase"&gt;
        &lt;span class="svg-icon svg-icon-1"&gt;&lt;svg&gt;&lt;/svg&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;!--end::Increase control--&gt;
&lt;/div&gt;
&lt;!--end::Dialer--&gt;</code>
</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                                <!--end::Code-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-2" id="options">
                                    <a href="#options"></a>Options Reference</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">All options can be passed via HTML attributes
                                    <code>data-kt-dialer-{option}</code>as well the
                                    <code>option</code>below that represents the Javascript options object key:
                                </div>
                                <!--end::Block-->
                                <!--begin::Table-->
                                <div class="py-5">
                                    <div class="table-responsive border rounded">
                                        <table class="table table-striped align-middle mb-0 g-5">
                                            <thead>
                                            <tr class="fs-4 fw-bolder text-dark p-6">
                                                <th class="min-w-150px">Name</th>
                                                <th class="min-w-150px">Type</th>
                                                <th class="min-w-150px">Default</th>
                                                <th class="min-w-500px">Description</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <code>min</code>
                                                </td>
                                                <td>Number</td>
                                                <td>null</td>
                                                <td>Seta a minimum value of the input.</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>max</code>
                                                </td>
                                                <td>Number</td>
                                                <td>null</td>
                                                <td>Sets a maximum value of the input.</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>step</code>
                                                </td>
                                                <td>Number</td>
                                                <td>1</td>
                                                <td>Sets a step value for dialing.</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>decimals</code>
                                                </td>
                                                <td>Integer</td>
                                                <td>0</td>
                                                <td>Sets a decimals number for float value formating.</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>prefix</code>
                                                </td>
                                                <td>String</td>
                                                <td>' '</td>
                                                <td>Displays the formatted input value with a prefix string.</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>suffix</code>
                                                </td>
                                                <td>String</td>
                                                <td>' '</td>
                                                <td>Displays the formatted input value with a suffix string.</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="py-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-2" id="methods">
                                    <a href="#methods"></a>Methods</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">The following are the Dialer's functionality methods for more
                                    control.
                                </div>
                                <!--end::Block-->
                                <!--begin::Table-->
                                <div class="pt-2 pb-10">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive border rounded">
                                        <!--begin::Table-->
                                        <table class="table table-striped mb-0 g-6">
                                            <!--begin::Head-->
                                            <thead>
                                            <tr class="fs-4 fw-bolder p-6">
                                                <th class="min-w-300px">Name</th>
                                                <th class="min-w-500px">Description</th>
                                            </tr>
                                            </thead>
                                            <!--end::Head-->
                                            <!--begin::Body-->
                                            <tbody>
                                            <tr class="fs-4 fw-bolder p-6">
                                                <th colspan="2">Static Methods</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>createInstances(DOMString selector)</code>
                                                </td>
                                                <td>Initializes Bootstrap Dialer instances by selector. Default value of
                                                    <code>selector</code>is
                                                    <code>[data-kt-dialer="true"]</code>. This method can be used to
                                                    initialize dynamicly populated Bootstrap Dialer instances(e.g: after
                                                    Ajax request).
                                                    <div class="pt-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">KTDialer.createInstances();</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>getInstance(DOMElement element)</code>
                                                </td>
                                                <td>Get the Dialer instance created
                                                    <div class="pt-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var dialerElement = document.querySelector("#kt_dialer_example_1");
var dialerObject = KTDialer.getInstance(dialerElement);</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-4 fw-bolder p-6">
                                                <th colspan="2">Public Methods</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>KTDialer(DOMElement element, Object options)</code>
                                                </td>
                                                <td>Constructs a new instance of
                                                    <code>KTDialer</code>class and initializes a Dialer control:
                                                    <div class="pt-3 mb-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var dialerElement = document.querySelector("#kt_dialer_control");
var dialerObject = new KTDialer(dialerElement, options);</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                    <!--begin::Information-->
                                                    <div
                                                        class="d-flex align-items-center rounded py-5 px-5 bg-light-info">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotone/Code/Info-circle.svg-->
                                                        <span class="svg-icon svg-icon-3x svg-icon-info me-5">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                         height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<circle fill="#000000" opacity="0.3" cx="12"
                                                                                cy="12" r="10"/>
																		<rect fill="#000000" x="11" y="10" width="2"
                                                                              height="7" rx="1"/>
																		<rect fill="#000000" x="11" y="7" width="2"
                                                                              height="2" rx="1"/>
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Description-->
                                                        <div class="text-gray-700 fw-bold fs-6">Remove
                                                            <code>data-kt-dialer="true"</code>attribute to avoid lazy
                                                            initializes.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Information-->
                                                    <!--begin::Information-->
                                                    <div
                                                        class="d-flex align-items-center rounded py-5 px-5 bg-light-warning">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotone/Code/Info-circle.svg-->
                                                        <span class="svg-icon svg-icon-3x svg-icon-warning me-5">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                         height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<circle fill="#000000" opacity="0.3" cx="12"
                                                                                cy="12" r="10"/>
																		<rect fill="#000000" x="11" y="10" width="2"
                                                                              height="7" rx="1"/>
																		<rect fill="#000000" x="11" y="7" width="2"
                                                                              height="2" rx="1"/>
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Description-->
                                                        <div class="text-gray-700 fw-bold fs-6">For
                                                            <code>options</code>object refer to above Options Reference
                                                            section.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Information--></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>increase()</code>
                                                </td>
                                                <td>Increases the input value with the configured step value.
                                                    <div class="pt-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">dialerObject.increase();</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>decrease()</code>
                                                </td>
                                                <td>Decreases the input value with the configured step value.
                                                    <div class="pt-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">dialerObject.decrease();</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>getElement()</code>
                                                </td>
                                                <td>Returns the Dialer's attached DOM element.
                                                    <div class="pt-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var element = dialerObject.getElement();</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>destroy()</code>
                                                </td>
                                                <td>Removes the component instance from element.
                                                    <div class="pt-3">
                                                        <!--begin::Highlight-->
                                                        <div class="highlight">
                                                            <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                                                    title="Copy code">copy
                                                            </button>
                                                            <div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">dialerObject.destroy();</code>
</pre>
                                                            </div>
                                                        </div>
                                                        <!--end::Highlight-->
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Body-->
                                        </table>
                                    </div>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="pt-10">
                                <!--begin::Heading-->
                                <h1 class="anchor fw-bolder mb-2" id="events">
                                    <a href="#events"></a>Events</h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">Below are few events for hooking into the Dialer functionality.</div>
                                <!--end::Block-->
                                <!--begin::Table-->
                                <div class="pt-2 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive border rounded">
                                        <!--begin::Table-->
                                        <table class="table table-striped align-middle mb-0 g-5">
                                            <!--begin::Head-->
                                            <thead>
                                            <tr class="fs-4 fw-bolder text-dark p-6">
                                                <th class="min-w-200px">Event Type</th>
                                                <th class="min-w-500px">Description</th>
                                            </tr>
                                            </thead>
                                            <!--end::Head-->
                                            <!--begin::Body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <code>kt.dialer.increase</code>
                                                </td>
                                                <td>This event fires before running the
                                                    <code>increase</code>method
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>kt.dialer.increased</code>
                                                </td>
                                                <td>This event fires after running the
                                                    <code>increase</code>method
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>kt.dialer.decrease</code>
                                                </td>
                                                <td>This event fires before running the
                                                    <code>decrease</code>method
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <code>kt.dialer.decreased</code>
                                                </td>
                                                <td>This event fires before after the
                                                    <code>decrease</code>method
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Body-->
                                        </table>
                                    </div>
                                </div>
                                <!--end::Table-->
                                <div class="pt-3">
                                    <!--begin::Highlight-->
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                            copy
                                        </button>
                                        <div class="highlight-code">
													<pre class="language-javascript">
<code class="language-javascript">var dialerElement = document.querySelector("#kt_dialer_example_1");
var dialerObject = new KTDialer(dialerElement, { /* options */ });
dialerObject.on('kt.dialer.increase', function(){
    // do something...
});</code>
</pre>
                                        </div>
                                    </div>
                                    <!--end::Highlight-->
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Card Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="py-4 d-flex flex-lg-column py-6" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1">2021©</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1 align-items-center mb-3 mb-md-0">
                        <!--begin::Menu item-->
                        <li class="menu-item">
                            <!--begin::Menu link-->
                            <a href="https://www.youtube.com/c/KeenThemesTuts/videos" target="_blank"
                               class="menu-link px-3">
                                <img alt="Keenthemes Youtube"
                                     src="{{asset('/assets/media/svg/social-logos/youtube.svg')}}" class="h-20px"/>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu link-->
                        <!--begin::Menu item-->
                        <li class="menu-item">
                            <!--begin::Menu link-->
                            <a href="https://github.com/KeenthemesHub" target="_blank" class="menu-link px-3">
                                <img alt="Keenthemes Github" src="{{asset('/assets/media/svg/social-logos/github.svg')}}"
                                     class="h-20px"/>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu link-->
                        <!--begin::Menu item-->
                        <li class="menu-item">
                            <!--begin::Menu link-->
                            <a href="https://twitter.com/keenthemes" target="_blank" class="menu-link px-3">
                                <img alt="Keenthemes Twitter"
                                     src="{{asset('/assets/media/svg/social-logos/twitter.svg')}}" class="h-20px"/>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu link-->
                        <!--begin::Menu item-->
                        <li class="menu-item">
                            <!--begin::Menu link-->
                            <a href="https://www.instagram.com/keenthemes" target="_blank" class="menu-link px-3">
                                <img alt="Keenthemes Instagram"
                                     src="{{asset('/assets/media/svg/social-logos/instagram.svg')}}" class="h-20px"/>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu link-->
                        <!--begin::Menu item-->
                        <li class="menu-item">
                            <!--begin::Menu link-->
                            <a href="https://www.facebook.com/keenthemes" target="_blank" class="menu-link px-3">
                                <img alt="Keenthemes Facebook"
                                     src="{{asset('/')}}media/svg/social-logos/facebook.svg" class="h-20px"/>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu link-->
                        <!--begin::Menu item-->
                        <li class="menu-item">
                            <!--begin::Menu link-->
                            <a href="https://dribbble.com/keenthemes" target="_blank" class="menu-link px-3">
                                <img alt="Keenthemes Dribbble"
                                     src="{{asset('/assets/media/svg/social-logos/dribbble.svg')}}" class="h-20px"/>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu link-->
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!--begin::Exolore drawer toggle-->
<button id="kt_explore_toggle"
        class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0"
        title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
    <span id="kt_explore_toggle_label">Explore</span>
</button>
<!--end::Exolore drawer toggle-->
<!--begin::Exolore drawer-->
<div id="kt_explore" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true"
     data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}"
     data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_explore_header">
            <h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                       fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
										<rect fill="#000000" opacity="0.5"
                                              transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                              x="0" y="7" width="16" height="2" rx="1"/>
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_explore_body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto"
                 data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header"
                 data-kt-scroll-offset="5px">
                <!--begin::Wrapper-->
                <div class="mb-0">
                    <!--begin::Header-->
                    <div class="mb-7">
                        <div class="d-flex flex-stack">
                            <h3 class="mb-0">Metronic Licenses</h3>
                            <a href="https://themeforest.net/licenses/standard" class="fw-bold" target="_blank">License
                                FAQs</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
                                    <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                       data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                       data-bs-trigger="hover" data-bs-placement="top"
                                       data-bs-content="Use, by you or one client in a single end product which end users are not charged for."></i>
                                </div>
                                <div class="fs-7 text-muted">For single end product used by you or one client</div>
                            </div>
                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                <span class="text-dark fs-1 fw-bolder">39</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
                                    <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                       data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                       data-bs-trigger="hover" data-bs-placement="top"
                                       data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                </div>
                                <div class="fs-7 text-muted">For single end product with paying users.</div>
                            </div>
                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                <span class="text-dark fs-1 fw-bolder">939</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
                                </div>
                                <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                            </div>
                            <div class="text-nowrap">
                                <a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success"
                                   target="_blank">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::Purchase-->
                    <a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
                    <!--end::Purchase-->
                    <!--begin::Demos-->
                    <div class="mb-0">
                        <h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
                        <!--begin::Row-->
                        <div class="row g-5">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div
                                    class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo1.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo1"
                                           class="btn btn-sm btn-success shadow">Demo 1</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo2.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo2"
                                           class="btn btn-sm btn-success shadow">Demo 2</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo3.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo3"
                                           class="btn btn-sm btn-success shadow">Demo 3</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo4.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo4"
                                           class="btn btn-sm btn-success shadow">Demo 4</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo5.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo5"
                                           class="btn btn-sm btn-success shadow">Demo 5</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo6.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo6"
                                           class="btn btn-sm btn-success shadow">Demo 6</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo7.png')}}" alt="demo" class="w-100"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo7"
                                           class="btn btn-sm btn-success shadow">Demo 7</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo8.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo9.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo10.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo11.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo12.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo13.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo14.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo15.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative rounded">
                                    <div class="overlay-wrapper">
                                        <img src="{{asset('/assets/media/demos/demo16.png')}}" alt="demo"
                                             class="w-100 opacity-75"/>
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                        </div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Demos-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Exolore drawer-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24"/>
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1"/>
						<path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero"/>
					</g>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset('/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('/js/custom/documentation/documentation.js')}}"></script>
<script src="{{asset('/js/custom/documentation/forms/dialer.js')}}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
