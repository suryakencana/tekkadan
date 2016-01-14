<?php

/* left_sider_bar.twig */
class __TwigTemplate_cb7767a6ba0361d19ecf7b7d3957adc5af9933313d42704217b287fdce9e8d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Londinium - premium responsive admin template by Eugene Kopyov</title>

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/londinium-theme.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">

    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/jquery-1.10.1.min.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/daterangepicker.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/moment.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/jgrowl.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/collapsible.min.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/application_blank.js\"></script>

</head>

<body class=\"sidebar-wide\">

<!-- Navbar -->
<div class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"navbar-header\">
        <a class=\"navbar-brand\" href=\"#\"><img src=\"images/logo.png\" alt=\"Londinium\"></a>
        <a class=\"sidebar-toggle\"><i class=\"icon-paragraph-justify2\"></i></a>
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-icons\">
            <span class=\"sr-only\">Toggle navbar</span>
            <i class=\"icon-grid3\"></i>
        </button>
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <i class=\"icon-paragraph-justify2\"></i>
        </button>
    </div>

    <ul class=\"nav navbar-nav navbar-right collapse\" id=\"navbar-icons\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-people\"></i>
                <span class=\"label label-default\">2</span>
            </a>
            <div class=\"popup dropdown-menu dropdown-menu-right\">
                <div class=\"popup-header\">
                    <a href=\"#\" class=\"pull-left\"><i class=\"icon-spinner7\"></i></a>
                    <span>Activity</span>
                    <a href=\"#\" class=\"pull-right\"><i class=\"icon-paragraph-justify\"></i></a>
                </div>
                <ul class=\"activity\">
                    <li>
                        <i class=\"icon-cart-checkout text-success\"></i>
                        <div>
                            <a href=\"#\">Eugene</a> ordered 2 copies of <a href=\"#\">OEM license</a>
                            <span>14 minutes ago</span>
                        </div>
                    </li>
                    <li>
                        <i class=\"icon-heart text-danger\"></i>
                        <div>
                            Your <a href=\"#\">latest post</a> was liked by <a href=\"#\">Audrey Mall</a>
                            <span>35 minutes ago</span>
                        </div>
                    </li>
                    <li>
                        <i class=\"icon-checkmark3 text-success\"></i>
                        <div>
                            Mail server was updated. See <a href=\"#\">changelog</a>
                            <span>About 2 hours ago</span>
                        </div>
                    </li>
                    <li>
                        <i class=\"icon-paragraph-justify2 text-warning\"></i>
                        <div>
                            There are <a href=\"#\">6 new tasks</a> waiting for you. Don't forget!
                            <span>About 3 hours ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paragraph-justify2\"></i>
                <span class=\"label label-default\">6</span>
            </a>
            <div class=\"popup dropdown-menu dropdown-menu-right\">
                <div class=\"popup-header\">
                    <a href=\"#\" class=\"pull-left\"><i class=\"icon-spinner7\"></i></a>
                    <span>Messages</span>
                    <a href=\"#\" class=\"pull-right\"><i class=\"icon-new-tab\"></i></a>
                </div>
                <ul class=\"popup-messages\">
                    <li class=\"unread\">
                        <a href=\"#\">
                            <img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
                            <strong>Eugene Kopyov <i class=\"icon-attachment2\"></i></strong>
                            <span>Aliquam interdum convallis massa...</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
                            <strong>Jason Goldsmith <i class=\"icon-attachment2\"></i></strong>
                            <span>Aliquam interdum convallis massa...</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
                            <strong>Angel Novator</strong>
                            <span>Aliquam interdum convallis massa...</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
                            <strong>Monica Bloomberg</strong>
                            <span>Aliquam interdum convallis massa...</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"http://placehold.it/300\" alt=\"\" class=\"user-face\">
                            <strong>Patrick Winsleur</strong>
                            <span>Aliquam interdum convallis massa...</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                <i class=\"icon-grid\"></i>
            </a>
            <div class=\"popup dropdown-menu dropdown-menu-right\">
                <div class=\"popup-header\">
                    <a href=\"#\" class=\"pull-left\"><i class=\"icon-spinner7\"></i></a>
                    <span>Tasks list</span>
                    <a href=\"#\" class=\"pull-right\"><i class=\"icon-new-tab\"></i></a>
                </div>
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Category</th>
                        <th class=\"text-center\">Priority</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class=\"status status-success item-before\"></span> <a href=\"#\">Frontpage fixes</a></td>
                        <td><span class=\"text-smaller text-semibold\">Bugs</span></td>
                        <td class=\"text-center\"><span class=\"label label-success\">87%</span></td>
                    </tr>
                    <tr>
                        <td><span class=\"status status-danger item-before\"></span> <a href=\"#\">CSS compilation</a></td>
                        <td><span class=\"text-smaller text-semibold\">Bugs</span></td>
                        <td class=\"text-center\"><span class=\"label label-danger\">18%</span></td>
                    </tr>
                    <tr>
                        <td><span class=\"status status-info item-before\"></span> <a href=\"#\">Responsive layout changes</a></td>
                        <td><span class=\"text-smaller text-semibold\">Layout</span></td>
                        <td class=\"text-center\"><span class=\"label label-info\">52%</span></td>
                    </tr>
                    <tr>
                        <td><span class=\"status status-success item-before\"></span> <a href=\"#\">Add categories filter</a></td>
                        <td><span class=\"text-smaller text-semibold\">Content</span></td>
                        <td class=\"text-center\"><span class=\"label label-success\">100%</span></td>
                    </tr>
                    <tr>
                        <td><span class=\"status status-success item-before\"></span> <a href=\"#\">Media grid padding issue</a></td>
                        <td><span class=\"text-smaller text-semibold\">Bugs</span></td>
                        <td class=\"text-center\"><span class=\"label label-success\">100%</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </li>

        <li class=\"user dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <img src=\"http://placehold.it/300\" alt=\"\">
                <span>Eugene Kopyov</span>
                <i class=\"caret\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right icons-right\">
                <li><a href=\"#\"><i class=\"icon-user\"></i> Profile</a></li>
                <li><a href=\"#\"><i class=\"icon-bubble4\"></i> Messages</a></li>
                <li><a href=\"#\"><i class=\"icon-cog\"></i> Settings</a></li>
                <li><a href=\"#\"><i class=\"icon-exit\"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- /navbar -->


