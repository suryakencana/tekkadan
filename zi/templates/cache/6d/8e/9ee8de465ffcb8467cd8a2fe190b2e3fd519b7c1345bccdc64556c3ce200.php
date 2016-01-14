<?php

/* component/zcalendar.twig */
class __TwigTemplate_6d8e9ee8de465ffcb8467cd8a2fe190b2e3fd519b7c1345bccdc64556c3ce200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<!-- Calendar -->
<div class=\"block\">
\t<div class=\"fullcalendar\"></div>
</div>
<!-- /calendar -->

<!-- Calendar inside panel -->
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h6 class=\"panel-title\"><i class=\"icon-calendar2\"></i> Calendar inside panel</h6>
\t</div>
\t<div class=\"fullcalendar\"></div>
</div>
<!-- /calendar inside panel -->

<!-- Calendar inside panel body -->
<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">
\t\t<h6 class=\"panel-title\"><i class=\"icon-calendar2\"></i> Calendar inside panel body</h6>
\t</div>
\t<div class=\"panel-body\">
\t\t<div class=\"fullcalendar\"></div>
\t</div>
</div>
<!-- /calendar inside panel body -->
";
    }

    // line 29
    public function block_js($context, array $blocks = array())
    {
        // line 30
        echo "<script type=\"text/javascript\" src=\"asset/js/plugins/interface/fullcalendar.min.js\"></script>
<script type=\"text/javascript\">
\$(function() {
\t//===== Fullcalendar =====//

\tvar date = new Date();
\tvar calendar = \$('.fullcalendar').fullCalendar({
\t\theader: {
\t\t\tleft: 'prev,next,today',
\t\t\tcenter: 'title',
\t\t\tright: 'month,agendaWeek,agendaDay'
\t\t},
\t\tselectable: true,
\t\tselectHelper: true,
\t\tselect: function(start, end, allDay) {
\t\t\talert('Clicked on the entire day: ' + date);
\t\t},
\t\tdayClick: function(date, allDay, jsEvent, view) {

\t\t\tif (allDay) {
\t\t\t\talert('Clicked on the entire day: ' + date);
\t\t\t} else {
\t\t\t\talert('Clicked on the slot: ' + date);
\t\t\t}
\t\t\t   alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
\t\t\t   alert('Current view: ' + view.name);
            // change the day's background color just for fun
            //\$(this).css('background-color', 'red');

        },
        eventClick: function(calEvent, jsEvent, view) {

            alert('Event: ' + calEvent.title);
            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            alert('View: ' + view.name);

\t\t       // change the border color just for fun
\t\t       \$(this).css('border-color', 'red');

        },
        //editable: true,
        eventSources: [
         {
            url : \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("cal"), "html", null, true);
        echo "\",
            color : 'black',
            textColor : 'white'
         },
         {
            url : \"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("cal"), "html", null, true);
        echo "\",
            color : 'pink',
            textColor : 'black'
         }
        ]
   });
/* Render hidden calendar on tab show */
\$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function () {
\t\$('.fullcalendar').fullCalendar('render');
});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "component/zcalendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 78,  109 => 73,  64 => 30,  61 => 29,  32 => 3,  29 => 2,);
    }
}
