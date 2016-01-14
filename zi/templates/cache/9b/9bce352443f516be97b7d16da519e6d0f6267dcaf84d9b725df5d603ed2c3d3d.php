<?php

/* item/formitem.twig */
class __TwigTemplate_b6000f752f322309ca3f479243f068e2584b6b463c122f73d421f7728f282382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "item/formitem.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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
    public function block_css($context, array $blocks = array())
    {
    }

    // line 6
    public function block_js($context, array $blocks = array())
    {
        // line 7
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/forms/select2.min.js\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
  
  \$(function () {
    \$(\".jpasien\").select2({
      width: \"250\",
      minimumInputLength: 0,
      placeholder: \"Cari Jenis Pasien\",
      id: function(bond){ return bond.jenis_id; },
      ajax: {
        url: '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["jpasien_url"]) ? $context["jpasien_url"] : null), "html", null, true);
        echo "',
        dataType: 'json',
        quietMillis: 100,
        data: function (term, page) {
          return {
            q: term, // search term
            page: page
          };
        },
        results: function (data, page) {

          var more = (page * 30) < data.total;
          return {results: data.rows, more: more};
        }
      },
      escapeMarkup: function (markup) { return markup; },
      formatSelection: function (repo) {
        return repo.jenis_nama;
      },
      formatResult: function (repo) {
        return repo.jenis_nama;
      }
    });

    \$(\".itemsatuan\").select2({
      width: \"250\",
      minimumInputLength: 0,
      placeholder: \"Cari Item Satuan\",
      id: function(bond){ return bond.satuan_id; },
      ajax: {
        url: '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["satuan_url"]) ? $context["satuan_url"] : null), "html", null, true);
        echo "',
        dataType: 'json',
        quietMillis: 100,
        data: function (term, page) {
          return {
            q: term, // search term
            page: page
          };
        },
        results: function (data, page) {

          var more = (page * 30) < data.total;
          return {results: data.rows, more: more};
        }
      },
      escapeMarkup: function (markup) { return markup; },
      formatSelection: function (repo) {
        return repo.satuan_nama;
      },
      formatResult: function (repo) {
        return repo.satuan_nama;
      }
    });

    \$(\".itemkemasan\").select2({
      width: \"250\",
      minimumInputLength: 0,
      placeholder: \"Cari Item Kemasan\",
      id: function(bond){ return bond.kemasan_id; },
      ajax: {
        url: '";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["kemasan_url"]) ? $context["kemasan_url"] : null), "html", null, true);
        echo "',
        dataType: 'json',
        quietMillis: 100,
        data: function (term, page) {
          return {
            q: term, // search term
            page: page
          };
        },
        results: function (data, page) {

          var more = (page * 30) < data.total;
          return {results: data.rows, more: more};
        }
      },
      escapeMarkup: function (markup) { return markup; },
      formatSelection: function (repo) {
        return repo.kemasan_nama;
      },
      formatResult: function (repo) {
        return repo.kemasan_nama;
      }
    });

    \$(\".itemjenis\").select2({
      width: \"250\",
      minimumInputLength: 0,
      placeholder: \"Cari Item Klasifikasi\",
      id: function(bond){ return bond.jenis_id; },
      ajax: {
        url: '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["klasifikasi_url"]) ? $context["klasifikasi_url"] : null), "html", null, true);
        echo "',
        dataType: 'json',
        quietMillis: 100,
        data: function (term, page) {
          return {
            q: term, // search term
            page: page
          };
        },
        results: function (data, page) {

          var more = (page * 30) < data.total;
          return {results: data.rows, more: more};
        }
      },
      escapeMarkup: function (markup) { return markup; },
      formatSelection: function (repo) {
        return repo.jenis_nama;
      },
      formatResult: function (repo) {
        return repo.jenis_nama;
      }
    });

    \$(\".itemgudang\").select2({
      width: \"250\",
      minimumInputLength: 0,
      placeholder: \"Cari Lokasi Gudang\",
      id: function(bond){ return bond.gudang_id; },
      ajax: {
        url: '";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["gudang_url"]) ? $context["gudang_url"] : null), "html", null, true);
        echo "',
        dataType: 'json',
        quietMillis: 100,
        data: function (term, page) {
          return {
            q: term, // search term
            page: page
          };
        },
        results: function (data, page) {

          var more = (page * 30) < data.total;
          return {results: data.rows, more: more};
        }
      },
      escapeMarkup: function (markup) { return markup; },
      formatSelection: function (repo) {
        return repo.gudang_nama;
      },
      formatResult: function (repo) {
        return repo.gudang_nama;
      }
    });
  });