<!-- Page container -->
<div class=\"page-container\">


<!-- Sidebar -->
<div class=\"sidebar collapse\">
    <div class=\"sidebar-content\">

        <!-- User dropdown -->
        <div class=\"user-menu dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <img src=\"http://placehold.it/300\" alt=\"\">
                <div class=\"user-info\">
                    Madison Gartner <span>Web Developer</span>
                </div>
            </a>
            <div class=\"popup dropdown-menu dropdown-menu-right\">
                <div class=\"thumbnail\">
                    <div class=\"thumb\">
                        <img alt=\"\" src=\"http://placehold.it/300\">
                        <div class=\"thumb-options\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-icon btn-success\"><i class=\"icon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-icon btn-success\"><i class=\"icon-remove\"></i></a>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>

                    <div class=\"caption text-center\">
                        <h6>Madison Gartner <small>Front end developer</small></h6>
                    </div>
                </div>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><i class=\"icon-pencil3 text-muted\"></i> My posts <span class=\"label label-success\">289</span></li>
                    <li class=\"list-group-item\"><i class=\"icon-people text-muted\"></i> Users online <span class=\"label label-danger\">892</span></li>
                    <li class=\"list-group-item\"><i class=\"icon-stats2 text-muted\"></i> Reports <span class=\"label label-primary\">92</span></li>
                    <li class=\"list-group-item\"><i class=\"icon-stack text-muted\"></i> Balance <h5 class=\"pull-right text-danger\">\$45.389</h5></li>
                </ul>
            </div>
        </div>
        <!-- /user dropdown -->


        <!-- Main navigation -->
        <ul class=\"navigation\">
            <li><a href=\"index.html\"><span>Dashboard</span> <i class=\"icon-screen2\"></i></a></li>
            <li class=\"active\">
                <a href=\"#\" class=\"expand\" id=\"second-level\"><span>Blank pages</span> <i class=\"icon-insert-template\"></i></a>
                <ul>
                    <li class=\"active\"><a href=\"blank_left_sidebar.html\">Left sidebar</a></li>
                    <li><a href=\"blank_right_sidebar.html\">Right sidebar</a></li>
                    <li><a href=\"blank_narrow_sidebar.html\">Narrow sidebar</a></li>
                    <li><a href=\"blank_collapsed_sidebar.html\">Collapsed sidebar</a></li>
                    <li><a href=\"blank_full_width.html\">Full width page</a></li>
                </ul>
            </li>
            <li>
                <a href=\"#\" class=\"expand\"><span>Navigation levels</span> <i class=\"icon-stack\"></i></a>
                <ul>
                    <li><a href=\"#\">Second level first item</a></li>
                    <li><a href=\"#\" class=\"expand\">Second level second item</a>
                        <ul>
                            <li><a href=\"#\">Third level first item</a></li>
                            <li><a href=\"#\">Third level second item</a></li>
                            <li><a href=\"#\" class=\"expand\">Third level third item</a>
                                <ul>
                                    <li><a href=\"#\">Fourth level first item</a></li>
                                    <li><a href=\"#\">Fourth level second item</a></li>
                                    <li><a href=\"#\">Fourth level third item</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Third level second item</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Second level third item</a></li>
                </ul>
            </li>
        </ul>
        <!-- /main navigation -->

    </div>
