<?php

/* extension/payment/authorizenet_aim.twig */
class __TwigTemplate_2ccd339eced54f3195431d17eaecd39436c459d0965c15a77a1d02bf7294e1ba extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-login\">";
        // line 29
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_authorizenet_aim_login\" value=\"";
        // line 31
        echo (isset($context["payment_authorizenet_aim_login"]) ? $context["payment_authorizenet_aim_login"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "\" id=\"input-login\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_login"]) ? $context["error_login"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_login"]) ? $context["error_login"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 38
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_authorizenet_aim_key\" value=\"";
        // line 40
        echo (isset($context["payment_authorizenet_aim_key"]) ? $context["payment_authorizenet_aim_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_key"]) ? $context["error_key"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_key"]) ? $context["error_key"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-hash\">";
        // line 47
        echo (isset($context["entry_hash"]) ? $context["entry_hash"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_authorizenet_aim_hash\" value=\"";
        // line 49
        echo (isset($context["payment_authorizenet_aim_hash"]) ? $context["payment_authorizenet_aim_hash"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_hash"]) ? $context["entry_hash"] : null);
        echo "\" id=\"input-hash\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-server\">";
        // line 53
        echo (isset($context["entry_server"]) ? $context["entry_server"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_authorizenet_aim_server\" id=\"input-server\" class=\"form-control\">
                ";
        // line 56
        if (((isset($context["payment_authorizenet_aim_server"]) ? $context["payment_authorizenet_aim_server"] : null) == "live")) {
            // line 57
            echo "                <option value=\"live\" selected=\"selected\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                ";
        } else {
            // line 59
            echo "                <option value=\"live\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                ";
        }
        // line 61
        echo "                ";
        if (((isset($context["payment_authorizenet_aim_server"]) ? $context["payment_authorizenet_aim_server"] : null) == "test")) {
            // line 62
            echo "                <option value=\"test\" selected=\"selected\">";
            echo (isset($context["text_test"]) ? $context["text_test"] : null);
            echo "</option>
                ";
        } else {
            // line 64
            echo "                <option value=\"test\">";
            echo (isset($context["text_test"]) ? $context["text_test"] : null);
            echo "</option>
                ";
        }
        // line 66
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-mode\">";
        // line 70
        echo (isset($context["entry_mode"]) ? $context["entry_mode"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_authorizenet_aim_mode\" id=\"input-mode\" class=\"form-control\">
                ";
        // line 73
        if (((isset($context["payment_authorizenet_aim_mode"]) ? $context["payment_authorizenet_aim_mode"] : null) == "live")) {
            // line 74
            echo "                <option value=\"live\" selected=\"selected\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                ";
        } else {
            // line 76
            echo "                <option value=\"live\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                ";
        }
        // line 78
        echo "                ";
        if (((isset($context["payment_authorizenet_aim_mode"]) ? $context["payment_authorizenet_aim_mode"] : null) == "test")) {
            // line 79
            echo "                <option value=\"test\" selected=\"selected\">";
            echo (isset($context["text_test"]) ? $context["text_test"] : null);
            echo "</option>
                ";
        } else {
            // line 81
            echo "                <option value=\"test\">";
            echo (isset($context["text_test"]) ? $context["text_test"] : null);
            echo "</option>
                ";
        }
        // line 83
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-method\">";
        // line 87
        echo (isset($context["entry_method"]) ? $context["entry_method"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_authorizenet_aim_method\" id=\"input-method\" class=\"form-control\">
                ";
        // line 90
        if (((isset($context["payment_authorizenet_aim_method"]) ? $context["payment_authorizenet_aim_method"] : null) == "authorization")) {
            // line 91
            echo "                <option value=\"authorization\" selected=\"selected\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
                ";
        } else {
            // line 93
            echo "                <option value=\"authorization\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
                ";
        }
        // line 95
        echo "                ";
        if (((isset($context["payment_authorizenet_aim_method"]) ? $context["payment_authorizenet_aim_method"] : null) == "capture")) {
            // line 96
            echo "                <option value=\"capture\" selected=\"selected\">";
            echo (isset($context["text_capture"]) ? $context["text_capture"] : null);
            echo "</option>
                ";
        } else {
            // line 98
            echo "                <option value=\"capture\">";
            echo (isset($context["text_capture"]) ? $context["text_capture"] : null);
            echo "</option>
                ";
        }
        // line 100
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 104
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_authorizenet_aim_total\" value=\"";
        // line 106
        echo (isset($context["payment_authorizenet_aim_total"]) ? $context["payment_authorizenet_aim_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 110
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_authorizenet_aim_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 114
            echo "                ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_authorizenet_aim_order_status_id"]) ? $context["payment_authorizenet_aim_order_status_id"] : null))) {
                // line 115
                echo "                <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            } else {
                // line 117
                echo "                <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            }
            // line 119
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 124
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_authorizenet_aim_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 127
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 129
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_authorizenet_aim_geo_zone_id"]) ? $context["payment_authorizenet_aim_geo_zone_id"] : null))) {
                // line 130
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 132
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 134
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 139
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_authorizenet_aim_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 142
        if ((isset($context["payment_authorizenet_aim_status"]) ? $context["payment_authorizenet_aim_status"] : null)) {
            // line 143
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 144
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 146
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 147
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 149
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 153
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_authorizenet_aim_sort_order\" value=\"";
        // line 155
        echo (isset($context["payment_authorizenet_aim_sort_order"]) ? $context["payment_authorizenet_aim_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 163
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/payment/authorizenet_aim.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 163,  415 => 155,  410 => 153,  404 => 149,  399 => 147,  394 => 146,  389 => 144,  384 => 143,  382 => 142,  376 => 139,  370 => 135,  364 => 134,  356 => 132,  348 => 130,  345 => 129,  341 => 128,  337 => 127,  331 => 124,  325 => 120,  319 => 119,  311 => 117,  303 => 115,  300 => 114,  296 => 113,  290 => 110,  281 => 106,  274 => 104,  268 => 100,  262 => 98,  256 => 96,  253 => 95,  247 => 93,  241 => 91,  239 => 90,  233 => 87,  227 => 83,  221 => 81,  215 => 79,  212 => 78,  206 => 76,  200 => 74,  198 => 73,  192 => 70,  186 => 66,  180 => 64,  174 => 62,  171 => 61,  165 => 59,  159 => 57,  157 => 56,  151 => 53,  142 => 49,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-login">{{ entry_login }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_authorizenet_aim_login" value="{{ payment_authorizenet_aim_login }}" placeholder="{{ entry_login }}" id="input-login" class="form-control" />*/
/*               {% if error_login %}*/
/*               <div class="text-danger">{{ error_login }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-key">{{ entry_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_authorizenet_aim_key" value="{{ payment_authorizenet_aim_key }}" placeholder="{{ entry_key }}" id="input-key" class="form-control" />*/
/*               {% if error_key %}*/
/*               <div class="text-danger">{{ error_key }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-hash">{{ entry_hash }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_authorizenet_aim_hash" value="{{ payment_authorizenet_aim_hash }}" placeholder="{{ entry_hash }}" id="input-hash" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-server">{{ entry_server }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_authorizenet_aim_server" id="input-server" class="form-control">*/
/*                 {% if payment_authorizenet_aim_server == 'live' %}*/
/*                 <option value="live" selected="selected">{{ text_live }}</option>*/
/*                 {% else %}*/
/*                 <option value="live">{{ text_live }}</option>*/
/*                 {% endif %}*/
/*                 {% if payment_authorizenet_aim_server == 'test' %}*/
/*                 <option value="test" selected="selected">{{ text_test }}</option>*/
/*                 {% else %}*/
/*                 <option value="test">{{ text_test }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-mode">{{ entry_mode }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_authorizenet_aim_mode" id="input-mode" class="form-control">*/
/*                 {% if payment_authorizenet_aim_mode == 'live' %}*/
/*                 <option value="live" selected="selected">{{ text_live }}</option>*/
/*                 {% else %}*/
/*                 <option value="live">{{ text_live }}</option>*/
/*                 {% endif %}*/
/*                 {% if payment_authorizenet_aim_mode == 'test' %}*/
/*                 <option value="test" selected="selected">{{ text_test }}</option>*/
/*                 {% else %}*/
/*                 <option value="test">{{ text_test }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-method">{{ entry_method }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_authorizenet_aim_method" id="input-method" class="form-control">*/
/*                 {% if payment_authorizenet_aim_method == 'authorization' %}*/
/*                 <option value="authorization" selected="selected">{{ text_authorization }}</option>*/
/*                 {% else %}*/
/*                 <option value="authorization">{{ text_authorization }}</option>*/
/*                 {% endif %}*/
/*                 {% if payment_authorizenet_aim_method == 'capture' %}*/
/*                 <option value="capture" selected="selected">{{ text_capture }}</option>*/
/*                 {% else %}*/
/*                 <option value="capture">{{ text_capture }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_authorizenet_aim_total" value="{{ payment_authorizenet_aim_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_authorizenet_aim_order_status_id" id="input-order-status" class="form-control">*/
/*                 {% for order_status in order_statuses %}*/
/*                 {% if order_status.order_status_id == payment_authorizenet_aim_order_status_id %}*/
/*                 <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_authorizenet_aim_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == payment_authorizenet_aim_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_authorizenet_aim_status" id="input-status" class="form-control">*/
/*                 {% if payment_authorizenet_aim_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_authorizenet_aim_sort_order" value="{{ payment_authorizenet_aim_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