</script>
";
    }

    // line 163
    public function block_content($context, array $blocks = array())
    {
        // line 164
        echo "<form class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("item.s003"), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
  <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["ftitle"]) ? $context["ftitle"] : null), "html", null, true);
        echo "</h6>

  <div class=\"form-actions text-right\">
    <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
  </div>

  <div class=\"block-inner\">
    <div class=\"block-inner\">
      <h6 class=\"heading-hr\">
        <i class=\"icon-user\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Item Barang</small>
      </h6>
    </div>

    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">Kode Item:</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" name=\"item_kode\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_kode", array()), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_id", array()), "html", null, true);
        echo "\" />
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">Nama Item:</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" name=\"item_nama\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_nama", array()), "html", null, true);
        echo "\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">Lokasi Gudang Item:</label>
      <div class=\"col-sm-10\">
        <input type=\"hidden\" name=\"id_gudang\" class=\"itemgudang\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "id_gudang", array()), "html", null, true);
        echo "\"/>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">Keterangan Item:</label>
      <div class=\"col-sm-10\">
        <textarea class=\"form-control\" name=\"item_keterangan\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_keterangan", array()), "html", null, true);
        echo "\"></textarea>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-6\">
      <div class=\"block-inner\">
        <div class=\"block-inner\">
          <h6 class=\"heading-hr\">
            <i class=\"icon-user\"></i> Harga dan Stok  <small class=\"display-block\">Konfigurasi Harga dan Stok pada Item Barang</small>
          </h6>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <label>Harga Jual:</label>
                <input type=\"text\" class=\"form-control\" name=\"item_harga_jual\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_harga_jual", array()), "html", null, true);
        echo "\" />
              </div>
              <div class=\"col-sm-6\">
                <label>Stok Minimal:</label>
                <input type=\"text\" class=\"form-control\" name=\"item_stok_alert\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_stok_alert", array()), "html", null, true);
        echo "\" />
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <label>Harga Beli:</label>
                <input type=\"text\" class=\"form-control\" name=\"item_harga_beli\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_harga_beli", array()), "html", null, true);
        echo "\" />
              </div>

              <div class=\"col-sm-6\">
                <label>Stok Maksimal:</label>
                <input type=\"text\" class=\"form-control\" name=\"item_stok_warning\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_stok_warning", array()), "html", null, true);
        echo "\" />
              </div>              
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <label>Hpp:</label>
                <input type=\"text\" class=\"form-control\" name=\"item_hpp\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_hpp", array()), "html", null, true);
        echo "\" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-sm-6\">
      <div class=\"block-inner\">
        <div class=\"block-inner\">
          <h6 class=\"heading-hr\">
            <i class=\"icon-user\"></i> Spesifikasi Item Barang <small class=\"display-block\">Konfigurasi Spesifikasi pada Item Barang</small>
          </h6>
        </div>
        <div class=\"panel-body\">

          <div class=\"form-group\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"row\">
                  <label class=\"col-sm-12 control-label\">Jenis Item: </label>
                  <div class=\"col-sm-12\">
                    <input type=\"hidden\" name=\"jenis_nama\" class=\"jpasien select-full\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "item_tipe_jenis", array()), "html", null, true);
        echo "\"/>
                  </div>
                </div>
                <div class=\"row\">
                  <label class=\"col-sm-12 control-label\">Satuan Item: </label>
                  <div class=\"col-sm-12\">
                    <input type=\"hidden\" name=\"id_satuan\" class=\"itemsatuan\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "id_satuan", array()), "html", null, true);
        echo "\"/>
                  </div>
                </div>
                <div class=\"row\">
                  <label class=\"col-sm-12 control-label\">Satuan Item Jual: </label>
                  <div class=\"col-sm-12\">
                    <input type=\"hidden\" name=\"id_satuan_jual\" class=\"itemsatuan\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "id_satuan_jual", array()), "html", null, true);
        echo "\"/>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"row\">
                  <label class=\"col-sm-12 control-label\">Klasifikasi Item: </label>
                  <div class=\"col-sm-12\">
                    <input type=\"hidden\" name=\"id_jenis_klasifikasi\" class=\"itemjenis\" value=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "id_jenis_klasifikasi", array()), "html", null, true);
        echo "\"/>
                  </div>
                </div>
                <div class=\"row\">
                  <label class=\"col-sm-12 control-label\">Kemasan Item: </label>
                  <div class=\"col-sm-12\">
                    <input type=\"hidden\" name=\"id_kemasan\" class=\"itemkemasan\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "id_kemasan", array()), "html", null, true);
        echo "\"/>
                  </div>
                </div>
                <div class=\"row\">
                  <label class=\"col-sm-12 control-label\">Satuan Item Beli: </label>
                  <div class=\"col-sm-12\">
                    <input type=\"hidden\" name=\"id_satuan_beli\" class=\"itemsatuan\" value=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fform"]) ? $context["fform"] : null), "id_satuan_beli", array()), "html", null, true);
        echo "\"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "item/formitem.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 299,  395 => 293,  386 => 287,  375 => 279,  366 => 273,  357 => 267,  332 => 245,  321 => 237,  313 => 232,  302 => 224,  295 => 220,  274 => 202,  264 => 195,  255 => 189,  245 => 182,  241 => 181,  222 => 165,  217 => 164,  214 => 163,  184 => 137,  151 => 107,  118 => 77,  85 => 47,  52 => 17,  38 => 7,  35 => 6,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'index.twig' %}*/