</div>
<!-- /sidebar -->


<!-- Page content -->
<div class=\"page-content\">


    <!-- Page header -->
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h3>Wide left sidebar <small>Wide left sidebar blank page</small></h3>
        </div>
        <div id=\"reportrange\" class=\"range\">
            <div class=\"visible-xs header-element-toggle\">
                <a class=\"btn btn-primary btn-icon\"><i class=\"icon-calendar\"></i></a>
            </div>
            <div class=\"date-range\"></div>
            <span class=\"label label-danger\">9</span>
        </div>
    </div>
    <!-- /page header -->


    <!-- Breadcrumbs line -->
    <div class=\"breadcrumb-line\">
        <ul class=\"breadcrumb\">
            <li><a href=\"index.html\">Home</a></li>
            <li><a href=\"blank_wide_left.html\">Blank pages</a></li>
            <li class=\"active\">Wide left sidebar</li>
        </ul>

        <div class=\"visible-xs breadcrumb-toggle\">
            <a class=\"btn btn-link btn-lg btn-icon\" data-toggle=\"collapse\" data-target=\".breadcrumb-buttons\"><i class=\"icon-menu2\"></i></a>
        </div>

        <ul class=\"breadcrumb-buttons collapse\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-search3\"></i> <span>Search</span> <b class=\"caret\"></b></a>
                <div class=\"popup dropdown-menu dropdown-menu-right\">
                    <div class=\"popup-header\">
                        <a href=\"#\" class=\"pull-left\"><i class=\"icon-paragraph-justify\"></i></a>
                        <span>Quick search</span>
                        <a href=\"#\" class=\"pull-right\"><i class=\"icon-new-tab\"></i></a>
                    </div>
                    <form action=\"#\" class=\"breadcrumb-search\">
                        <input type=\"text\" placeholder=\"Type and hit enter...\" name=\"search\" class=\"form-control autocomplete\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"search-option\" class=\"styled\" checked=\"checked\">
                                    Everywhere
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"search-option\" class=\"styled\">
                                    Invoices
                                </label>
                            </div>

                            <div class=\"col-xs-6\">
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"search-option\" class=\"styled\">
                                    Users
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"search-option\" class=\"styled\">
                                    Orders
                                </label>
                            </div>
                        </div>

                        <input type=\"submit\" class=\"btn btn-block btn-success\" value=\"Search\">
                    </form>
                </div>
            </li>

            <li class=\"language dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"images/flags/german.png\" alt=\"\"> <span>German</span> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu dropdown-menu-right icons-right\">
                    <li><a href=\"#\"><img src=\"images/flags/ukrainian.png\" alt=\"\"> Ukrainian</a></li>
                    <li class=\"active\"><a href=\"#\"><img src=\"images/flags/english.png\" alt=\"\"> English</a></li>
                    <li><a href=\"#\"><img src=\"images/flags/spanish.png\" alt=\"\"> Spanish</a></li>
                    <li><a href=\"#\"><img src=\"images/flags/german.png\" alt=\"\"> German</a></li>
                    <li><a href=\"#\"><img src=\"images/flags/hungarian.png\" alt=\"\"> Hungarian</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /breadcrumbs line -->


    <!-- Callout -->
    <div class=\"callout callout-danger fade in\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <h5>Wide left sidebar blank page</h5>
        <p>Page includes minium of required code and jquery files. Can be taken as a base for implementing Londinium to your app.</p>
    </div>
    <!-- /callout -->


    <!-- Default panel -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h6 class=\"panel-title\">Default panel</h6></div>
        <div class=\"panel-body\"><code>div class=\"panel panel-default\"</code></div>
    </div>
    <!-- /default panel -->


    <!-- Default table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h6 class=\"panel-title\"><i class=\"icon-table2\"></i> Default table</h6></div>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /default table -->


    <!-- Form components -->
    <form class=\"form-horizontal\" role=\"form\" action=\"#\">

        <!-- Basic inputs -->
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h6 class=\"panel-title\"><i class=\"icon-bubble4\"></i> Default form elements</h6></div>
            <div class=\"panel-body\">

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Default text input: </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Password: </label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" class=\"form-control\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Input with placeholder: </label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"placeholder\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Textarea: </label>
                    <div class=\"col-sm-10\">
                        <textarea rows=\"5\" cols=\"5\" class=\"form-control\" placeholder=\"Default textarea\"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <!-- /basic inputs -->

    </form>
    <!-- /form components -->


    <!-- Footer -->
    <div class=\"footer clearfix\">
        <div class=\"pull-left\">&copy; 2013. Londinium Admin Template by <a href=\"http://themeforest.net/user/Kopyov\">Eugene Kopyov</a></div>
        <div class=\"pull-right icons-group\">
            <a href=\"#\"><i class=\"icon-screen2\"></i></a>
            <a href=\"#\"><i class=\"icon-balance\"></i></a>
            <a href=\"#\"><i class=\"icon-cog3\"></i></a>
        </div>
    </div>
    <!-- /footer -->


