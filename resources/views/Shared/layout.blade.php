<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestion de la configuración de Software</title>

    <!-- Global stylesheets -->
    <link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/drilldown.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="../assets/js/plugins/notifications/sweet_alert.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="../assets/js/core/app.js"></script>
    <script type="text/javascript" src="../assets/js/pages/components_modals.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index-2.html"><img src="../assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">

        <ul class="nav navbar-nav navbar-right">


            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../assets/images/demo/users/face11.jpg" alt="">
                    <span>Victoria</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Second navbar -->
<div class="navbar navbar-default" id="navbar-second">
    <ul class="nav navbar-nav no-border visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="navbar-second-toggle">
        <ul class="nav navbar-nav">
            <li><a href="index-2.html"><i class="icon-display4 position-left"></i> Dashboard</a></li>

            <li class="dropdown mega-menu mega-menu-wide">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Components <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Forms</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-pencil3"></i> Form components</a>
                                        <ul>
                                            <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                                            <li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
                                            <li><a href="form_input_groups.html">Input groups</a></li>
                                            <li><a href="form_controls_extended.html">Extended controls</a></li>
                                            <li><a href="form_floating_labels.html">Floating labels</a></li>
                                            <li>
                                                <a href="#">Selects</a>
                                                <ul>
                                                    <li><a href="form_select2.html">Select2 selects</a></li>
                                                    <li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
                                                    <li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
                                                    <li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="form_tag_inputs.html">Tag inputs</a></li>
                                            <li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
                                            <li><a href="form_editable.html">Editable forms</a></li>
                                            <li><a href="form_validation.html">Validation</a></li>
                                            <li><a href="form_inputs_grid.html">Inputs grid</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-file-css"></i> JSON forms</a>
                                        <ul>
                                            <li><a href="alpaca_basic.html">Basic inputs</a></li>
                                            <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                            <li><a href="alpaca_controls.html">Controls</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-footprint"></i> Wizards</a>
                                        <ul>
                                            <li><a href="wizard_steps.html">Steps wizard</a></li>
                                            <li><a href="wizard_form.html">Form wizard</a></li>
                                            <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-spell-check"></i> Editors</a>
                                        <ul>
                                            <li><a href="editor_summernote.html">Summernote editor</a></li>
                                            <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                            <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                            <li><a href="editor_code.html">Code editor</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-select2"></i> Pickers</a>
                                        <ul>
                                            <li><a href="picker_date.html">Date &amp; time pickers</a></li>
                                            <li><a href="picker_color.html">Color pickers</a></li>
                                            <li><a href="picker_location.html">Location pickers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-insert-template"></i> Form layouts</a>
                                        <ul>
                                            <li><a href="form_layout_vertical.html">Vertical form</a></li>
                                            <li><a href="form_layout_horizontal.html">Horizontal form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Appearance</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-grid"></i> Components</a>
                                        <ul>
                                            <li class="active"><a href="components_modals.html">Modals</a></li>
                                            <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                                            <li><a href="components_tabs.html">Tabs component</a></li>
                                            <li><a href="components_pills.html">Pills component</a></li>
                                            <li><a href="components_navs.html">Accordion and navs</a></li>
                                            <li><a href="components_buttons.html">Buttons</a></li>
                                            <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                                            <li><a href="components_notifications_others.html">Other notifications</a></li>
                                            <li><a href="components_popups.html">Tooltips and popovers</a></li>
                                            <li><a href="components_alerts.html">Alerts</a></li>
                                            <li><a href="components_pagination.html">Pagination</a></li>
                                            <li><a href="components_labels.html">Labels and badges</a></li>
                                            <li><a href="components_loaders.html">Loaders and bars</a></li>
                                            <li><a href="components_thumbnails.html">Thumbnails</a></li>
                                            <li><a href="components_page_header.html">Page header</a></li>
                                            <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                            <li><a href="components_media.html">Media objects</a></li>
                                            <li><a href="components_affix.html">Affix and Scrollspy</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-browser"></i> Content panels</a>
                                        <ul>
                                            <li><a href="panels.html">Panels</a></li>
                                            <li><a href="panels_heading.html">Heading elements</a></li>
                                            <li><a href="panels_footer.html">Footer elements</a></li>
                                            <li><a href="panels_draggable.html">Draggable panels</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-droplets"></i> Content styling</a>
                                        <ul>
                                            <li><a href="appearance_text_styling.html">Text styling</a></li>
                                            <li><a href="appearance_typography.html">Typography</a></li>
                                            <li><a href="appearance_helpers.html">Helper classes</a></li>
                                            <li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
                                            <li><a href="appearance_content_grid.html">Grid system</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-gift"></i> Extra components</a>
                                        <ul>
                                            <li><a href="extra_sliders_noui.html">NoUI sliders</a></li>
                                            <li><a href="extra_sliders_ion.html">Ion range sliders</a></li>
                                            <li><a href="extra_trees.html">Dynamic tree views</a></li>
                                            <li><a href="extra_context_menu.html">Context menu</a></li>
                                            <li><a href="extra_fab.html">Floating action buttons</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-wrench3"></i> Tools</a>
                                        <ul>
                                            <li><a href="tools_session_timeout.html">Session timeout</a></li>
                                            <li><a href="tools_idle_timeout.html">Idle timeout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Extensions</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-puzzle4"></i> Extensions</a>
                                        <ul>
                                            <li><a href="extension_image_cropper.html">Image cropper</a></li>
                                            <li><a href="extension_blockui.html">Block UI</a></li>
                                            <li><a href="extension_dnd.html">Drag and drop</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-popout"></i> JQuery UI</a>
                                        <ul>
                                            <li><a href="jqueryui_interactions.html">Interactions</a></li>
                                            <li><a href="jqueryui_forms.html">Forms</a></li>
                                            <li><a href="jqueryui_components.html">Components</a></li>
                                            <li><a href="jqueryui_sliders.html">Sliders</a></li>
                                            <li><a href="jqueryui_navigation.html">Navigation</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-upload"></i> File uploaders</a>
                                        <ul>
                                            <li><a href="uploader_plupload.html">Plupload</a></li>
                                            <li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
                                            <li><a href="uploader_dropzone.html">Dropzone</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-calendar3"></i> Event calendars</a>
                                        <ul>
                                            <li><a href="fullcalendar_views.html">Basic views</a></li>
                                            <li><a href="fullcalendar_styling.html">Event styling</a></li>
                                            <li><a href="fullcalendar_formats.html">Language and time</a></li>
                                            <li><a href="fullcalendar_advanced.html">Advanced usage</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-sphere"></i> Internationalization</a>
                                        <ul>
                                            <li><a href="internationalization_switch_direct.html">Direct translation</a></li>
                                            <li><a href="internationalization_switch_query.html">Querystring parameter</a></li>
                                            <li><a href="internationalization_on_init.html">Set language on init</a></li>
                                            <li><a href="internationalization_after_init.html">Set language after init</a></li>
                                            <li><a href="internationalization_fallback.html">Language fallback</a></li>
                                            <li><a href="internationalization_callbacks.html">Callbacks</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Tables</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-table2"></i> Basic tables</a>
                                        <ul>
                                            <li><a href="table_basic.html">Basic examples</a></li>
                                            <li><a href="table_sizing.html">Table sizing</a></li>
                                            <li><a href="table_borders.html">Table borders</a></li>
                                            <li><a href="table_styling.html">Table styling</a></li>
                                            <li><a href="table_elements.html">Table elements</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-grid7"></i> Data tables</a>
                                        <ul>
                                            <li><a href="datatable_basic.html">Basic initialization</a></li>
                                            <li><a href="datatable_styling.html">Basic styling</a></li>
                                            <li><a href="datatable_advanced.html">Advanced examples</a></li>
                                            <li><a href="datatable_sorting.html">Sorting options</a></li>
                                            <li><a href="datatable_api.html">Using API</a></li>
                                            <li><a href="datatable_data_sources.html">Data sources</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-alignment-unalign"></i> Data tables extensions</a>
                                        <ul>
                                            <li><a href="datatable_extension_reorder.html">Columns reorder</a></li>
                                            <li><a href="datatable_extension_row_reorder.html">Row reorder</a></li>
                                            <li><a href="datatable_extension_fixed_columns.html">Fixed columns</a></li>
                                            <li><a href="datatable_extension_fixed_header.html">Fixed header</a></li>
                                            <li><a href="datatable_extension_autofill.html">Auto fill</a></li>
                                            <li><a href="datatable_extension_key_table.html">Key table</a></li>
                                            <li><a href="datatable_extension_scroller.html">Scroller</a></li>
                                            <li><a href="datatable_extension_select.html">Select</a></li>
                                            <li>
                                                <a href="#">Buttons</a>
                                                <ul>
                                                    <li><a href="datatable_extension_buttons_init.html">Initialization</a></li>
                                                    <li><a href="datatable_extension_buttons_flash.html">Flash buttons</a></li>
                                                    <li><a href="datatable_extension_buttons_print.html">Print buttons</a></li>
                                                    <li><a href="datatable_extension_buttons_html5.html">HTML5 buttons</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="datatable_extension_colvis.html">Columns visibility</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-file-spreadsheet"></i> Handsontable</a>
                                        <ul>
                                            <li><a href="handsontable_basic.html">Basic configuration</a></li>
                                            <li><a href="handsontable_advanced.html">Advanced setup</a></li>
                                            <li><a href="handsontable_cols.html">Column features</a></li>
                                            <li><a href="handsontable_cells.html">Cell features</a></li>
                                            <li><a href="handsontable_types.html">Basic cell types</a></li>
                                            <li><a href="handsontable_custom_checks.html">Custom &amp; checkboxes</a></li>
                                            <li><a href="handsontable_ac_password.html">Autocomplete &amp; password</a></li>
                                            <li><a href="handsontable_search.html">Search</a></li>
                                            <li><a href="handsontable_context.html">Context menu</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-versions"></i> Responsive options</a>
                                        <ul>
                                            <li><a href="table_responsive.html">Responsive basic tables</a></li>
                                            <li><a href="datatable_responsive.html">Responsive data tables</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdown mega-menu mega-menu-wide">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-stars position-left"></i> Features <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Main content</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-stack2"></i> Page layouts</a>
                                        <ul>
                                            <li><a href="layout_navbar_main_fixed.html">Fixed main navbar</a></li>
                                            <li><a href="layout_navbar_secondary_fixed.html">Fixed secondary navbar</a></li>
                                            <li><a href="layout_navbar_main_hideable.html">Hideable main navbar</a></li>
                                            <li><a href="layout_navbar_secondary_hideable.html">Hideable secondary navbar</a></li>
                                            <li><a href="layout_footer_fixed.html">Fixed footer</a></li>
                                            <li><a href="layout_sidebar_sticky_custom.html">Sticky sidebar (custom scroll)</a></li>
                                            <li><a href="layout_sidebar_sticky_native.html">Sticky sidebar (native scroll)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-align-center-horizontal"></i> Fixed width</a>
                                        <ul>
                                            <li><a href="boxed_full.html">Boxed full width</a></li>
                                            <li><a href="boxed_default.html">Boxed with default sidebar</a></li>
                                            <li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-copy"></i> Layouts</a>
                                        <ul>
                                            <li><a href="http://demo.interface.club/limitless/layout_1/LTR/default/index.html" id="layout1">Layout 1</a></li>
                                            <li><a href="http://demo.interface.club/limitless/layout_2/LTR/default/index.html" id="layout2">Layout 2</a></li>
                                            <li><a href="http://demo.interface.club/limitless/layout_3/LTR/default/index.html" id="layout3">Layout 3</a></li>
                                            <li><a href="index-2.html" id="layout4">Layout 4 <span class="label bg-warning-400">Current</span></a></li>
                                            <li><a href="http://demo.interface.club/limitless/layout_5/LTR/default/index.html" id="layout5">Layout 5</a></li>
                                            <li class="disabled"><a href="http://demo.interface.club/limitless/layout_4/layout_6/LTR/default/index.html" id="layout6">Layout 6 <span class="label bg-slate-300">Coming soon</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-droplet2"></i> Color system</a>
                                        <ul>
                                            <li><a href="colors_primary.html">Primary palette</a></li>
                                            <li><a href="colors_danger.html">Danger palette</a></li>
                                            <li><a href="colors_success.html">Success palette</a></li>
                                            <li><a href="colors_warning.html">Warning palette</a></li>
                                            <li><a href="colors_info.html">Info palette</a></li>
                                            <li class="divider"></li>
                                            <li><a href="colors_pink.html">Pink palette</a></li>
                                            <li><a href="colors_violet.html">Violet palette</a></li>
                                            <li><a href="colors_purple.html">Purple palette</a></li>
                                            <li><a href="colors_indigo.html">Indigo palette</a></li>
                                            <li><a href="colors_blue.html">Blue palette</a></li>
                                            <li><a href="colors_teal.html">Teal palette</a></li>
                                            <li><a href="colors_green.html">Green palette</a></li>
                                            <li><a href="colors_orange.html">Orange palette</a></li>
                                            <li><a href="colors_brown.html">Brown palette</a></li>
                                            <li><a href="colors_grey.html">Grey palette</a></li>
                                            <li><a href="colors_slate.html">Slate palette</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="http://demo.interface.club/limitless/layout_4/RTL/default/index.html"><i class="icon-width"></i> RTL version</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Layout</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-indent-decrease2"></i> Sidebars</a>
                                        <ul>
                                            <li><a href="sidebar_default_collapse.html">Default collapsible</a></li>
                                            <li><a href="sidebar_default_hide.html">Default hideable</a></li>
                                            <li><a href="sidebar_mini_collapse.html">Mini collapsible</a></li>
                                            <li><a href="sidebar_mini_hide.html">Mini hideable</a></li>
                                            <li>
                                                <a href="#">Dual sidebar</a>
                                                <ul>
                                                    <li><a href="sidebar_dual.html">Dual sidebar</a></li>
                                                    <li><a href="sidebar_dual_double_collapse.html">Dual double collapse</a></li>
                                                    <li><a href="sidebar_dual_double_hide.html">Dual double hide</a></li>
                                                    <li><a href="sidebar_dual_swap.html">Swap sidebars</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Double sidebar</a>
                                                <ul>
                                                    <li><a href="sidebar_double_collapse.html">Collapse main sidebar</a></li>
                                                    <li><a href="sidebar_double_hide.html">Hide main sidebar</a></li>
                                                    <li><a href="sidebar_double_fix_default.html">Fix default width</a></li>
                                                    <li><a href="sidebar_double_fix_mini.html">Fix mini width</a></li>
                                                    <li><a href="sidebar_double_visible.html">Opposite sidebar visible</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="sidebar_categories.html">Separate categories</a></li>
                                            <li><a href="sidebar_hidden.html">Hidden sidebar</a></li>
                                            <li><a href="sidebar_dark.html">Dark sidebar</a></li>
                                            <li><a href="sidebar_components.html">Sidebar components</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-sort"></i> Vertical navigation</a>
                                        <ul>
                                            <li><a href="navigation_vertical_collapsible.html">Collapsible menu</a></li>
                                            <li><a href="navigation_vertical_accordion.html">Accordion menu</a></li>
                                            <li><a href="navigation_vertical_sizing.html">Navigation sizing</a></li>
                                            <li><a href="navigation_vertical_bordered.html">Bordered navigation</a></li>
                                            <li><a href="navigation_vertical_right_icons.html">Right icons</a></li>
                                            <li><a href="navigation_vertical_labels_badges.html">Labels and badges</a></li>
                                            <li><a href="navigation_vertical_disabled.html">Disabled navigation links</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-transmission"></i> Horizontal navigation</a>
                                        <ul>
                                            <li><a href="navigation_horizontal_click.html">Submenu on click</a></li>
                                            <li><a href="navigation_horizontal_hover.html">Submenu on hover</a></li>
                                            <li><a href="navigation_horizontal_elements.html">With custom elements</a></li>
                                            <li><a href="navigation_horizontal_tabs.html">Tabbed navigation</a></li>
                                            <li><a href="navigation_horizontal_disabled.html">Disabled navigation links</a></li>
                                            <li><a href="navigation_horizontal_mega.html">Horizontal mega menu</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-paragraph-justify3"></i> Navbars</a>
                                        <ul>
                                            <li><a href="navbar_single.html">Single navbar</a></li>
                                            <li>
                                                <a href="#">Multiple navbars</a>
                                                <ul>
                                                    <li><a href="navbar_multiple_navbar_navbar.html">Navbar + navbar</a></li>
                                                    <li><a href="navbar_multiple_header_navbar.html">Header + navbar</a></li>
                                                    <li><a href="navbar_multiple_navbar_content.html">Navbar + content</a></li>
                                                    <li><a href="navbar_multiple_top_bottom.html">Top + bottom</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="navbar_colors.html">Color options</a></li>
                                            <li><a href="navbar_sizes.html">Sizing options</a></li>
                                            <li><a href="navbar_hideable.html">Hide on scroll</a></li>
                                            <li><a href="navbar_components.html">Navbar components</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-tree5"></i> Menu levels</a>
                                        <ul>
                                            <li><a href="#"><i class="icon-IE"></i> Second level</a></li>
                                            <li>
                                                <a href="#"><i class="icon-firefox"></i> Second level with child</a>
                                                <ul>
                                                    <li><a href="#"><i class="icon-android"></i> Third level</a></li>
                                                    <li>
                                                        <a href="#"><i class="icon-apple2"></i> Third level with child</a>
                                                        <ul>
                                                            <li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
                                                            <li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><i class="icon-windows"></i> Third level</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Data visualization</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-graph"></i> Echarts library</a>
                                        <ul>
                                            <li><a href="echarts_lines_areas.html">Lines and areas</a></li>
                                            <li><a href="echarts_columns_waterfalls.html">Columns and waterfalls</a></li>
                                            <li><a href="echarts_bars_tornados.html">Bars and tornados</a></li>
                                            <li><a href="echarts_scatter.html">Scatter charts</a></li>
                                            <li><a href="echarts_pies_donuts.html">Pies and donuts</a></li>
                                            <li><a href="echarts_funnels_chords.html">Funnels and chords</a></li>
                                            <li><a href="echarts_candlesticks_others.html">Candlesticks and others</a></li>
                                            <li><a href="echarts_combinations.html">Chart combinations</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-statistics"></i> D3 library</a>
                                        <ul>
                                            <li><a href="d3_lines_basic.html">Simple lines</a></li>
                                            <li><a href="d3_lines_advanced.html">Advanced lines</a></li>
                                            <li><a href="d3_bars_basic.html">Simple bars</a></li>
                                            <li><a href="d3_bars_advanced.html">Advanced bars</a></li>
                                            <li><a href="d3_pies.html">Pie charts</a></li>
                                            <li><a href="d3_circle_diagrams.html">Circle diagrams</a></li>
                                            <li><a href="d3_tree.html">Tree layout</a></li>
                                            <li><a href="d3_other.html">Other charts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-stats-dots"></i> Dimple library</a>
                                        <ul>
                                            <li>
                                                <a href="#">Line charts</a>
                                                <ul>
                                                    <li><a href="dimple_lines_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_lines_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Bar charts</a>
                                                <ul>
                                                    <li><a href="dimple_bars_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_bars_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Area charts</a>
                                                <ul>
                                                    <li><a href="dimple_area_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_area_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Step charts</a>
                                                <ul>
                                                    <li><a href="dimple_step_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_step_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="dimple_pies.html">Pie charts</a></li>
                                            <li><a href="dimple_rings.html">Ring charts</a></li>
                                            <li><a href="dimple_scatter.html">Scatter charts</a></li>
                                            <li><a href="dimple_bubble.html">Bubble charts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-stats-bars"></i> C3 library</a>
                                        <ul>
                                            <li><a href="c3_lines_areas.html">Lines and areas</a></li>
                                            <li><a href="c3_bars_pies.html">Bars and pies</a></li>
                                            <li><a href="c3_advanced.html">Advanced examples</a></li>
                                            <li><a href="c3_axis.html">Chart axis</a></li>
                                            <li><a href="c3_grid.html">Grid options</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-google"></i> Google visualization</a>
                                        <ul>
                                            <li><a href="google_lines.html">Line charts</a></li>
                                            <li><a href="google_bars.html">Bar charts</a></li>
                                            <li><a href="google_pies.html">Pie charts</a></li>
                                            <li><a href="google_scatter_bubble.html">Bubble &amp; scatter charts</a></li>
                                            <li><a href="google_other.html">Other charts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Extras</span>
                                <ul class="menu-list">
                                    <li><a href="animations_css3.html"><i class="icon-spinner3 spinner position-left"></i> CSS3 animations</a></li>
                                    <li>
                                        <a href="#"><i class="icon-spinner10 spinner position-left"></i> Velocity animations</a>
                                        <ul>
                                            <li><a href="animations_velocity_basic.html">Basic usage</a></li>
                                            <li><a href="animations_velocity_ui.html">UI pack effects</a></li>
                                            <li><a href="animations_velocity_examples.html">Advanced examples</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-map5"></i> Maps integration</a>
                                        <ul>
                                            <li>
                                                <a href="#">Google maps</a>
                                                <ul>
                                                    <li><a href="maps_google_basic.html">Basics</a></li>
                                                    <li><a href="maps_google_controls.html">Controls</a></li>
                                                    <li><a href="maps_google_markers.html">Markers</a></li>
                                                    <li><a href="maps_google_drawings.html">Map drawings</a></li>
                                                    <li><a href="maps_google_layers.html">Layers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="maps_vector.html">Vector maps</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-magazine"></i> Timelines</a>
                                        <ul>
                                            <li><a href="timelines_left.html">Left timeline</a></li>
                                            <li><a href="timelines_right.html">Right timeline</a></li>
                                            <li><a href="timelines_center.html">Centered timeline</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-thumbs-up2 position-left"></i> Icons</a>
                                        <ul>
                                            <li><a href="icons_glyphicons.html">Glyphicons</a></li>
                                            <li><a href="icons_icomoon.html">Icomoon</a></li>
                                            <li><a href="icons_fontawesome.html">Font awesome</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group position-left"></i> Page kits <span class="caret"></span>
                </a>

                <ul class="dropdown-menu width-250">
                    <li class="dropdown-header">General pages</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-task"></i> Blog</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="blog_classic_v.html">Classic vertical</a></li>
                            <li><a href="blog_classic_h.html">Classic horizontal</a></li>
                            <li><a href="blog_grid.html">Grid</a></li>
                            <li><a href="blog_single.html">Single post</a></li>
                            <li class="divider"></li>
                            <li><a href="blog_sidebar_left.html">Left sidebar</a></li>
                            <li><a href="blog_sidebar_right.html">Right sidebar</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-images2"></i> Gallery</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="gallery_grid.html">Media grid</a></li>
                            <li><a href="gallery_titles.html">Media with titles</a></li>
                            <li><a href="gallery_description.html">Media with description</a></li>
                            <li><a href="gallery_library.html">Media library</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-grid6"></i> Others</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="general_feed.html">Feed</a></li>
                            <li><a href="general_widgets_content.html">Content widgets</a></li>
                            <li><a href="general_widgets_stats.html">Statistics widgets</a></li>
                            <li><a href="general_embeds.html">Embeds</a></li>
                            <li><a href="general_faq.html">FAQ page</a></li>
                            <li><a href="general_knowledgebase.html">Knowledgebase</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-header">Service pages</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-cash3"></i> Invoicing</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="invoice_template.html">Invoice template</a></li>
                            <li><a href="invoice_grid.html">Invoice grid</a></li>
                            <li><a href="invoice_archive.html">Invoice archive</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-user-plus"></i> Authentication</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Basic</li>
                            <li><a href="login_simple.html">Simple login</a></li>
                            <li><a href="login_advanced.html">More login info</a></li>
                            <li><a href="login_registration.html">Simple registration</a></li>
                            <li><a href="login_registration_advanced.html">More registration info</a></li>
                            <li><a href="login_validation.html">With validation</a></li>
                            <li><a href="login_tabbed.html">Tabbed form</a></li>
                            <li><a href="login_modals.html">Inside modals</a></li>
                            <li class="dropdown-header highlight">Service</li>
                            <li><a href="login_unlock.html">Unlock user</a></li>
                            <li><a href="login_password_recover.html">Reset password</a></li>
                            <li class="dropdown-header highlight">Other</li>
                            <li><a href="login_hide_navbar.html">Hide navbar</a></li>
                            <li><a href="login_transparent.html">Transparent box</a></li>
                            <li><a href="login_background.html">Background option</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-warning"></i> Error pages</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="error_403.html">Error 403</a></li>
                            <li><a href="error_404.html">Error 404</a></li>
                            <li><a href="error_405.html">Error 405</a></li>
                            <li><a href="error_500.html">Error 500</a></li>
                            <li><a href="error_503.html">Error 503</a></li>
                            <li><a href="error_offline.html">Offline page</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-grid6"></i> Others</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="service_sitemap.html">Sitemap</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-header">User pages</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-profile"></i> Profile</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="user_pages_profile.html">Simple profile</a></li>
                            <li><a href="user_pages_profile_tabbed.html">Tabbed profile</a></li>
                            <li><a href="user_pages_profile_cover.html">Profile with cover</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-grid6"></i> Others</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="user_pages_cards.html">User cards</a></li>
                            <li><a href="user_pages_list.html">User list</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-header">Apps</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-task"></i> Task manager</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="task_manager_grid.html">Task grid</a></li>
                            <li><a href="task_manager_list.html">Task list</a></li>
                            <li><a href="task_manager_detailed.html">Task detailed</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-search4"></i> Search</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Basic</li>
                            <li><a href="search_basic.html">Basic search results</a></li>
                            <li><a href="search_users.html">User search results</a></li>
                            <li class="dropdown-header highlight">Media</li>
                            <li><a href="search_images.html">Image search results</a></li>
                            <li><a href="search_videos.html">Video search results</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-envelop2"></i> Inbox</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Mail</li>
                            <li><a href="mail_list.html">Mail list</a></li>
                            <li><a href="mail_read.html">Read mail</a></li>
                            <li><a href="mail_write.html">Write mail</a></li>
                            <li class="dropdown-header highlight">Chats</li>
                            <li><a href="chat_layouts.html">Chat layouts</a></li>
                            <li><a href="chat_options.html">Chat options</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-user-tie"></i> Job search</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="job_list_cards.html">Cards view</a></li>
                            <li><a href="job_list_panel.html">Panel view</a></li>
                            <li><a href="job_detailed.html">Job detailed</a></li>
                            <li><a href="job_apply.html">Apply</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-graduation"></i> Learning</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="learning_list.html">List view</a></li>
                            <li><a href="learning_grid.html">Grid view</a></li>
                            <li><a href="learning_detailed.html">Detailed course</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-cart2"></i> Ecommerce set</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="ecommerce_product_list.html">Product list</a></li>
                            <li><a href="ecommerce_product_grid.html">Product grid</a></li>
                            <li><a href="ecommerce_orders_history.html">Orders history</a></li>
                            <li><a href="ecommerce_customers.html">Customers</a></li>
                            <li><a href="ecommerce_pricing.html">Pricing tables</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-strategy position-left"></i> Starter kit <span class="caret"></span>
                </a>

                <ul class="dropdown-menu width-200">
                    <li class="dropdown-header">Basic layouts</li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid2"></i> Columns</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="starters/1_col.html">One column</a></li>
                            <li><a href="starters/2_col.html">Two columns</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">Three columns</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header highlight">Sidebar position</li>
                                    <li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
                                    <li><a href="starters/3_col_double.html">Double sidebars</a></li>
                                </ul>
                            </li>
                            <li><a href="starters/4_col.html">Four columns</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify3"></i> Navbars</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header highlight">Fixed navbars</li>
                            <li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
                            <li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
                            <li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-header">Optional layouts</li>
                    <li><a href="starters/layout_boxed.html"><i class="icon-align-center-horizontal"></i> Fixed width</a></li>
                    <li><a href="starters/layout_sidebar_sticky.html"><i class="icon-flip-vertical3"></i> Sticky sidebar</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="changelog.html">
                    <i class="icon-history position-left"></i>
                    Changelog
                    <span class="label label-inline position-right bg-success-400">1.6</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <span class="visible-xs-inline-block position-right">Share</span>
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /second navbar -->