/* {% block css %}*/
/* {#<link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>#}*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/select2.min.js"></script>*/
/* <script type="text/javascript" charset="utf-8">*/
/*   */
/*   $(function () {*/
/*     $(".jpasien").select2({*/
/*       width: "250",*/
/*       minimumInputLength: 0,*/
/*       placeholder: "Cari Jenis Pasien",*/
/*       id: function(bond){ return bond.jenis_id; },*/
/*       ajax: {*/
/*         url: '{{jpasien_url}}',*/
/*         dataType: 'json',*/
/*         quietMillis: 100,*/
/*         data: function (term, page) {*/
/*           return {*/
/*             q: term, // search term*/
/*             page: page*/
/*           };*/
/*         },*/
/*         results: function (data, page) {*/
/* */
/*           var more = (page * 30) < data.total;*/
/*           return {results: data.rows, more: more};*/
/*         }*/
/*       },*/
/*       escapeMarkup: function (markup) { return markup; },*/
/*       formatSelection: function (repo) {*/
/*         return repo.jenis_nama;*/
/*       },*/
/*       formatResult: function (repo) {*/
/*         return repo.jenis_nama;*/
/*       }*/
/*     });*/
/* */
/*     $(".itemsatuan").select2({*/
/*       width: "250",*/
/*       minimumInputLength: 0,*/
/*       placeholder: "Cari Item Satuan",*/
/*       id: function(bond){ return bond.satuan_id; },*/
/*       ajax: {*/
/*         url: '{{satuan_url}}',*/
/*         dataType: 'json',*/
/*         quietMillis: 100,*/
/*         data: function (term, page) {*/
/*           return {*/
/*             q: term, // search term*/
/*             page: page*/
/*           };*/
/*         },*/
/*         results: function (data, page) {*/
/* */
/*           var more = (page * 30) < data.total;*/
/*           return {results: data.rows, more: more};*/
/*         }*/
/*       },*/
/*       escapeMarkup: function (markup) { return markup; },*/
/*       formatSelection: function (repo) {*/
/*         return repo.satuan_nama;*/
/*       },*/
/*       formatResult: function (repo) {*/
/*         return repo.satuan_nama;*/
/*       }*/
/*     });*/
/* */
/*     $(".itemkemasan").select2({*/
/*       width: "250",*/
/*       minimumInputLength: 0,*/
/*       placeholder: "Cari Item Kemasan",*/
/*       id: function(bond){ return bond.kemasan_id; },*/
/*       ajax: {*/
/*         url: '{{kemasan_url}}',*/
/*         dataType: 'json',*/
/*         quietMillis: 100,*/
/*         data: function (term, page) {*/
/*           return {*/
/*             q: term, // search term*/
/*             page: page*/
/*           };*/
/*         },*/
/*         results: function (data, page) {*/
/* */
/*           var more = (page * 30) < data.total;*/
/*           return {results: data.rows, more: more};*/
/*         }*/
/*       },*/
/*       escapeMarkup: function (markup) { return markup; },*/
/*       formatSelection: function (repo) {*/
/*         return repo.kemasan_nama;*/
/*       },*/
/*       formatResult: function (repo) {*/
/*         return repo.kemasan_nama;*/
/*       }*/
/*     });*/
/* */
/*     $(".itemjenis").select2({*/
/*       width: "250",*/
/*       minimumInputLength: 0,*/
/*       placeholder: "Cari Item Klasifikasi",*/
/*       id: function(bond){ return bond.jenis_id; },*/
/*       ajax: {*/
/*         url: '{{klasifikasi_url}}',*/
/*         dataType: 'json',*/
/*         quietMillis: 100,*/
/*         data: function (term, page) {*/
/*           return {*/
/*             q: term, // search term*/
/*             page: page*/
/*           };*/
/*         },*/
/*         results: function (data, page) {*/
/* */
/*           var more = (page * 30) < data.total;*/
/*           return {results: data.rows, more: more};*/
/*         }*/
/*       },*/
/*       escapeMarkup: function (markup) { return markup; },*/
/*       formatSelection: function (repo) {*/
/*         return repo.jenis_nama;*/
/*       },*/
/*       formatResult: function (repo) {*/
/*         return repo.jenis_nama;*/
/*       }*/
/*     });*/
/* */
/*     $(".itemgudang").select2({*/
/*       width: "250",*/
/*       minimumInputLength: 0,*/
/*       placeholder: "Cari Lokasi Gudang",*/
/*       id: function(bond){ return bond.gudang_id; },*/
/*       ajax: {*/
/*         url: '{{gudang_url}}',*/
/*         dataType: 'json',*/
/*         quietMillis: 100,*/
/*         data: function (term, page) {*/
/*           return {*/
/*             q: term, // search term*/
/*             page: page*/
/*           };*/
/*         },*/
/*         results: function (data, page) {*/
/* */
/*           var more = (page * 30) < data.total;*/
/*           return {results: data.rows, more: more};*/
/*         }*/
/*       },*/
/*       escapeMarkup: function (markup) { return markup; },*/
/*       formatSelection: function (repo) {*/
/*         return repo.gudang_nama;*/
/*       },*/
/*       formatResult: function (repo) {*/
/*         return repo.gudang_nama;*/
/*       }*/
/*     });*/
/*   });*/
/* </script>*/
/* {% endblock %}*/
/* {% block content %}*/
/* <form class="form-horizontal" action="{{urlFor('item.s003')}}" method="POST" role="form">*/
/*   <h6 class="heading-hr"><i class="icon-paragraph-right2"></i>{{ ftitle }}</h6>*/
/* */
/*   <div class="form-actions text-right">*/
/*     <input type="submit" value="Submit" class="btn btn-primary">*/
/*   </div>*/
/* */
/*   <div class="block-inner">*/
/*     <div class="block-inner">*/
/*       <h6 class="heading-hr">*/
/*         <i class="icon-user"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Item Barang</small>*/
/*       </h6>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">Kode Item:</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" class="form-control" name="item_kode" value="{{ fform.item_kode }}" />*/
/*         <input type="hidden" name="gen_id" value="{{ fform.item_id }}" />*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">Nama Item:</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" class="form-control" name="item_nama" value="{{ fform.item_nama }}" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">Lokasi Gudang Item:</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="hidden" name="id_gudang" class="itemgudang" value="{{fform.id_gudang}}"/>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">Keterangan Item:</label>*/
/*       <div class="col-sm-10">*/
/*         <textarea class="form-control" name="item_keterangan" value="{{ fform.item_keterangan }}"></textarea>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     <div class="col-sm-6">*/
/*       <div class="block-inner">*/
/*         <div class="block-inner">*/
/*           <h6 class="heading-hr">*/
/*             <i class="icon-user"></i> Harga dan Stok  <small class="display-block">Konfigurasi Harga dan Stok pada Item Barang</small>*/
/*           </h6>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <div class="form-group">*/
/*             <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <label>Harga Jual:</label>*/
/*                 <input type="text" class="form-control" name="item_harga_jual" value="{{ fform.item_harga_jual }}" />*/
/*               </div>*/
/*               <div class="col-sm-6">*/
/*                 <label>Stok Minimal:</label>*/
/*                 <input type="text" class="form-control" name="item_stok_alert" value="{{ fform.item_stok_alert }}" />*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <label>Harga Beli:</label>*/
/*                 <input type="text" class="form-control" name="item_harga_beli" value="{{ fform.item_harga_beli }}" />*/
/*               </div>*/
/* */
/*               <div class="col-sm-6">*/
/*                 <label>Stok Maksimal:</label>*/
/*                 <input type="text" class="form-control" name="item_stok_warning" value="{{ fform.item_stok_warning }}" />*/
/*               </div>              */
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <label>Hpp:</label>*/
/*                 <input type="text" class="form-control" name="item_hpp" value="{{ fform.item_hpp }}" />*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-6">*/
/*       <div class="block-inner">*/
/*         <div class="block-inner">*/
/*           <h6 class="heading-hr">*/
/*             <i class="icon-user"></i> Spesifikasi Item Barang <small class="display-block">Konfigurasi Spesifikasi pada Item Barang</small>*/
/*           </h6>*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*           <div class="form-group">*/
/*             <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <div class="row">*/
/*                   <label class="col-sm-12 control-label">Jenis Item: </label>*/
/*                   <div class="col-sm-12">*/
/*                     <input type="hidden" name="jenis_nama" class="jpasien select-full" value="{{fform.item_tipe_jenis}}"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                   <label class="col-sm-12 control-label">Satuan Item: </label>*/
/*                   <div class="col-sm-12">*/
/*                     <input type="hidden" name="id_satuan" class="itemsatuan" value="{{fform.id_satuan}}"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                   <label class="col-sm-12 control-label">Satuan Item Jual: </label>*/
/*                   <div class="col-sm-12">*/
/*                     <input type="hidden" name="id_satuan_jual" class="itemsatuan" value="{{fform.id_satuan_jual}}"/>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-sm-6">*/
/*                 <div class="row">*/
/*                   <label class="col-sm-12 control-label">Klasifikasi Item: </label>*/
/*                   <div class="col-sm-12">*/
/*                     <input type="hidden" name="id_jenis_klasifikasi" class="itemjenis" value="{{fform.id_jenis_klasifikasi}}"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                   <label class="col-sm-12 control-label">Kemasan Item: </label>*/
/*                   <div class="col-sm-12">*/
/*                     <input type="hidden" name="id_kemasan" class="itemkemasan" value="{{fform.id_kemasan}}"/>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                   <label class="col-sm-12 control-label">Satuan Item Beli: </label>*/
/*                   <div class="col-sm-12">*/
/*                     <input type="hidden" name="id_satuan_beli" class="itemsatuan" value="{{fform.id_satuan_beli}}"/>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* {% endblock %}*/