</div>
<!-- /page content -->

</div>
<!-- /content -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "left_sider_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  69 => 22,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  47 => 15,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Londinium - premium responsive admin template by Eugene Kopyov</title>*/
/* */
/*     <link href="{{baseurl}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/londinium-theme.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/styles.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/icons.css" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">*/
/* */
/*     <script type="text/javascript" src="{{baseurl}}assets/js/jquery-1.10.1.min.js"></script>*/
/* */
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/daterangepicker.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/moment.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/jgrowl.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/collapsible.min.js"></script>*/
/* */
/*     <script type="text/javascript" src="{{baseurl}}assets/js/bootstrap.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/application_blank.js"></script>*/
/* */
/* </head>*/
/* */
/* <body class="sidebar-wide">*/
/* */
/* <!-- Navbar -->*/
/* <div class="navbar navbar-inverse" role="navigation">*/
/*     <div class="navbar-header">*/
/*         <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a>*/
/*         <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">*/
/*             <span class="sr-only">Toggle navbar</span>*/
/*             <i class="icon-grid3"></i>*/
/*         </button>*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <i class="icon-paragraph-justify2"></i>*/
/*         </button>*/
/*     </div>*/
/* */
/*     <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">*/
/*         <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                 <i class="icon-people"></i>*/
/*                 <span class="label label-default">2</span>*/
/*             </a>*/
/*             <div class="popup dropdown-menu dropdown-menu-right">*/
/*                 <div class="popup-header">*/
/*                     <a href="#" class="pull-left"><i class="icon-spinner7"></i></a>*/
/*                     <span>Activity</span>*/
/*                     <a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>*/
/*                 </div>*/
/*                 <ul class="activity">*/
/*                     <li>*/
/*                         <i class="icon-cart-checkout text-success"></i>*/
/*                         <div>*/
/*                             <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a>*/
/*                             <span>14 minutes ago</span>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <i class="icon-heart text-danger"></i>*/
/*                         <div>*/
/*                             Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a>*/
/*                             <span>35 minutes ago</span>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <i class="icon-checkmark3 text-success"></i>*/
/*                         <div>*/
/*                             Mail server was updated. See <a href="#">changelog</a>*/
/*                             <span>About 2 hours ago</span>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <i class="icon-paragraph-justify2 text-warning"></i>*/
/*                         <div>*/
/*                             There are <a href="#">6 new tasks</a> waiting for you. Don't forget!*/
/*                             <span>About 3 hours ago</span>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </li>*/
/* */
/*         <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                 <i class="icon-paragraph-justify2"></i>*/
/*                 <span class="label label-default">6</span>*/
/*             </a>*/
/*             <div class="popup dropdown-menu dropdown-menu-right">*/
/*                 <div class="popup-header">*/
/*                     <a href="#" class="pull-left"><i class="icon-spinner7"></i></a>*/
/*                     <span>Messages</span>*/
/*                     <a href="#" class="pull-right"><i class="icon-new-tab"></i></a>*/
/*                 </div>*/
/*                 <ul class="popup-messages">*/
/*                     <li class="unread">*/
/*                         <a href="#">*/
/*                             <img src="http://placehold.it/300" alt="" class="user-face">*/
/*                             <strong>Eugene Kopyov <i class="icon-attachment2"></i></strong>*/
/*                             <span>Aliquam interdum convallis massa...</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="http://placehold.it/300" alt="" class="user-face">*/
/*                             <strong>Jason Goldsmith <i class="icon-attachment2"></i></strong>*/
/*                             <span>Aliquam interdum convallis massa...</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="http://placehold.it/300" alt="" class="user-face">*/
/*                             <strong>Angel Novator</strong>*/
/*                             <span>Aliquam interdum convallis massa...</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="http://placehold.it/300" alt="" class="user-face">*/
/*                             <strong>Monica Bloomberg</strong>*/
/*                             <span>Aliquam interdum convallis massa...</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="http://placehold.it/300" alt="" class="user-face">*/
/*                             <strong>Patrick Winsleur</strong>*/
/*                             <span>Aliquam interdum convallis massa...</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </li>*/
/* */
/*         <li class="dropdown">*/
/*             <a data-toggle="dropdown" class="dropdown-toggle">*/
/*                 <i class="icon-grid"></i>*/
/*             </a>*/
/*             <div class="popup dropdown-menu dropdown-menu-right">*/
/*                 <div class="popup-header">*/
/*                     <a href="#" class="pull-left"><i class="icon-spinner7"></i></a>*/
/*                     <span>Tasks list</span>*/
/*                     <a href="#" class="pull-right"><i class="icon-new-tab"></i></a>*/
/*                 </div>*/
/*                 <table class="table table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Description</th>*/
/*                         <th>Category</th>*/
/*                         <th class="text-center">Priority</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <td><span class="status status-success item-before"></span> <a href="#">Frontpage fixes</a></td>*/
/*                         <td><span class="text-smaller text-semibold">Bugs</span></td>*/
/*                         <td class="text-center"><span class="label label-success">87%</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td><span class="status status-danger item-before"></span> <a href="#">CSS compilation</a></td>*/
/*                         <td><span class="text-smaller text-semibold">Bugs</span></td>*/
/*                         <td class="text-center"><span class="label label-danger">18%</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td><span class="status status-info item-before"></span> <a href="#">Responsive layout changes</a></td>*/
/*                         <td><span class="text-smaller text-semibold">Layout</span></td>*/
/*                         <td class="text-center"><span class="label label-info">52%</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td><span class="status status-success item-before"></span> <a href="#">Add categories filter</a></td>*/
/*                         <td><span class="text-smaller text-semibold">Content</span></td>*/
/*                         <td class="text-center"><span class="label label-success">100%</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td><span class="status status-success item-before"></span> <a href="#">Media grid padding issue</a></td>*/
/*                         <td><span class="text-smaller text-semibold">Bugs</span></td>*/
/*                         <td class="text-center"><span class="label label-success">100%</span></td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </li>*/
/* */
/*         <li class="user dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                 <img src="http://placehold.it/300" alt="">*/
/*                 <span>Eugene Kopyov</span>*/
/*                 <i class="caret"></i>*/
/*             </a>*/
/*             <ul class="dropdown-menu dropdown-menu-right icons-right">*/
/*                 <li><a href="#"><i class="icon-user"></i> Profile</a></li>*/
/*                 <li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>*/
/*                 <li><a href="#"><i class="icon-cog"></i> Settings</a></li>*/
/*                 <li><a href="#"><i class="icon-exit"></i> Logout</a></li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* <!-- /navbar -->*/
/* */
/* */
/* <!-- Page container -->*/
/* <div class="page-container">*/
/* */
/* */
/* <!-- Sidebar -->*/
/* <div class="sidebar collapse">*/
/*     <div class="sidebar-content">*/
/* */
/*         <!-- User dropdown -->*/
/*         <div class="user-menu dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                 <img src="http://placehold.it/300" alt="">*/
/*                 <div class="user-info">*/
/*                     Madison Gartner <span>Web Developer</span>*/
/*                 </div>*/
/*             </a>*/
/*             <div class="popup dropdown-menu dropdown-menu-right">*/
/*                 <div class="thumbnail">*/
/*                     <div class="thumb">*/
/*                         <img alt="" src="http://placehold.it/300">*/
/*                         <div class="thumb-options">*/
/* 									<span>*/
/* 										<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>*/
/* 										<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>*/
/* 									</span>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="caption text-center">*/
/*                         <h6>Madison Gartner <small>Front end developer</small></h6>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>*/
/*                     <li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>*/
/*                     <li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>*/
/*                     <li class="list-group-item"><i class="icon-stack text-muted"></i> Balance <h5 class="pull-right text-danger">$45.389</h5></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /user dropdown -->*/
/* */
/* */
/*         <!-- Main navigation -->*/
/*         <ul class="navigation">*/
/*             <li><a href="index.html"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>*/
/*             <li class="active">*/
/*                 <a href="#" class="expand" id="second-level"><span>Blank pages</span> <i class="icon-insert-template"></i></a>*/
/*                 <ul>*/
/*                     <li class="active"><a href="blank_left_sidebar.html">Left sidebar</a></li>*/
/*                     <li><a href="blank_right_sidebar.html">Right sidebar</a></li>*/
/*                     <li><a href="blank_narrow_sidebar.html">Narrow sidebar</a></li>*/
/*                     <li><a href="blank_collapsed_sidebar.html">Collapsed sidebar</a></li>*/
/*                     <li><a href="blank_full_width.html">Full width page</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#" class="expand"><span>Navigation levels</span> <i class="icon-stack"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="#">Second level first item</a></li>*/
/*                     <li><a href="#" class="expand">Second level second item</a>*/
/*                         <ul>*/
/*                             <li><a href="#">Third level first item</a></li>*/
/*                             <li><a href="#">Third level second item</a></li>*/
/*                             <li><a href="#" class="expand">Third level third item</a>*/
/*                                 <ul>*/
/*                                     <li><a href="#">Fourth level first item</a></li>*/
/*                                     <li><a href="#">Fourth level second item</a></li>*/
/*                                     <li><a href="#">Fourth level third item</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="#">Third level second item</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="#">Second level third item</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*         <!-- /main navigation -->*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- /sidebar -->*/
/* */
/* */
/* <!-- Page content -->*/
/* <div class="page-content">*/
/* */
/* */
/*     <!-- Page header -->*/
/*     <div class="page-header">*/
/*         <div class="page-title">*/
/*             <h3>Wide left sidebar <small>Wide left sidebar blank page</small></h3>*/
/*         </div>*/
/*         <div id="reportrange" class="range">*/
/*             <div class="visible-xs header-element-toggle">*/
/*                 <a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>*/
/*             </div>*/
/*             <div class="date-range"></div>*/
/*             <span class="label label-danger">9</span>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /page header -->*/
/* */
/* */
/*     <!-- Breadcrumbs line -->*/
/*     <div class="breadcrumb-line">*/
/*         <ul class="breadcrumb">*/
/*             <li><a href="index.html">Home</a></li>*/
/*             <li><a href="blank_wide_left.html">Blank pages</a></li>*/
/*             <li class="active">Wide left sidebar</li>*/
/*         </ul>*/
/* */
/*         <div class="visible-xs breadcrumb-toggle">*/
/*             <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>*/
/*         </div>*/
/* */
/*         <ul class="breadcrumb-buttons collapse">*/
/*             <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>*/
/*                 <div class="popup dropdown-menu dropdown-menu-right">*/
/*                     <div class="popup-header">*/
/*                         <a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>*/
/*                         <span>Quick search</span>*/
/*                         <a href="#" class="pull-right"><i class="icon-new-tab"></i></a>*/
/*                     </div>*/
/*                     <form action="#" class="breadcrumb-search">*/
/*                         <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">*/
/*                         <div class="row">*/
/*                             <div class="col-xs-6">*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="search-option" class="styled" checked="checked">*/
/*                                     Everywhere*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="search-option" class="styled">*/
/*                                     Invoices*/
/*                                 </label>*/
/*                             </div>*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="search-option" class="styled">*/
/*                                     Users*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="search-option" class="styled">*/
/*                                     Orders*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <input type="submit" class="btn btn-block btn-success" value="Search">*/
/*                     </form>*/
/*                 </div>*/
/*             </li>*/
/* */
/*             <li class="language dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/german.png" alt=""> <span>German</span> <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu dropdown-menu-right icons-right">*/
/*                     <li><a href="#"><img src="images/flags/ukrainian.png" alt=""> Ukrainian</a></li>*/
/*                     <li class="active"><a href="#"><img src="images/flags/english.png" alt=""> English</a></li>*/
/*                     <li><a href="#"><img src="images/flags/spanish.png" alt=""> Spanish</a></li>*/
/*                     <li><a href="#"><img src="images/flags/german.png" alt=""> German</a></li>*/
/*                     <li><a href="#"><img src="images/flags/hungarian.png" alt=""> Hungarian</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     <!-- /breadcrumbs line -->*/
/* */
/* */
/*     <!-- Callout -->*/
/*     <div class="callout callout-danger fade in">*/
/*         <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         <h5>Wide left sidebar blank page</h5>*/
/*         <p>Page includes minium of required code and jquery files. Can be taken as a base for implementing Londinium to your app.</p>*/
/*     </div>*/
/*     <!-- /callout -->*/
/* */
/* */
/*     <!-- Default panel -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading"><h6 class="panel-title">Default panel</h6></div>*/
/*         <div class="panel-body"><code>div class="panel panel-default"</code></div>*/
/*     </div>*/
/*     <!-- /default panel -->*/
/* */
/* */
/*     <!-- Default table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Default table</h6></div>*/
/*         <div class="table-responsive">*/
/*             <table class="table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>First Name</th>*/
/*                     <th>Last Name</th>*/
/*                     <th>Username</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td>1</td>*/
/*                     <td>Mark</td>*/
/*                     <td>Otto</td>*/
/*                     <td>@mdo</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>2</td>*/
/*                     <td>Jacob</td>*/
/*                     <td>Thornton</td>*/
/*                     <td>@fat</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>3</td>*/
/*                     <td>Larry</td>*/
/*                     <td>the Bird</td>*/
/*                     <td>@twitter</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /default table -->*/
/* */
/* */
/*     <!-- Form components -->*/
/*     <form class="form-horizontal" role="form" action="#">*/
/* */
/*         <!-- Basic inputs -->*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Default form elements</h6></div>*/
/*             <div class="panel-body">*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label">Default text input: </label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" class="form-control">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label">Password: </label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="password" class="form-control">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label">Input with placeholder: </label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" class="form-control" placeholder="placeholder">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label">Textarea: </label>*/
/*                     <div class="col-sm-10">*/
/*                         <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- /basic inputs -->*/
/* */
/*     </form>*/
/*     <!-- /form components -->*/
/* */
/* */
/*     <!-- Footer -->*/
/*     <div class="footer clearfix">*/
/*         <div class="pull-left">&copy; 2013. Londinium Admin Template by <a href="http://themeforest.net/user/Kopyov">Eugene Kopyov</a></div>*/
/*         <div class="pull-right icons-group">*/
/*             <a href="#"><i class="icon-screen2"></i></a>*/
/*             <a href="#"><i class="icon-balance"></i></a>*/
/*             <a href="#"><i class="icon-cog3"></i></a>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /footer -->*/
/* */
/* */
/* </div>*/
/* <!-- /page content -->*/
/* */
/* </div>*/
/* <!-- /content -->*/
/* */
/* </body>*/
/* </html>*/
