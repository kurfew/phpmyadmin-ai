<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sql/query.twig */
class __TwigTemplate_606c6ce2bf493de4da4fcc439d691e09efba0b52f1ac81d669779c698d65a136 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form method=\"post\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/import");
        echo "\" class=\"ajax lock-page\" id=\"sqlqueryform\" name=\"sqlform\"";
        // line 2
        echo ((($context["is_upload"] ?? null)) ? (" enctype=\"multipart/form-data\"") : (""));
        echo ">
  ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"is_js_confirmed\" value=\"0\">
  <input type=\"hidden\" name=\"pos\" value=\"0\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"message_to_show\" value=\"";
echo _gettext("Your SQL query has been executed successfully.");
        // line 7
        echo "\">
  <input type=\"hidden\" name=\"prev_sql_query\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
        echo "\">

  ";
        // line 10
        if (((($context["display_tab"] ?? null) == "full") || (($context["display_tab"] ?? null) == "sql"))) {
            // line 11
            echo "    <a id=\"querybox\"></a>

    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 14
            echo ($context["legend"] ?? null);
            echo "</div>
      <div class=\"card-body\">
        <div id=\"queryfieldscontainer\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"mb-3\">
                <textarea class=\"form-control\" tabindex=\"100\" name=\"sql_query\" id=\"sqlquery\" cols=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["textarea_cols"] ?? null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ($context["textarea_rows"] ?? null), "html", null, true);
            echo "\" data-textarea-auto-select=\"";
            echo ((($context["textarea_auto_select"] ?? null)) ? ("true") : ("false"));
            echo "\" aria-label=\"";
echo _gettext("SQL query");
            echo "\">";
            // line 21
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            // line 22
            echo "</textarea>

                <!-- AI Prompt Box -->
<div class=\"row mt-3\">
  <!-- Query Section -->
  <div class=\"col-md-6\">
    <div class=\"card\">
      <div class=\"card-header\">💡 Generate SQL with AI</div>
      <div class=\"card-body\">
        <textarea id=\"aiPrompt\" class=\"form-control mb-2\" rows=\"3\" placeholder=\"Describe your query in English...\"></textarea>
        <button type=\"button\" id=\"generateQueryBtn\" class=\"btn btn-success\">Generate SQL</button>
      </div>
    </div>
  </div>

  <!-- Token Section -->
  <div class=\"col-md-6\">
    <div class=\"card\">
      <div class=\"card-header\">🔑 Enter Your Token</div>
      <div class=\"card-body\">
        <input type=\"text\" id=\"userToken\" class=\"form-control mb-2\" placeholder=\"Enter your token here\">
        
      </div>
    </div>
  </div>
</div>

<!-- AI Output -->
<div id=\"aiOutput\" class=\"card mt-2 d-none\">
  <div class=\"card-header\">
    Generated SQL
    <div class=\"float-end\">
      <button class=\"btn btn-sm btn-outline-secondary\" id=\"copyQueryBtn\">Copy</button>
      <button class=\"btn btn-sm btn-outline-primary\" id=\"sendQueryBtn\">Send</button>
    </div>
  </div>
  <div class=\"card-body\">
    <pre id=\"generatedQuery\" style=\"font-family: monospace; background:#111; color:#0f0; padding:10px; border-radius:5px;\"></pre>
  </div>
</div>


              </div>
              <div id=\"querymessage\"></div>

              <div class=\"btn-toolbar\" role=\"toolbar\">
                ";
            // line 68
            if ( !twig_test_empty(($context["columns_list"] ?? null))) {
                // line 69
                echo "                  <div class=\"btn-group me-2\" role=\"group\">
                    <input type=\"button\" value=\"SELECT *\" id=\"selectall\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"SELECT\" id=\"select\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"INSERT\" id=\"insert\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"UPDATE\" id=\"update\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"DELETE\" id=\"delete\" class=\"btn btn-secondary button sqlbutton\">
                  </div>
                ";
            }
            // line 77
            echo "
                <div class=\"btn-group me-2\" role=\"group\">
                  <input type=\"button\" value=\"";
echo _gettext("Clear");
            // line 79
            echo "\" id=\"clear\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            // line 80
            if (($context["codemirror_enable"] ?? null)) {
                // line 81
                echo "                    <input type=\"button\" value=\"";
echo _gettext("Format");
                echo "\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            }
            // line 83
            echo "                </div>

                <input type=\"button\" value=\"";
echo _gettext("Get auto-saved query");
            // line 85
            echo "\" id=\"saved\" class=\"btn btn-secondary button sqlbutton\">
              </div>

              <div class=\"my-3\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"parameterized\" id=\"parameterized\">
                  <label class=\"form-check-label\" for=\"parameterized\">
                    ";
// l10n: Bind parameters in the SQL query using :parameterName format
echo _gettext("Bind parameters");
            // line 93
            echo "                    ";
            echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-40");
            echo "
                  </label>
                </div>
              </div>
              <div class=\"mb-3\" id=\"parametersDiv\"></div>
            </div>

            ";
            // line 100
            if ( !twig_test_empty(($context["columns_list"] ?? null))) {
                // line 101
                echo "              <div class=\"col-xl-2 col-lg-3\">
                <div class=\"mb-3\">
                  <label class=\"visually-hidden\" for=\"fieldsSelect\">";
echo _gettext("Columns");
                // line 103
                echo "</label>
                  <select class=\"form-select resize-vertical\" id=\"fieldsSelect\" name=\"dummy\" size=\"";
                // line 104
                echo twig_escape_filter($this->env, ($context["textarea_rows"] ?? null), "html", null, true);
                echo "\" ondblclick=\"Functions.insertValueQuery()\" multiple>
                    ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns_list"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 106
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Util::backquote((($__internal_compile_0 = $context["field"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Field"] ?? null) : null)), "html", null, true);
                    echo "\"";
                    // line 107
                    (((( !(null === (($__internal_compile_1 = $context["field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Field"] ?? null) : null)) &&  !(null === (($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Comment"] ?? null) : null))) && (twig_length_filter($this->env, (($__internal_compile_3 = $context["field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Field"] ?? null) : null)) > 0))) ? (print (twig_escape_filter($this->env, ((" title=\"" . (($__internal_compile_4 = $context["field"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Comment"] ?? null) : null)) . "\""), "html", null, true))) : (print ("")));
                    echo ">
                        ";
                    // line 108
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Field"] ?? null) : null), "html", null, true);
                    echo "
                      </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                  </select>
                </div>

                <input type=\"button\" class=\"btn btn-secondary button\" id=\"insertBtn\" name=\"insert\" value=\"";
                // line 115
                if (PhpMyAdmin\Util::showIcons("ActionLinksMode")) {
                    echo "<<";
                    echo "\" title=\"";
                }
echo _gettext("Insert");
                // line 116
                echo "\">
              </div>
            ";
            }
            // line 119
            echo "          </div>
        </div>

        ";
            // line 122
            if (($context["has_bookmark"] ?? null)) {
                // line 123
                echo "          <div class=\"row row-cols-lg-auto g-3 align-items-center\">
            <div class=\"col-6\">
              <label class=\"form-label\" for=\"bkm_label\">";
echo _gettext("Bookmark this SQL query:");
                // line 125
                echo "</label>
            </div>
            <div class=\"col-6\">
              <input class=\"form-control\" type=\"text\" name=\"bkm_label\" id=\"bkm_label\" tabindex=\"110\" value=\"\">
            </div>

            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_all_users\" tabindex=\"111\" id=\"id_bkm_all_users\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_all_users\">";
echo _gettext("Let every user access this bookmark");
                // line 134
                echo "</label>
              </div>
            </div>

            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_replace\" tabindex=\"112\" id=\"id_bkm_replace\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_replace\">";
echo _gettext("Replace existing bookmark of same name");
                // line 141
                echo "</label>
              </div>
            </div>
          </div>
        ";
            }
            // line 146
            echo "      </div>
      <div class=\"card-footer\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <div class=\"input-group me-2\">
              <span class=\"input-group-text\">";
echo _gettext("Delimiter");
            // line 151
            echo "</span>
              <label class=\"visually-hidden\" for=\"id_sql_delimiter\">";
echo _gettext("Delimiter");
            // line 152
            echo "</label>
              <input class=\"form-control\" type=\"text\" name=\"sql_delimiter\" tabindex=\"131\" size=\"3\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, ($context["delimiter"] ?? null), "html", null, true);
            echo "\" id=\"id_sql_delimiter\">
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"show_query\" value=\"1\" id=\"checkbox_show_query\" tabindex=\"132\">
              <label class=\"form-check-label\" for=\"checkbox_show_query\">";
echo _gettext("Show this query here again");
            // line 160
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"retain_query_box\" value=\"1\" id=\"retain_query_box\" tabindex=\"133\"";
            // line 167
            echo ((($context["retain_query_box"] ?? null)) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"retain_query_box\">";
echo _gettext("Retain query box");
            // line 168
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"rollback_query\" value=\"1\" id=\"rollback_query\" tabindex=\"134\">
              <label class=\"form-check-label\" for=\"rollback_query\">";
echo _gettext("Rollback when finished");
            // line 175
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check\">
              <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
            // line 182
            echo ((($context["is_foreign_key_check"] ?? null)) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"fk_checks\">";
echo _gettext("Enable foreign key checks");
            // line 183
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <input class=\"btn btn-primary ms-1\" type=\"submit\" id=\"button_submit_query\" name=\"SQL\" tabindex=\"200\" value=\"";
echo _gettext("Go");
            // line 188
            echo "\">
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 194
        echo "
  ";
        // line 195
        if (((($context["display_tab"] ?? null) == "full") &&  !twig_test_empty(($context["bookmarks"] ?? null)))) {
            // line 196
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
echo _gettext("Bookmarked SQL query");
            // line 197
            echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label class=\"form-label\" for=\"id_bookmark\">";
echo _gettext("Bookmark:");
            // line 201
            echo "</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"id_bookmark\" id=\"id_bookmark\">
              <option value=\"\">&nbsp;</option>
              ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bookmarks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 207
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "id", [], "any", false, false, false, 207), "html", null, true);
                echo "\" data-varcount=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "variable_count", [], "any", false, false, false, 207), "html", null, true);
                echo "\">
                  ";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "label", [], "any", false, false, false, 208), "html", null, true);
                echo "
                  ";
                // line 209
                if (twig_get_attribute($this->env, $this->source, $context["bookmark"], "is_shared", [], "any", false, false, false, 209)) {
                    // line 210
                    echo "                    (";
echo _gettext("shared");
                    echo ")
                  ";
                }
                // line 212
                echo "                </option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "            </select>
          </div>

          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"0\" id=\"radio_bookmark_exe\" checked>
            <label class=\"form-check-label\" for=\"radio_bookmark_exe\">";
echo _gettext("Submit");
            // line 219
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"1\" id=\"radio_bookmark_view\">
            <label class=\"form-check-label\" for=\"radio_bookmark_view\">";
echo _gettext("View only");
            // line 223
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"2\" id=\"radio_bookmark_del\">
            <label class=\"form-check-label\" for=\"radio_bookmark_del\">";
echo _gettext("Delete");
            // line 227
            echo "</label>
          </div>
        </div>

        <div class=\"hide\">
          ";
echo _gettext("Variables");
            // line 233
            echo "          ";
            echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faqbookmark");
            echo "
          <div class=\"row row-cols-auto\" id=\"bookmarkVariables\"></div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-secondary\" type=\"submit\" name=\"SQL\" id=\"button_submit_bookmark\" value=\"";
echo _gettext("Go");
            // line 239
            echo "\">
      </div>
    </div>
  ";
        }
        // line 243
        echo "
  ";
        // line 244
        if (($context["can_convert_kanji"] ?? null)) {
            // line 245
            echo "    <div class=\"card mb-3\">
      <div class=\"card-body\">
        ";
            // line 247
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "sql/query.twig", 247)->display($context);
            // line 248
            echo "      </div>
    </div>
  ";
        }
        // line 251
        echo "

<script src=\"js/src/ai-sql.js\"></script>


</form>

<div id=\"sqlqueryresultsouter\"></div>

<div class=\"modal fade\" id=\"simulateDmlModal\" tabindex=\"-1\" aria-labelledby=\"simulateDmlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"simulateDmlModalLabel\">";
echo _gettext("Simulate query");
        // line 264
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 265
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 270
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sql/query.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 270,  501 => 265,  497 => 264,  481 => 251,  476 => 248,  474 => 247,  470 => 245,  468 => 244,  465 => 243,  459 => 239,  448 => 233,  440 => 227,  433 => 223,  426 => 219,  418 => 214,  411 => 212,  405 => 210,  403 => 209,  399 => 208,  392 => 207,  388 => 206,  381 => 201,  374 => 197,  370 => 196,  368 => 195,  365 => 194,  357 => 188,  349 => 183,  344 => 182,  335 => 175,  325 => 168,  320 => 167,  312 => 160,  301 => 153,  298 => 152,  294 => 151,  286 => 146,  279 => 141,  269 => 134,  257 => 125,  252 => 123,  250 => 122,  245 => 119,  240 => 116,  234 => 115,  229 => 111,  220 => 108,  216 => 107,  212 => 106,  208 => 105,  204 => 104,  201 => 103,  196 => 101,  194 => 100,  183 => 93,  172 => 85,  167 => 83,  161 => 81,  159 => 80,  156 => 79,  151 => 77,  141 => 69,  139 => 68,  91 => 22,  89 => 21,  80 => 20,  71 => 14,  66 => 11,  64 => 10,  59 => 8,  56 => 7,  51 => 6,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/query.twig", "C:\\xampp\\phpMyAdmin\\templates\\sql\\query.twig");
    }
}
