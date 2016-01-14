<?php

/* selling/print_invoice_apotik.twig */
class __TwigTemplate_2f188c321c25bc72ec4ed461856ebe5dfd2918af2142ed83eb85fe6c4650c0a0 extends Twig_Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Purchase</title>
    <meta name=\"generator\" content=\"kubuskotak\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/print_static.css\" type=\"text/css\" />
</head>

<body>

<div id=\"body\">

    <div id=\"section_header\" style=\"font-size: 7pt\">
        ";
        // line 16
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
    </div>

    <div id=\"content\">

        <div class=\"page\" style=\"font-size: 7pt\">

            <table style=\"width: 100%; font-size: 5pt;\">
                <tr>
                    <td>#Invoice: <strong>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["invoice"]) ? $context["invoice"] : null), "html", null, true);
        echo "</strong></td>
                    <td><strong>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["price_list"]) ? $context["price_list"] : null), "html", null, true);
        echo "</strong></td>
                </tr>

                <tr>
                    <td><strong>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["posting_date"]) ? $context["posting_date"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["posting_time"]) ? $context["posting_time"] : null), "html", null, true);
        echo "</strong></td>
                    <td>Reg.no: <strong>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["pasien_reg_no"]) ? $context["pasien_reg_no"] : null), "html", null, true);
        echo "</strong></td>
                </tr>

                <tr>
                    <td>Alamat: <strong>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["pasien_alamat"]) ? $context["pasien_alamat"] : null), "html", null, true);
        echo "</strong></td>
                    <td>Dokter: <strong>dr. Diane Masaroh, M.Spog</strong></td>
                </tr>
            </table>

            <table style=\"width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 5pt;\">

                <tr>
                    <td>Pasien: <strong>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["pasien_nama"]) ? $context["pasien_nama"] : null), "html", null, true);
        echo "</strong></td>
                    <td colspan=\"5\"></td>
                </tr>

            </table>

            <table class=\"change_order_items\">
                <tbody>
                <tr>
                    <th>Kode</th>
                    <th>Barang</th>
                    <th>Quantity</th>
                    <th colspan=\"2\">Harga</th>
                    <th>Sub Total</th>
                </tr>

                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 60
            echo "                    <tr class=\"even_row\">
                    <td style=\"text-align: center\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "item_kode", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "item_nama", array()), "html", null, true);
            echo "</td>
                        <td style=\"text-align: center\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "actual_qty", array()), "html", null, true);
            echo "</td>
                        <td style=\"text-align: right; border-right-style: none;\">Rp. ";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["row"], "item_price", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                        <td class=\"change_order_unit_col\" style=\"border-left-style: none;\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "item_uom", array()), "html", null, true);
            echo "</td>
                        <td class=\"change_order_total_col\">";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["row"], "amount", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                </tbody>
                <tr>
                    <td colspan=\"3\" style=\"text-align: right;\"></td>
                    <td colspan=\"2\" style=\"text-align: right;\"><strong>Total:</strong></td>
                    <td class=\"change_order_total_col\"><strong>";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["amount"]) ? $context["amount"] : null), 2, ".", ","), "html", null, true);
        echo "</strong></td>
                </tr>
                <tr>
                    <td colspan=\"3\" style=\"text-align: right;\"></td>
                    <td colspan=\"2\" style=\"text-align: right;\"><strong>Bayar:</strong></td>
                    <td class=\"change_order_total_col\"><strong>0</strong></td>
                </tr>
                <tr>
                    <td colspan=\"3\" style=\"text-align: right;\"></td>
                    <td colspan=\"2\" style=\"text-align: right;\"><strong>Kembali:</strong></td>
                    <td class=\"change_order_total_col\"><strong>0</strong></td>
                </tr>
            </table>
        </div>

    </div>
</div>

<script type=\"text/javascript\">
    window.print();

    // close the window after print
    // NOTE: doesn't close if print is cancelled in Chrome
    setTimeout(function() {
        window.close();
    }, 1000);
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "selling/print_invoice_apotik.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 74,  143 => 69,  134 => 66,  130 => 65,  126 => 64,  122 => 63,  116 => 62,  112 => 61,  109 => 60,  105 => 59,  86 => 43,  75 => 35,  68 => 31,  62 => 30,  55 => 26,  51 => 25,  39 => 16,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <title>Purchase</title>*/
/*     <meta name="generator" content="kubuskotak">*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/css/print_static.css" type="text/css" />*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="body">*/
/* */
/*     <div id="section_header" style="font-size: 7pt">*/
/*         {{ title | raw}}*/
/*     </div>*/
/* */
/*     <div id="content">*/
/* */
/*         <div class="page" style="font-size: 7pt">*/
/* */
/*             <table style="width: 100%; font-size: 5pt;">*/
/*                 <tr>*/
/*                     <td>#Invoice: <strong>{{ invoice }}</strong></td>*/
/*                     <td><strong>{{price_list}}</strong></td>*/
/*                 </tr>*/
/* */
/*                 <tr>*/
/*                     <td><strong>{{ posting_date }} {{ posting_time }}</strong></td>*/
/*                     <td>Reg.no: <strong>{{ pasien_reg_no }}</strong></td>*/
/*                 </tr>*/
/* */
/*                 <tr>*/
/*                     <td>Alamat: <strong>{{ pasien_alamat }}</strong></td>*/
/*                     <td>Dokter: <strong>dr. Diane Masaroh, M.Spog</strong></td>*/
/*                 </tr>*/
/*             </table>*/
/* */
/*             <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 5pt;">*/
/* */
/*                 <tr>*/
/*                     <td>Pasien: <strong>{{ pasien_nama }}</strong></td>*/
/*                     <td colspan="5"></td>*/
/*                 </tr>*/
/* */
/*             </table>*/
/* */
/*             <table class="change_order_items">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <th>Kode</th>*/
/*                     <th>Barang</th>*/
/*                     <th>Quantity</th>*/
/*                     <th colspan="2">Harga</th>*/
/*                     <th>Sub Total</th>*/
/*                 </tr>*/
/* */
/*                 {% for row in rows %}*/
/*                     <tr class="even_row">*/
/*                     <td style="text-align: center">{{ row.id}}</td>*/
/*                         <td>{{ row.item_kode }} - {{ row.item_nama }}</td>*/
/*                         <td style="text-align: center">{{row.actual_qty}}</td>*/
/*                         <td style="text-align: right; border-right-style: none;">Rp. {{ row.item_price | number_format(2, '.', ',')}}</td>*/
/*                         <td class="change_order_unit_col" style="border-left-style: none;">{{ row.item_uom}}</td>*/
/*                         <td class="change_order_total_col">{{ row.amount | number_format(2, '.', ',')}}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*                 <tr>*/
/*                     <td colspan="3" style="text-align: right;"></td>*/
/*                     <td colspan="2" style="text-align: right;"><strong>Total:</strong></td>*/
/*                     <td class="change_order_total_col"><strong>{{amount | number_format(2, '.', ',')}}</strong></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="3" style="text-align: right;"></td>*/
/*                     <td colspan="2" style="text-align: right;"><strong>Bayar:</strong></td>*/
/*                     <td class="change_order_total_col"><strong>0</strong></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="3" style="text-align: right;"></td>*/
/*                     <td colspan="2" style="text-align: right;"><strong>Kembali:</strong></td>*/
/*                     <td class="change_order_total_col"><strong>0</strong></td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     window.print();*/
/* */
/*     // close the window after print*/
/*     // NOTE: doesn't close if print is cancelled in Chrome*/
/*     setTimeout(function() {*/
/*         window.close();*/
/*     }, 1000);*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
