<?php

/* base.twig */
class __TwigTemplate_1acc2b5ce666acd438d584b83be60218cebb36357dfa2b8cd1e25a7b4f89fb0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.twig", "base.twig", 1);
        $this->blocks = array(
            'MsgBox' => array($this, 'block_MsgBox'),
            'basejs' => array($this, 'block_basejs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_MsgBox($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array(), "array")) {
            // line 21
            echo "        <div class=\"callout callout-info fade in\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <h5>Info message</h5>
            <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 27
        echo "    ";
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array")) {
            // line 28
            echo "        <div class=\"callout callout-danger fade in\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <h5>Error message</h5>
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 34
        echo "
";
    }

    // line 36
    public function block_basejs($context, array $blocks = array())
    {
        // line 37
        echo "    <script type=\"text/javascript\">
        Messenger.options = {
            extraClasses: 'messenger-fixed messenger-on-top messenger-on-left',
            theme: 'flat'
        }
        /// function lib kumpulan
        function round(value, decimals) {
            return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
        }
        function empties(data)
        {
            if(typeof(data) == 'number' || typeof(data) == 'boolean')
            {
                return false;
            }
            if(typeof(data) == 'undefined' || data === null)
            {
                return true;
            }
            if(typeof(data.length) != 'undefined')
            {
                return data.length == 0;
            }
            var count = 0;
            for(var i in data)
            {
                if(data.hasOwnProperty(i))
                {
                    count ++;
                }
            }
            return count == 0;
        }
        //!-> end function
        ";
        // line 71
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array())) {
            // line 72
            echo "        Messenger().post({
            message: '";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array()), "html", null, true);
            echo "',
            type: 'info',
            showCloseButton: true
        });
        ";
        } elseif ($this->getAttribute(        // line 77
(isset($context["flash"]) ? $context["flash"] : null), "error", array())) {
            // line 78
            echo "        Messenger().post({
            message: '";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array()), "html", null, true);
            echo "',
            type: 'error',
            showCloseButton: true
        });
        ";
        }
        // line 84
        echo "        var month = new Array();
        month[0] = \"January\";
        month[1] = \"February\";
        month[2] = \"March\";
        month[3] = \"April\";
        month[4] = \"May\";
        month[5] = \"June\";
        month[6] = \"July\";
        month[7] = \"August\";
        month[8] = \"September\";
        month[9] = \"October\";
        month[10] = \"November\";
        month[11] = \"December\";
        var tdate = new Date();
        \$('.date-range').html('<i>'+tdate.getDate()+'</i>'+'<b><i>'+month[tdate.getMonth()]+'</i> <i>'+tdate.getFullYear()+'</i></b>');
        \$(function() {
            //===== Popover =====//

            \$(\"[data-toggle=popover]\").popover().click(function(e) {
                e.preventDefault()
            });


            /* # Bootstrap Plugins
             ================================================== */


            //===== Add fadeIn animation to dropdown =====//

            \$('.dropdown, .btn-group').on('show.bs.dropdown', function(e){
                \$(this).find('.dropdown-menu').first().stop(true, true).fadeIn(100);
            });


            //===== Add fadeOut animation to dropdown =====//

            \$('.dropdown, .btn-group').on('hide.bs.dropdown', function(e){
                \$(this).find('.dropdown-menu').first().stop(true, true).fadeOut(100);
            });


            //===== Prevent dropdown from closing on click =====//

            \$('.popup').click(function (e) {
                e.stopPropagation();
            });

            //===== Collapsible navigation =====//

            \$('.sidebar-wide li:not(.disabled) .expand, .sidebar-narrow .navigation > li ul .expand').collapsible({
                defaultOpen: 'second-level,third-level',
                cssOpen: 'level-opened',
                cssClose: 'level-closed',
                speed: 150
            });


            /* # Default Layout Options
             ================================================== */

            //===== Hiding sidebar =====//

            \$('.sidebar-toggle').click(function () {
                \$('.page-container').toggleClass('sidebar-hidden');
            });


            //===== Disabling main navigation links =====//

            \$('.navigation li.disabled a, .navbar-nav > .disabled > a').click(function(e){
                e.preventDefault();
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 84,  125 => 79,  122 => 78,  120 => 77,  113 => 73,  110 => 72,  108 => 71,  72 => 37,  69 => 36,  64 => 34,  58 => 31,  53 => 28,  50 => 27,  44 => 24,  39 => 21,  37 => 20,  34 => 19,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'main.twig'%}*/
/* {% block MsgBox %}*/
/*     {# {% if flashIt('info') or flashIt('error') %}*/
/*     {% if flashIt('info') %}*/
/*     <div class="callout callout-info fade in">*/
/*         <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         <h5>Info message</h5>*/
/*         <p>{{ flashIt('info') }}</p>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if flashIt('error') %}*/
/*     <div class="callout callout-danger fade in">*/
/*         <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         <h5>Error message</h5>*/
/*         <p>{{ flashIt('error') }}</p>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% endif %} #}*/
/* */
/*     {% if flash['info'] %}*/
/*         <div class="callout callout-info fade in">*/
/*             <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             <h5>Info message</h5>*/
/*             <p>{{ flash.info }}</p>*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if flash['error'] %}*/
/*         <div class="callout callout-danger fade in">*/
/*             <button type="button" class="close" data-dismiss="alert">×</button>*/
/*             <h5>Error message</h5>*/
/*             <p>{{ flash.error }}</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* {% block basejs %}*/
/*     <script type="text/javascript">*/
/*         Messenger.options = {*/
/*             extraClasses: 'messenger-fixed messenger-on-top messenger-on-left',*/
/*             theme: 'flat'*/
/*         }*/
/*         /// function lib kumpulan*/
/*         function round(value, decimals) {*/
/*             return Number(Math.round(value+'e'+decimals)+'e-'+decimals);*/
/*         }*/
/*         function empties(data)*/
/*         {*/
/*             if(typeof(data) == 'number' || typeof(data) == 'boolean')*/
/*             {*/
/*                 return false;*/
/*             }*/
/*             if(typeof(data) == 'undefined' || data === null)*/
/*             {*/
/*                 return true;*/
/*             }*/
/*             if(typeof(data.length) != 'undefined')*/
/*             {*/
/*                 return data.length == 0;*/
/*             }*/
/*             var count = 0;*/
/*             for(var i in data)*/
/*             {*/
/*                 if(data.hasOwnProperty(i))*/
/*                 {*/
/*                     count ++;*/
/*                 }*/
/*             }*/
/*             return count == 0;*/
/*         }*/
/*         //!-> end function*/
/*         {% if flash.info %}*/
/*         Messenger().post({*/
/*             message: '{{ flash.info }}',*/
/*             type: 'info',*/
/*             showCloseButton: true*/
/*         });*/
/*         {% elseif flash.error %}*/
/*         Messenger().post({*/
/*             message: '{{ flash.error }}',*/
/*             type: 'error',*/
/*             showCloseButton: true*/
/*         });*/
/*         {% endif %}*/
/*         var month = new Array();*/
/*         month[0] = "January";*/
/*         month[1] = "February";*/
/*         month[2] = "March";*/
/*         month[3] = "April";*/
/*         month[4] = "May";*/
/*         month[5] = "June";*/
/*         month[6] = "July";*/
/*         month[7] = "August";*/
/*         month[8] = "September";*/
/*         month[9] = "October";*/
/*         month[10] = "November";*/
/*         month[11] = "December";*/
/*         var tdate = new Date();*/
/*         $('.date-range').html('<i>'+tdate.getDate()+'</i>'+'<b><i>'+month[tdate.getMonth()]+'</i> <i>'+tdate.getFullYear()+'</i></b>');*/
/*         $(function() {*/
/*             //===== Popover =====//*/
/* */
/*             $("[data-toggle=popover]").popover().click(function(e) {*/
/*                 e.preventDefault()*/
/*             });*/
/* */
/* */
/*             /* # Bootstrap Plugins*/
/*              ================================================== *//* */
/* */
/* */
/*             //===== Add fadeIn animation to dropdown =====//*/
/* */
/*             $('.dropdown, .btn-group').on('show.bs.dropdown', function(e){*/
/*                 $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(100);*/
/*             });*/
/* */
/* */
/*             //===== Add fadeOut animation to dropdown =====//*/
/* */
/*             $('.dropdown, .btn-group').on('hide.bs.dropdown', function(e){*/
/*                 $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(100);*/
/*             });*/
/* */
/* */
/*             //===== Prevent dropdown from closing on click =====//*/
/* */
/*             $('.popup').click(function (e) {*/
/*                 e.stopPropagation();*/
/*             });*/
/* */
/*             //===== Collapsible navigation =====//*/
/* */
/*             $('.sidebar-wide li:not(.disabled) .expand, .sidebar-narrow .navigation > li ul .expand').collapsible({*/
/*                 defaultOpen: 'second-level,third-level',*/
/*                 cssOpen: 'level-opened',*/
/*                 cssClose: 'level-closed',*/
/*                 speed: 150*/
/*             });*/
/* */
/* */
/*             /* # Default Layout Options*/
/*              ================================================== *//* */
/* */
/*             //===== Hiding sidebar =====//*/
/* */
/*             $('.sidebar-toggle').click(function () {*/
/*                 $('.page-container').toggleClass('sidebar-hidden');*/
/*             });*/
/* */
/* */
/*             //===== Disabling main navigation links =====//*/
/* */
/*             $('.navigation li.disabled a, .navbar-nav > .disabled > a').click(function(e){*/
/*                 e.preventDefault();*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
