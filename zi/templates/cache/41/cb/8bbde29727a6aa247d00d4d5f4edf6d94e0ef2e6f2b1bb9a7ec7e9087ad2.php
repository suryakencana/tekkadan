<?php

/* component/gridview.twig */
class __TwigTemplate_41cb8bbde29727a6aa247d00d4d5f4edf6d94e0ef2e6f2b1bb9a7ec7e9087ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.twig");

        $this->blocks = array(
            'basecss' => array($this, 'block_basecss'),
            'basejs' => array($this, 'block_basejs'),
            'content' => array($this, 'block_content'),
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
    public function block_basecss($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"asset/plugins/data-tables/DT_bootstrap.css\"/>
";
    }

    // line 5
    public function block_basejs($context, array $blocks = array())
    {
        // line 6
        echo "<script type=\"text/javascript\" src=\"asset/plugins/data-tables/jquery.dataTables.js\"></script>
<script type=\"text/javascript\" src=\"asset/plugins/data-tables/DT_bootstrap.js\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
\$(function () {

        //===== Dynamic data table =====//
        var initTable = function () {
        \tvar oTable = \$('#dTable').dataTable({
        \t\tbRetrieve: true,
        \t\t\"aoColumnDefs\": [
        \t\t{ \"aTargets\": [ 0 ] }
        \t\t],
        \t\t\"aaSorting\": [
        \t\t[1, 'asc']
        \t\t],
        \t\t\"aLengthMenu\": [
        \t\t[5, 10, 20, 100],
                    [5, 10, 20, 100] // change per page values here
                    ],
                // set the initial value
                \"iDisplayLength\": 5,
                //\"sDom\": \"<'row' r<'span4'l><'span6'f>>t<'row'<'span4'i><'span6'p>>\",
                \"sPaginationType\": \"full_numbers\",
                \"sDom\": '<\"datatable-header\"fl><\"datatable-scroll\"t><\"datatable-footer\"ip>',
                \"oLanguage\": {
                \t\"sSearch\": \"<span>Filter:</span> _INPUT_\",
                \t\"sLengthMenu\": \"<span>Show entries:</span> _MENU_\",
                \t\"oPaginate\": { \"sFirst\": \"First\", \"sLast\": \"Last\", \"sNext\": \">\", \"sPrevious\": \"<\" }
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"fnRowCallback\": function (nRow, aData, iDisplayIndex) {
                \t// \$('td:eq(-1)', nRow).addClass('ok_rock');
                \t// return nRow;
                },
                \"fnDrawCallback\": function () {
                \t\$(\"a[data-linkto]\").bind(\"click\", function () {

                \t\tvar anchor = \$(this);
                \t\tvar destination = anchor.attr(\"data-destination\");

                \t\tvar href = anchor.attr(\"href\");
                \t\tvar _method = anchor.attr(\"data-method\");
                \t\tvar before = anchor.attr(\"data-before\");
                \t\tvar after = anchor.attr(\"data-after\");

                \t\tif (_method == null) {
                \t\t\t_method = \"get\";
                \t\t}
                \t\tvar type;
                \t\tif (_method.toLowerCase() == \"get\") {
                \t\t\ttype = \"get\";
                \t\t} else if (_method.toLowerCase() == \"post\"
                \t\t\t|| _method.toLowerCase() == \"put\"
                \t\t\t|| _method.toLowerCase() == \"delete\") {
                \t\t\ttype = \"post\";
                \t\t}

                \t\tvar data = \"_method=\" + _method;

                \t\tbootbox.confirm(\"Anda Yakin untuk menghapus record?\", function (result) {
                \t\t\tif (result == true) {
                \t\t\t\t\$.ajax({
                \t\t\t\t\txhr: function (activexobject, xhr) {
                \t\t\t\t\t\tvar xhr = new window.XMLHttpRequest();
                                        //Upload progress
                                        xhr.upload.addEventListener(\"progress\", function (evt) {
                                        \tif (evt.lengthComputable) {
                                        \t\tvar percentComplete = evt.loaded / evt.total;
                                                //Do something with upload progress
                                                //NProgress.set(percentComplete);
                                            }
                                        }, false);
                                        //Download progress
                                        xhr.addEventListener(\"progress\", function (evt) {
                                        \tif (evt.lengthComputable) {
                                        \t\tvar percentComplete = evt.loaded / evt.total;
                                                //Do something with download progress
                                                NProgress.set(percentComplete);
                                            }
                                        }, false);
                                        return xhr;
                                    },
                                    url: href, data: data, type: type,
                                    beforeSend: function (xhr) {
                                    \t//NProgress.start();
                                    \tconsole.log(\"ajax proses\");
                                    },
                                    success: function (data) {
                                    \tif (after != null)
                                    \t\teval(after)(afterArg, data);

                                    \tif (destination != null)
                                    \t\t\$(\"#\" + destination).html(data);
                                        //var oTable = \$('#dTable').dataTable({});
                                        \$('#dTable').notify(data, { position: \"top center\", className: \"success\" });
                                        oTable.fnDraw();
                                        //NProgress.done();
                                    },
                                    error: function (xhr, status, errorThrown) {
                                    \tif (error != null) {
                                    \t\teval(error)(xhr.status, xhr.responseText);
                                    \t}
                                    \t//NProgress.done();
                                    }
                                });
}
});
return false;
});
},
\"sAjaxSource\": '";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["ajaxSource"]) ? $context["ajaxSource"] : null), "html", null, true);
        echo "',
\"fnServerData\": function (sUrl, aoData, fnCallback, oSettings) {
\toSettings.jqXHR = \$.ajax({
\t\txhr: function (activexobject, xhr) {
\t\t\tvar xhr = new window.XMLHttpRequest();
                            //Upload progress
                            xhr.upload.addEventListener(\"progress\", function (evt) {
                            \tif (evt.lengthComputable) {
                            \t\tvar percentComplete = evt.loaded / evt.total;
                                    //Do something with upload progress
                                    //NProgress.set(percentComplete);
                                }
                            }, false);
                            //Download progress
                            xhr.addEventListener(\"progress\", function (evt) {
                            \tif (evt.lengthComputable) {
                            \t\tvar percentComplete = evt.loaded / evt.total;
                                    //Do something with download progress
                                    //NProgress.set(percentComplete);
                                }
                            }, false);
                            return xhr;
                        },
                        beforeSend: function (xhr) {
                        \tNProgress.start();
                        },
                        \"url\": sUrl,
                        \"data\": aoData,
                        \"success\": [fnCallback, function () {
                        \t//NProgress.done();
                        }],
                        \"dataType\": \"jsonp\",
                        \"cache\": false
                    });
}
});
            \$('#dTable_wrapper .dataTables_filter input').addClass(\"m-wrap large\"); // modify table search input
            \$('#dTable_wrapper .dataTables_length select').addClass(\"m-wrap small\"); // modify table per page dropdown
        };
        initTable();
    });
</script>
";
    }

    // line 160
    public function block_content($context, array $blocks = array())
    {
        // line 161
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\"><h6 class=\"panel-title\"><i class=\"icon-table\"></i> ";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6></div>
\t<div class=\"datatable\">
\t\t<table class=\"table table-striped table-bordered\" id=\"dTable\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 167
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colnames"]) ? $context["colnames"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 168
            echo "\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, (isset($context["col"]) ? $context["col"] : null), "html", null, true);
            echo "</th>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t\t";
        // line 172
        if ((!(null === (isset($context["print"]) ? $context["print"] : null)))) {
            // line 173
            echo "\t\t\t\t\t<th></th>
\t\t\t\t\t";
        }
        // line 175
        echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"dataTables_empty\">Loading data from server</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "component/gridview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 175,  234 => 173,  232 => 172,  228 => 170,  219 => 168,  215 => 167,  207 => 162,  204 => 161,  201 => 160,  154 => 117,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