<!-- Page header -->
{{--<div class="page-header">--}}
    {{--<div class="page-header-content">--}}
        {{--<div class="page-title">--}}
            {{--<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Components</span> - Modal Dialogs</h4>--}}

            {{--<ul class="breadcrumb breadcrumb-caret position-right">--}}
                {{--<li><a href="index-2.html">Home</a></li>--}}
                {{--<li><a href="components_modals.html">Components</a></li>--}}
                {{--<li class="active">Modal dialogs</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<div class="heading-elements">--}}
            {{--<div class="heading-btn-group">--}}
                {{--<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>--}}
                {{--<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>--}}
                {{--<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="page-header">
    <div class="page-header page-header-default" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">


        <div class="page-header-content">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 position-left"></i>
                    <span class="text-semibold">Components</span> - Breadcrumb
                    <small class="display-block">Primary <a href="colors_primary.html">color theme</a> with single button</small>
                </h5>
            </div>
        </div>
        <div class="breadcrumb-line bg-primary">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="#">Current</a></li>
                <li class="active">Location</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right bg-primary">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated line</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- /page header -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Basic modals -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Modal dialogs</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    Modal dialog is a small window that communicates information to the user and prompt them for a response. Dialog boxes are classified as <code>"modal"</code> or <code>"modeless"</code>, depending on whether or not they block interaction with the page that initiated the dialog. Table below contains basic modal dialog examples. Click <code>Launch</code> button to run modal examples.
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th colspan="3" class="active">Basic modals</th>
                        </tr>
                        <tr>
                            <td style="width: 20%;">Default modal dialog</td>
                            <td style="width: 20%;"><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_default">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Basic modal dialog with <code>header</code>, <code>body</code> and <code>footer</code> areas. Default examples displays: header - contains a title and a close button; footer - contains buttons and body contains static or dynamic content</td>
                        </tr>
                        <tr>
                            <td>Modal with icons</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_iconified">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal with icons added to the specified elements: heading title, footer control buttons and text inside modal body</td>
                        </tr>
                        <tr>
                            <td>Disable backdrop</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_backdrop">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Disabled backdrop. Disable backdrop element using <code>data-backdrop="false"</code> or alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click</td>
                        </tr>
                        <tr>
                            <td>Disable keyboard interaction</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_keyboard">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Disabled keyboard interaction. If <code>keyboard</code> option is set to <code>true</code> (default), the modal can be closed when escape key is pressed</td>
                        </tr>
                        <tr>
                            <td>Disable animation</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_animation">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Disabled animation. For modals that simply appear rather than fade in to view, remove the <code>.fade</code> class from your modal markup</td>
                        </tr>
                        <tr>
                            <td>Remote source</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_remote">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Default Bootstrap's remote source option replacement using jquery <code>.load()</code>. As suggested by Bootstrap dev team</td>
                        </tr>

                        <tr class="border-double">
                            <th colspan="3" class="active">Modal sizing</th>
                        </tr>
                        <tr>
                            <td>Mini size modal</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_mini">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal in mini size. Mini modal width is <code>300px</code>. To use, add <code>modal-xs</code> class to <code>.modal-dialog</code> container</td>
                        </tr>
                        <tr>
                            <td>Small size modal</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_small">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal in small size. Small modal width is <code>400px</code>. To use, add <code>modal-sm</code> class to <code>.modal-dialog</code> container</td>
                        </tr>
                        <tr>
                            <td>Default size modal</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_default">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal in default size. Default modal width is <code>600px</code>. Since this is a default size, modal markup doesn't require any additional sizing classes</td>
                        </tr>
                        <tr>
                            <td>Large size modal</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_large">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal in large size. Large modal width is <code>900px</code>. To use, add <code>modal-lg</code> class to <code>.modal-dialog</code> container</td>
                        </tr>
                        <tr>
                            <td>Full size modal</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_full">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal in full width size. This modal has <code>94%</code> width of the window. To use, add <code>modal-full</code> class to <code>.modal-dialog</code> container</td>
                        </tr>
                        <tr class="border-double">
                            <th colspan="3" class="active">Optional modal colors</th>
                        </tr>
                        <tr>
                            <td>Default modal theme</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_default">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Default color theme. All areas of this modal dialog have <code>white</code> background color. Doesn't require any additional contextual classes</td>
                        </tr>
                        <tr>
                            <td>Primary modal header</td>
                            <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_theme_primary">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Primary modal. To use, add <code>.bg-primary</code> class to the <code>.modal-header</code> container</td>
                        </tr>
                        <tr>
                            <td>Danger modal header</td>
                            <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_theme_danger">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Danger modal. To use, add <code>.bg-danger</code> class to the <code>.modal-header</code> container</td>
                        </tr>
                        <tr>
                            <td>Success modal header</td>
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_theme_success">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Success modal. To use, add <code>.bg-success</code> class to the <code>.modal-header</code> container</td>
                        </tr>
                        <tr>
                            <td>Warning modal header</td>
                            <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_theme_warning">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Warning modal. To use, add <code>.bg-warning</code> class to the <code>.modal-header</code> container</td>
                        </tr>
                        <tr>
                            <td>Info modal header</td>
                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_theme_info">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Info modal. To use, add <code>.bg-info</code> class to the <code>.modal-header</code> container</td>
                        </tr>
                        <tr>
                            <td>Custom modal header color</td>
                            <td><button type="button" class="btn bg-brown btn-sm" data-toggle="modal" data-target="#modal_theme_custom">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal with <code>custom</code> color added to the modal header. To use, add any <a href="colors_primary.html">color class</a> from the color system to the <code>.modal-header</code> container</td>
                        </tr>
                        <tr>
                            <td>Custom modal background color</td>
                            <td><button type="button" class="btn bg-teal-300 btn-sm" data-toggle="modal" data-target="#modal_theme_bg_custom">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal dialog with <code>solid</code> custom background color. To use, add any <a href="colors_primary.html">color class</a> from the color system to the <code>.modal-content</code> container. Additionaly, you can also add a custom background color to the modal header</td>
                        </tr>

                        <tr class="border-double">
                            <th colspan="3" class="active">Form components</th>
                        </tr>
                        <tr>
                            <td>Vertical form</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_vertical">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal with default vertical form layout and responsive grid. Forms must be placed outside of <code>.modal-body</code> container to prevent extra horizontal padding</td>
                        </tr>
                        <tr>
                            <td>Horizontal form</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_horizontal">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal with horizontal form layout. It does also support responsive grid, but in this case it will look best in wider modals</td>
                        </tr>
                        <tr>
                            <td>Inline form</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_inline">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal with with a simple <code>inline</code> form layout</td>
                        </tr>

                        <tr class="border-double">
                            <th colspan="3" class="active">Heading options</th>
                        </tr>
                        <tr>
                            <td>Modal with H1 heading</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_h1">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title in <code>H1</code> size. In all heading sizes, vertical position of a <code>close</code> button will be automatically adjusted to the middle of the modal header</td>
                        </tr>
                        <tr>
                            <td>Modal with H2 heading</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_h2">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title in <code>H2</code> size</td>
                        </tr>
                        <tr>
                            <td>Modal with H3 heading</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_h3">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title in <code>H3</code> size</td>
                        </tr>
                        <tr>
                            <td>Modal with H4 heading</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_h4">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title in <code>H4</code> size</td>
                        </tr>
                        <tr>
                            <td>Modal with H5 heading</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_h5">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title in <code>H5</code> size</td>
                        </tr>
                        <tr>
                            <td>Modal with H6 heading</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_h6">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title in <code>H6</code> size</td>
                        </tr>
                        <tr>
                            <td>Modal with basic title</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_title_basic">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title could be either a standard heading or any other component, but make sure you have included <code>.modal-title</code> class to it</td>
                        </tr>
                        <tr>
                            <td>Modal with subtitle</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_subtitle">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Modal title <code>subtitle</code>. This can be either inline or block. To display a subtitle in one line with the title, remove <code>.display-block</code> class from it</td>
                        </tr>

                        <tr class="border-double">
                            <th colspan="3" class="active">Modal events</th>
                        </tr>
                        <tr>
                            <td>onShow event</td>
                            <td><button type="button" class="btn bg-teal btn-sm" data-toggle="modal" data-target="#modal_default" id="onshow_callback">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
                        </tr>
                        <tr>
                            <td>onShown event</td>
                            <td><button type="button" class="btn bg-teal btn-sm" data-toggle="modal" data-target="#modal_form_vertical" id="onshown_callback">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
                        </tr>
                        <tr>
                            <td>onHide event</td>
                            <td><button type="button" class="btn bg-teal btn-sm" data-toggle="modal" data-target="#modal_subtitle" id="onhide_callback">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>This event is fired immediately when the <code>hide</code> instance method has been called</td>
                        </tr>
                        <tr>
                            <td>onHidden event</td>
                            <td><button type="button" class="btn bg-teal btn-sm" data-toggle="modal" data-target="#modal_theme_success" id="onhidden_callback">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete)</td>
                        </tr>

                        <tr class="border-double">
                            <th colspan="3" class="active">Programmatic dialog boxes</th>
                        </tr>
                        <tr>
                            <td>Alert dialog</td>
                            <td><button type="button" class="btn btn-primary btn-sm" id="alert">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Example of an <code>alert</code> dialog replacement with default Bootstrap modals</td>
                        </tr>
                        <tr>
                            <td>Confirm dialog</td>
                            <td><button type="button" class="btn btn-primary btn-sm" id="confirm">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Example of a <code>confirmation</code> dialog replacement with default Bootstrap modals including callback</td>
                        </tr>
                        <tr>
                            <td>Prompt dialog</td>
                            <td><button type="button" class="btn btn-primary btn-sm" id="prompt">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Example of a <code>prompt</code> dialog replacement with default Bootstrap modals including callback</td>
                        </tr>
                        <tr>
                            <td>Prompt with default value</td>
                            <td><button type="button" class="btn btn-primary btn-sm" id="prompt_value">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Example of a <code>prompt</code> dialog replacement with default value</td>
                        </tr>
                        <tr>
                            <td>Custom bootbox dialog</td>
                            <td><button type="button" class="btn btn-primary btn-sm" id="bootbox_custom">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Example of a custom bootbox dialog with multiple buttons and callbacks</td>
                        </tr>
                        <tr>
                            <td>Dialog with form</td>
                            <td><button type="button" class="btn btn-primary btn-sm" id="bootbox_form">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Example of a custom bootbox dialog with simple form and callbacks</td>
                        </tr>

                        <tr class="border-double">
                            <th colspan="3" class="active">Sweet alerts</th>
                        </tr>
                        <tr>
                            <td>Basic alert</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_basic">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Basic sweet alert example with title only</td>
                        </tr>
                        <tr>
                            <td>Title with a text</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_title_text">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Display additional text below the title</td>
                        </tr>
                        <tr>
                            <td>Auto closer</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_auto_closer">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Close the alert after specified amount of time using <code>timer</code> option</td>
                        </tr>
                        <tr>
                            <td>Prompt dialog</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_prompt">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>A replacement for the <code>prompt</code> function</td>
                        </tr>
                        <tr>
                            <td>With a loader</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_loader">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Display a loading icon while working on request</td>
                        </tr>
                        <tr>
                            <td>With HTML message</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_html">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Add support of HTML in alert message</td>
                        </tr>
                        <tr>
                            <td>Success message</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_success">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Success alert using <code>type: success</code> option</td>
                        </tr>
                        <tr>
                            <td>Error message</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_error">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Error alert using <code>type: error</code> option</td>
                        </tr>
                        <tr>
                            <td>Warning message</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_warning">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Warning alert using <code>type: warning</code> option</td>
                        </tr>
                        <tr>
                            <td>Info message</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_info">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Info alert using <code>type: info</code> option</td>
                        </tr>
                        <tr>
                            <td>Combine messages</td>
                            <td><button type="button" class="btn btn-danger btn-sm" id="sweet_combine">Launch <i class="icon-play3 position-right"></i></button></td>
                            <td>Message with a function attached to the "Confirm" and "Cancel" buttons</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /basic modals -->


            <!-- Basic modal -->
            <div id="modal_default" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Basic modal</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->


            <!-- Iconified modal -->
            <div id="modal_iconified" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Modal with icons</h5>
                        </div>

                        <div class="modal-body">
                            <div class="alert alert-info alert-styled-left text-blue-800 content-group">
                                <span class="text-semibold">Here we go!</span> Example of an alert inside modal.
                                <button type="button" class="close" data-dismiss="alert">×</button>
                            </div>

                            <h6 class="text-semibold"><i class="icon-law position-left"></i> Sample heading with icon</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                            <hr>

                            <p><i class="icon-mention position-left"></i> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
                            <button class="btn btn-primary"><i class="icon-check"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /iconified modal -->


            <!-- Disabled backdrop -->
            <div id="modal_backdrop" class="modal fade" data-backdrop="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Disable backdrop</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /disabled backdrop -->


            <!-- Disabled keyboard interaction -->
            <div id="modal_keyboard" class="modal fade" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Disable keyboard interaction</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /disabled keyboard interaction -->


            <!-- Disabled animation -->
            <div id="modal_animation" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Disable animation</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /disabled animation -->



            <!-- Remote source -->
            <div id="modal_remote" class="modal">
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Remote source</h5>
                        </div>

                        <div class="modal-body"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /remote source -->


            <!-- Mini modal -->
            <div id="modal_mini" class="modal fade">
                <div class="modal-dialog modal-xs">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Mini modal</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /mini modal -->


            <!-- Small modal -->
            <div id="modal_small" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Small modal</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /small modal -->


            <!-- Large modal -->
            <div id="modal_large" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Large modal</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /large modal -->


            <!-- Full width modal -->
            <div id="modal_full" class="modal fade">
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Full width modal</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /full width modal -->



            <!-- Primary modal -->
            <div id="modal_theme_primary" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Primary header</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /primary modal -->


            <!-- Danger modal -->
            <div id="modal_theme_danger" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Danger header</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /default modal -->


            <!-- Success modal -->
            <div id="modal_theme_success" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Success header</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /success modal -->


            <!-- Warning modal -->
            <div id="modal_theme_warning" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Warning header</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /warning modal -->


            <!-- Info modal -->
            <div id="modal_theme_info" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Info header</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /info modal -->


            <!-- Custom header color -->
            <div id="modal_theme_custom" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-brown">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Custom header color</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-brown">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /custom header color -->


            <!-- Custom background color -->
            <div id="modal_theme_bg_custom" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content bg-teal-300">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Custom background color</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link text-white" data-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-teal-600">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /custom background color -->



            <!-- Vertical form modal -->
            <div id="modal_form_vertical" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Vertical form</h5>
                        </div>

                        <form action="#">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First name</label>
                                            <input type="text" placeholder="Eugene" class="form-control">
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Last name</label>
                                            <input type="text" placeholder="Kopyov" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Address line 1</label>
                                            <input type="text" placeholder="Ring street 12" class="form-control">
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Address line 2</label>
                                            <input type="text" placeholder="building D, flat #67" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>City</label>
                                            <input type="text" placeholder="Munich" class="form-control">
                                        </div>

                                        <div class="col-sm-4">
                                            <label>State/Province</label>
                                            <input type="text" placeholder="Bayern" class="form-control">
                                        </div>

                                        <div class="col-sm-4">
                                            <label>ZIP code</label>
                                            <input type="text" placeholder="1031" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                            <span class="help-block">name@domain.com</span>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Phone #</label>
                                            <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
                                            <span class="help-block">+99-99-9999-9999</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /vertical form modal -->


            <!-- Horizontal form modal -->
            <div id="modal_form_horizontal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Horizontal form</h5>
                        </div>

                        <form action="#" class="form-horizontal">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-3">First name</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Eugene" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Last name</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Kopyov" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                        <span class="help-block">name@domain.com</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Phone #</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
                                        <span class="help-block">+99-99-9999-9999</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Address line 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Ring street 12, building D, flat #67" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Munich" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">State/Province</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Bayern" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">ZIP code</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="1031" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /horizontal form modal -->


            <!-- Inline form modal -->
            <div id="modal_form_inline" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title">Inline form</h5>
                        </div>

                        <form action="#" class="form-inline">
                            <div class="modal-body">
                                <div class="form-group has-feedback">
                                    <label>Username: </label>
                                    <input type="text" placeholder="Your username" class="form-control">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label>Password: </label>
                                    <input type="password" placeholder="Your password" class="form-control">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-primary">Sign me in <i class="icon-plus22"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /inline form modal -->



            <!-- Modal with h1 -->
            <div id="modal_h1" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">H1 heading title</h1>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with h1 -->


            <!-- Modal with h2 -->
            <div id="modal_h2" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">H2 heading title</h2>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with h2 -->


            <!-- Modal with h3 -->
            <div id="modal_h3" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">H3 heading title</h3>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with h3 -->


            <!-- Modal with h4 -->
            <div id="modal_h4" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">H4 heading title</h4>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with h4 -->


            <!-- Modal with h5 -->
            <div id="modal_h5" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">H5 heading title</h5>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with h5 -->


            <!-- Modal with h6 -->
            <div id="modal_h6" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">H6 heading title</h6>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with h6 -->


            <!-- Modal with basic title -->
            <div id="modal_title_basic" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <span class="text-semibold modal-title">Basic heading title</span>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with basic title -->


            <!-- Modal with subtitle -->
            <div id="modal_subtitle" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">This is a modal title</h5>
                            <span class="modal-subtitle display-block">And this is a subtitle</span>
                        </div>

                        <div class="modal-body">
                            <h6 class="text-semibold">Text in a modal</h6>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <hr>

                            <h6 class="text-semibold">Another paragraph</h6>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modal with subtitle -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->


<!-- Footer -->
<div class="footer text-muted">
    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
</div>
<!-- /footer -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_4/LTR/default/components_modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Apr 2018 07:01:39 GMT -->
</html>
