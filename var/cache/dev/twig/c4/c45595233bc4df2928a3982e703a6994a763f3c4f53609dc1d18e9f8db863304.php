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

/* address_book/index.html.twig */
class __TwigTemplate_8fcae559a07fa11f75a866a55f07d6bd5fa17378737c602c85419957ebe86daf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "address_book/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "address_book/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "address_book/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Add Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"ui very padded text container basic segment\">
    <form class=\"ui form add-contact-form\">
        <div class=\"responseMsg\"></div>
        <h4 class=\"ui dividing header\">
            Add Contact
            <a href=\"#\" style=\"float:right;\">View All</a>
        </h4>
        <div class=\"two fields\">
            <div class=\"field\">
                <label>Firstname</label>
                <input type=\"text\" name=\"firstname\">
            </div>
            <div class=\"field\">
                <label>Lastname</label>
                <input type=\"text\" name=\"lastname\">
            </div>
        </div>
        <div class=\"field\">
            <label>Street</label>
            <input type=\"text\" name=\"street\">
        </div>
        <div class=\"three fields\">
            <div class=\"field\">
                <label>Zip</label>
                <input type=\"text\" name=\"zip\">
            </div>
            <div class=\"field\">
                <label>City</label>
                <input type=\"text\" name=\"city\">
            </div>
            <div class=\"field\">
                <label>Country</label>
                <select class=\"ui dropdown\" name=\"country\">
                    <option value=\"Afganistan\">Afghanistan</option>
                    <option value=\"Albania\">Albania</option>
                    <option value=\"Algeria\">Algeria</option>
                    <option value=\"American Samoa\">American Samoa</option>
                    <option value=\"Andorra\">Andorra</option>
                    <option value=\"Angola\">Angola</option>
                    <option value=\"Anguilla\">Anguilla</option>
                    <option value=\"Antigua & Barbuda\">Antigua & Barbuda</option>
                    <option value=\"Argentina\">Argentina</option>
                    <option value=\"Armenia\">Armenia</option>
                    <option value=\"Aruba\">Aruba</option>
                    <option value=\"Australia\">Australia</option>
                    <option value=\"Austria\">Austria</option>
                    <option value=\"Azerbaijan\">Azerbaijan</option>
                    <option value=\"Bahamas\">Bahamas</option>
                    <option value=\"Bahrain\">Bahrain</option>
                    <option value=\"Bangladesh\">Bangladesh</option>
                    <option value=\"Barbados\">Barbados</option>
                    <option value=\"Belarus\">Belarus</option>
                    <option value=\"Belgium\">Belgium</option>
                    <option value=\"Belize\">Belize</option>
                    <option value=\"Benin\">Benin</option>
                    <option value=\"Bermuda\">Bermuda</option>
                    <option value=\"Bhutan\">Bhutan</option>
                    <option value=\"Bolivia\">Bolivia</option>
                    <option value=\"Bonaire\">Bonaire</option>
                    <option value=\"Bosnia & Herzegovina\">Bosnia & Herzegovina</option>
                    <option value=\"Botswana\">Botswana</option>
                    <option value=\"Brazil\">Brazil</option>
                    <option value=\"British Indian Ocean Ter\">British Indian Ocean Ter</option>
                    <option value=\"Brunei\">Brunei</option>
                    <option value=\"Bulgaria\">Bulgaria</option>
                    <option value=\"Burkina Faso\">Burkina Faso</option>
                    <option value=\"Burundi\">Burundi</option>
                    <option value=\"Cambodia\">Cambodia</option>
                    <option value=\"Cameroon\">Cameroon</option>
                    <option value=\"Canada\">Canada</option>
                    <option value=\"Canary Islands\">Canary Islands</option>
                    <option value=\"Cape Verde\">Cape Verde</option>
                    <option value=\"Cayman Islands\">Cayman Islands</option>
                    <option value=\"Central African Republic\">Central African Republic</option>
                    <option value=\"Chad\">Chad</option>
                    <option value=\"Channel Islands\">Channel Islands</option>
                    <option value=\"Chile\">Chile</option>
                    <option value=\"China\">China</option>
                    <option value=\"Christmas Island\">Christmas Island</option>
                    <option value=\"Cocos Island\">Cocos Island</option>
                    <option value=\"Colombia\">Colombia</option>
                    <option value=\"Comoros\">Comoros</option>
                    <option value=\"Congo\">Congo</option>
                    <option value=\"Cook Islands\">Cook Islands</option>
                    <option value=\"Costa Rica\">Costa Rica</option>
                    <option value=\"Cote DIvoire\">Cote DIvoire</option>
                    <option value=\"Croatia\">Croatia</option>
                    <option value=\"Cuba\">Cuba</option>
                    <option value=\"Curaco\">Curacao</option>
                    <option value=\"Cyprus\">Cyprus</option>
                    <option value=\"Czech Republic\">Czech Republic</option>
                    <option value=\"Denmark\">Denmark</option>
                    <option value=\"Djibouti\">Djibouti</option>
                    <option value=\"Dominica\">Dominica</option>
                    <option value=\"Dominican Republic\">Dominican Republic</option>
                    <option value=\"East Timor\">East Timor</option>
                    <option value=\"Ecuador\">Ecuador</option>
                    <option value=\"Egypt\">Egypt</option>
                    <option value=\"El Salvador\">El Salvador</option>
                    <option value=\"Equatorial Guinea\">Equatorial Guinea</option>
                    <option value=\"Eritrea\">Eritrea</option>
                    <option value=\"Estonia\">Estonia</option>
                    <option value=\"Ethiopia\">Ethiopia</option>
                    <option value=\"Falkland Islands\">Falkland Islands</option>
                    <option value=\"Faroe Islands\">Faroe Islands</option>
                    <option value=\"Fiji\">Fiji</option>
                    <option value=\"Finland\">Finland</option>
                    <option value=\"France\">France</option>
                    <option value=\"French Guiana\">French Guiana</option>
                    <option value=\"French Polynesia\">French Polynesia</option>
                    <option value=\"French Southern Ter\">French Southern Ter</option>
                    <option value=\"Gabon\">Gabon</option>
                    <option value=\"Gambia\">Gambia</option>
                    <option value=\"Georgia\">Georgia</option>
                    <option value=\"Germany\">Germany</option>
                    <option value=\"Ghana\">Ghana</option>
                    <option value=\"Gibraltar\">Gibraltar</option>
                    <option value=\"Great Britain\">Great Britain</option>
                    <option value=\"Greece\">Greece</option>
                    <option value=\"Greenland\">Greenland</option>
                    <option value=\"Grenada\">Grenada</option>
                    <option value=\"Guadeloupe\">Guadeloupe</option>
                    <option value=\"Guam\">Guam</option>
                    <option value=\"Guatemala\">Guatemala</option>
                    <option value=\"Guinea\">Guinea</option>
                    <option value=\"Guyana\">Guyana</option>
                    <option value=\"Haiti\">Haiti</option>
                    <option value=\"Hawaii\">Hawaii</option>
                    <option value=\"Honduras\">Honduras</option>
                    <option value=\"Hong Kong\">Hong Kong</option>
                    <option value=\"Hungary\">Hungary</option>
                    <option value=\"Iceland\">Iceland</option>
                    <option value=\"Indonesia\">Indonesia</option>
                    <option value=\"India\">India</option>
                    <option value=\"Iran\">Iran</option>
                    <option value=\"Iraq\">Iraq</option>
                    <option value=\"Ireland\">Ireland</option>
                    <option value=\"Isle of Man\">Isle of Man</option>
                    <option value=\"Israel\">Israel</option>
                    <option value=\"Italy\">Italy</option>
                    <option value=\"Jamaica\">Jamaica</option>
                    <option value=\"Japan\">Japan</option>
                    <option value=\"Jordan\">Jordan</option>
                    <option value=\"Kazakhstan\">Kazakhstan</option>
                    <option value=\"Kenya\">Kenya</option>
                    <option value=\"Kiribati\">Kiribati</option>
                    <option value=\"Korea North\">Korea North</option>
                    <option value=\"Korea Sout\">Korea South</option>
                    <option value=\"Kuwait\">Kuwait</option>
                    <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
                    <option value=\"Laos\">Laos</option>
                    <option value=\"Latvia\">Latvia</option>
                    <option value=\"Lebanon\">Lebanon</option>
                    <option value=\"Lesotho\">Lesotho</option>
                    <option value=\"Liberia\">Liberia</option>
                    <option value=\"Libya\">Libya</option>
                    <option value=\"Liechtenstein\">Liechtenstein</option>
                    <option value=\"Lithuania\">Lithuania</option>
                    <option value=\"Luxembourg\">Luxembourg</option>
                    <option value=\"Macau\">Macau</option>
                    <option value=\"Macedonia\">Macedonia</option>
                    <option value=\"Madagascar\">Madagascar</option>
                    <option value=\"Malaysia\">Malaysia</option>
                    <option value=\"Malawi\">Malawi</option>
                    <option value=\"Maldives\">Maldives</option>
                    <option value=\"Mali\">Mali</option>
                    <option value=\"Malta\">Malta</option>
                    <option value=\"Marshall Islands\">Marshall Islands</option>
                    <option value=\"Martinique\">Martinique</option>
                    <option value=\"Mauritania\">Mauritania</option>
                    <option value=\"Mauritius\">Mauritius</option>
                    <option value=\"Mayotte\">Mayotte</option>
                    <option value=\"Mexico\">Mexico</option>
                    <option value=\"Midway Islands\">Midway Islands</option>
                    <option value=\"Moldova\">Moldova</option>
                    <option value=\"Monaco\">Monaco</option>
                    <option value=\"Mongolia\">Mongolia</option>
                    <option value=\"Montserrat\">Montserrat</option>
                    <option value=\"Morocco\">Morocco</option>
                    <option value=\"Mozambique\">Mozambique</option>
                    <option value=\"Myanmar\">Myanmar</option>
                    <option value=\"Nambia\">Nambia</option>
                    <option value=\"Nauru\">Nauru</option>
                    <option value=\"Nepal\">Nepal</option>
                    <option value=\"Netherland Antilles\">Netherland Antilles</option>
                    <option value=\"Netherlands\">Netherlands (Holland, Europe)</option>
                    <option value=\"Nevis\">Nevis</option>
                    <option value=\"New Caledonia\">New Caledonia</option>
                    <option value=\"New Zealand\">New Zealand</option>
                    <option value=\"Nicaragua\">Nicaragua</option>
                    <option value=\"Niger\">Niger</option>
                    <option value=\"Nigeria\">Nigeria</option>
                    <option value=\"Niue\">Niue</option>
                    <option value=\"Norfolk Island\">Norfolk Island</option>
                    <option value=\"Norway\">Norway</option>
                    <option value=\"Oman\">Oman</option>
                    <option value=\"Pakistan\">Pakistan</option>
                    <option value=\"Palau Island\">Palau Island</option>
                    <option value=\"Palestine\">Palestine</option>
                    <option value=\"Panama\">Panama</option>
                    <option value=\"Papua New Guinea\">Papua New Guinea</option>
                    <option value=\"Paraguay\">Paraguay</option>
                    <option value=\"Peru\">Peru</option>
                    <option value=\"Phillipines\">Philippines</option>
                    <option value=\"Pitcairn Island\">Pitcairn Island</option>
                    <option value=\"Poland\">Poland</option>
                    <option value=\"Portugal\">Portugal</option>
                    <option value=\"Puerto Rico\">Puerto Rico</option>
                    <option value=\"Qatar\">Qatar</option>
                    <option value=\"Republic of Montenegro\">Republic of Montenegro</option>
                    <option value=\"Republic of Serbia\">Republic of Serbia</option>
                    <option value=\"Reunion\">Reunion</option>
                    <option value=\"Romania\">Romania</option>
                    <option value=\"Russia\">Russia</option>
                    <option value=\"Rwanda\">Rwanda</option>
                    <option value=\"St Barthelemy\">St Barthelemy</option>
                    <option value=\"St Eustatius\">St Eustatius</option>
                    <option value=\"St Helena\">St Helena</option>
                    <option value=\"St Kitts-Nevis\">St Kitts-Nevis</option>
                    <option value=\"St Lucia\">St Lucia</option>
                    <option value=\"St Maarten\">St Maarten</option>
                    <option value=\"St Pierre & Miquelon\">St Pierre & Miquelon</option>
                    <option value=\"St Vincent & Grenadines\">St Vincent & Grenadines</option>
                    <option value=\"Saipan\">Saipan</option>
                    <option value=\"Samoa\">Samoa</option>
                    <option value=\"Samoa American\">Samoa American</option>
                    <option value=\"San Marino\">San Marino</option>
                    <option value=\"Sao Tome & Principe\">Sao Tome & Principe</option>
                    <option value=\"Saudi Arabia\">Saudi Arabia</option>
                    <option value=\"Senegal\">Senegal</option>
                    <option value=\"Seychelles\">Seychelles</option>
                    <option value=\"Sierra Leone\">Sierra Leone</option>
                    <option value=\"Singapore\">Singapore</option>
                    <option value=\"Slovakia\">Slovakia</option>
                    <option value=\"Slovenia\">Slovenia</option>
                    <option value=\"Solomon Islands\">Solomon Islands</option>
                    <option value=\"Somalia\">Somalia</option>
                    <option value=\"South Africa\">South Africa</option>
                    <option value=\"Spain\">Spain</option>
                    <option value=\"Sri Lanka\">Sri Lanka</option>
                    <option value=\"Sudan\">Sudan</option>
                    <option value=\"Suriname\">Suriname</option>
                    <option value=\"Swaziland\">Swaziland</option>
                    <option value=\"Sweden\">Sweden</option>
                    <option value=\"Switzerland\">Switzerland</option>
                    <option value=\"Syria\">Syria</option>
                    <option value=\"Tahiti\">Tahiti</option>
                    <option value=\"Taiwan\">Taiwan</option>
                    <option value=\"Tajikistan\">Tajikistan</option>
                    <option value=\"Tanzania\">Tanzania</option>
                    <option value=\"Thailand\">Thailand</option>
                    <option value=\"Togo\">Togo</option>
                    <option value=\"Tokelau\">Tokelau</option>
                    <option value=\"Tonga\">Tonga</option>
                    <option value=\"Trinidad & Tobago\">Trinidad & Tobago</option>
                    <option value=\"Tunisia\">Tunisia</option>
                    <option value=\"Turkey\">Turkey</option>
                    <option value=\"Turkmenistan\">Turkmenistan</option>
                    <option value=\"Turks & Caicos Is\">Turks & Caicos Is</option>
                    <option value=\"Tuvalu\">Tuvalu</option>
                    <option value=\"Uganda\">Uganda</option>
                    <option value=\"United Kingdom\">United Kingdom</option>
                    <option value=\"Ukraine\">Ukraine</option>
                    <option value=\"United Arab Erimates\">United Arab Emirates</option>
                    <option value=\"United States of America\">United States of America</option>
                    <option value=\"Uraguay\">Uruguay</option>
                    <option value=\"Uzbekistan\">Uzbekistan</option>
                    <option value=\"Vanuatu\">Vanuatu</option>
                    <option value=\"Vatican City State\">Vatican City State</option>
                    <option value=\"Venezuela\">Venezuela</option>
                    <option value=\"Vietnam\">Vietnam</option>
                    <option value=\"Virgin Islands (Brit)\">Virgin Islands (Brit)</option>
                    <option value=\"Virgin Islands (USA)\">Virgin Islands (USA)</option>
                    <option value=\"Wake Island\">Wake Island</option>
                    <option value=\"Wallis & Futana Is\">Wallis & Futana Is</option>
                    <option value=\"Yemen\">Yemen</option>
                    <option value=\"Zaire\">Zaire</option>
                    <option value=\"Zambia\">Zambia</option>
                    <option value=\"Zimbabwe\">Zimbabwe</option>
                    </select>
            </div>
        </div>
        <div class=\"two fields\">
            <div class=\"field\">
                <label>Phone</label>
                <input type=\"text\" name=\"phone\">
            </div>
            <div class=\"field\">
                <label>Email</label>
                <input type=\"text\" name=\"email\">
            </div>
        </div>
        <h5 class=\"ui dividing header\">Birthday</h5>
        <div class=\"three fields\">
            <div class=\"field\">
                <label>Day</label>
                <select class=\"ui dropdown\" name=\"day\">
                    ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 304
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "                </select>
            </div>
            <div class=\"field\">
                <label>Month</label>
                <select class=\"ui dropdown\" name=\"month\">
                    <option value=\"January\">January</option>
                    <option value=\"February\">February</option>
                    <option value=\"March\">March</option>
                    <option value=\"April\">April</option>
                    <option value=\"May\">May</option>
                    <option value=\"June\">June</option>
                    <option value=\"July\">July</option>
                    <option value=\"August\">August</option>
                    <option value=\"September\">September</option>
                    <option value=\"October\">October</option>
                    <option value=\"November\">November</option>
                    <option value=\"December\">December</option>
                </select>
            </div>
            <div class=\"field\">
                <label>Year</label>
                <select class=\"ui dropdown\" name=\"year\">
                    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1900, 2020));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 329
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                </select>
            </div>
        </div>
        <div class=\"field\">
            <button class=\"ui primary fluid  button\" type=\"button\" onclick=\"addContact(this);\">Save</button>
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "address_book/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 331,  430 => 329,  426 => 328,  402 => 306,  391 => 304,  387 => 303,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Contact{% endblock %}

{% block body %}
<div class=\"ui very padded text container basic segment\">
    <form class=\"ui form add-contact-form\">
        <div class=\"responseMsg\"></div>
        <h4 class=\"ui dividing header\">
            Add Contact
            <a href=\"#\" style=\"float:right;\">View All</a>
        </h4>
        <div class=\"two fields\">
            <div class=\"field\">
                <label>Firstname</label>
                <input type=\"text\" name=\"firstname\">
            </div>
            <div class=\"field\">
                <label>Lastname</label>
                <input type=\"text\" name=\"lastname\">
            </div>
        </div>
        <div class=\"field\">
            <label>Street</label>
            <input type=\"text\" name=\"street\">
        </div>
        <div class=\"three fields\">
            <div class=\"field\">
                <label>Zip</label>
                <input type=\"text\" name=\"zip\">
            </div>
            <div class=\"field\">
                <label>City</label>
                <input type=\"text\" name=\"city\">
            </div>
            <div class=\"field\">
                <label>Country</label>
                <select class=\"ui dropdown\" name=\"country\">
                    <option value=\"Afganistan\">Afghanistan</option>
                    <option value=\"Albania\">Albania</option>
                    <option value=\"Algeria\">Algeria</option>
                    <option value=\"American Samoa\">American Samoa</option>
                    <option value=\"Andorra\">Andorra</option>
                    <option value=\"Angola\">Angola</option>
                    <option value=\"Anguilla\">Anguilla</option>
                    <option value=\"Antigua & Barbuda\">Antigua & Barbuda</option>
                    <option value=\"Argentina\">Argentina</option>
                    <option value=\"Armenia\">Armenia</option>
                    <option value=\"Aruba\">Aruba</option>
                    <option value=\"Australia\">Australia</option>
                    <option value=\"Austria\">Austria</option>
                    <option value=\"Azerbaijan\">Azerbaijan</option>
                    <option value=\"Bahamas\">Bahamas</option>
                    <option value=\"Bahrain\">Bahrain</option>
                    <option value=\"Bangladesh\">Bangladesh</option>
                    <option value=\"Barbados\">Barbados</option>
                    <option value=\"Belarus\">Belarus</option>
                    <option value=\"Belgium\">Belgium</option>
                    <option value=\"Belize\">Belize</option>
                    <option value=\"Benin\">Benin</option>
                    <option value=\"Bermuda\">Bermuda</option>
                    <option value=\"Bhutan\">Bhutan</option>
                    <option value=\"Bolivia\">Bolivia</option>
                    <option value=\"Bonaire\">Bonaire</option>
                    <option value=\"Bosnia & Herzegovina\">Bosnia & Herzegovina</option>
                    <option value=\"Botswana\">Botswana</option>
                    <option value=\"Brazil\">Brazil</option>
                    <option value=\"British Indian Ocean Ter\">British Indian Ocean Ter</option>
                    <option value=\"Brunei\">Brunei</option>
                    <option value=\"Bulgaria\">Bulgaria</option>
                    <option value=\"Burkina Faso\">Burkina Faso</option>
                    <option value=\"Burundi\">Burundi</option>
                    <option value=\"Cambodia\">Cambodia</option>
                    <option value=\"Cameroon\">Cameroon</option>
                    <option value=\"Canada\">Canada</option>
                    <option value=\"Canary Islands\">Canary Islands</option>
                    <option value=\"Cape Verde\">Cape Verde</option>
                    <option value=\"Cayman Islands\">Cayman Islands</option>
                    <option value=\"Central African Republic\">Central African Republic</option>
                    <option value=\"Chad\">Chad</option>
                    <option value=\"Channel Islands\">Channel Islands</option>
                    <option value=\"Chile\">Chile</option>
                    <option value=\"China\">China</option>
                    <option value=\"Christmas Island\">Christmas Island</option>
                    <option value=\"Cocos Island\">Cocos Island</option>
                    <option value=\"Colombia\">Colombia</option>
                    <option value=\"Comoros\">Comoros</option>
                    <option value=\"Congo\">Congo</option>
                    <option value=\"Cook Islands\">Cook Islands</option>
                    <option value=\"Costa Rica\">Costa Rica</option>
                    <option value=\"Cote DIvoire\">Cote DIvoire</option>
                    <option value=\"Croatia\">Croatia</option>
                    <option value=\"Cuba\">Cuba</option>
                    <option value=\"Curaco\">Curacao</option>
                    <option value=\"Cyprus\">Cyprus</option>
                    <option value=\"Czech Republic\">Czech Republic</option>
                    <option value=\"Denmark\">Denmark</option>
                    <option value=\"Djibouti\">Djibouti</option>
                    <option value=\"Dominica\">Dominica</option>
                    <option value=\"Dominican Republic\">Dominican Republic</option>
                    <option value=\"East Timor\">East Timor</option>
                    <option value=\"Ecuador\">Ecuador</option>
                    <option value=\"Egypt\">Egypt</option>
                    <option value=\"El Salvador\">El Salvador</option>
                    <option value=\"Equatorial Guinea\">Equatorial Guinea</option>
                    <option value=\"Eritrea\">Eritrea</option>
                    <option value=\"Estonia\">Estonia</option>
                    <option value=\"Ethiopia\">Ethiopia</option>
                    <option value=\"Falkland Islands\">Falkland Islands</option>
                    <option value=\"Faroe Islands\">Faroe Islands</option>
                    <option value=\"Fiji\">Fiji</option>
                    <option value=\"Finland\">Finland</option>
                    <option value=\"France\">France</option>
                    <option value=\"French Guiana\">French Guiana</option>
                    <option value=\"French Polynesia\">French Polynesia</option>
                    <option value=\"French Southern Ter\">French Southern Ter</option>
                    <option value=\"Gabon\">Gabon</option>
                    <option value=\"Gambia\">Gambia</option>
                    <option value=\"Georgia\">Georgia</option>
                    <option value=\"Germany\">Germany</option>
                    <option value=\"Ghana\">Ghana</option>
                    <option value=\"Gibraltar\">Gibraltar</option>
                    <option value=\"Great Britain\">Great Britain</option>
                    <option value=\"Greece\">Greece</option>
                    <option value=\"Greenland\">Greenland</option>
                    <option value=\"Grenada\">Grenada</option>
                    <option value=\"Guadeloupe\">Guadeloupe</option>
                    <option value=\"Guam\">Guam</option>
                    <option value=\"Guatemala\">Guatemala</option>
                    <option value=\"Guinea\">Guinea</option>
                    <option value=\"Guyana\">Guyana</option>
                    <option value=\"Haiti\">Haiti</option>
                    <option value=\"Hawaii\">Hawaii</option>
                    <option value=\"Honduras\">Honduras</option>
                    <option value=\"Hong Kong\">Hong Kong</option>
                    <option value=\"Hungary\">Hungary</option>
                    <option value=\"Iceland\">Iceland</option>
                    <option value=\"Indonesia\">Indonesia</option>
                    <option value=\"India\">India</option>
                    <option value=\"Iran\">Iran</option>
                    <option value=\"Iraq\">Iraq</option>
                    <option value=\"Ireland\">Ireland</option>
                    <option value=\"Isle of Man\">Isle of Man</option>
                    <option value=\"Israel\">Israel</option>
                    <option value=\"Italy\">Italy</option>
                    <option value=\"Jamaica\">Jamaica</option>
                    <option value=\"Japan\">Japan</option>
                    <option value=\"Jordan\">Jordan</option>
                    <option value=\"Kazakhstan\">Kazakhstan</option>
                    <option value=\"Kenya\">Kenya</option>
                    <option value=\"Kiribati\">Kiribati</option>
                    <option value=\"Korea North\">Korea North</option>
                    <option value=\"Korea Sout\">Korea South</option>
                    <option value=\"Kuwait\">Kuwait</option>
                    <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
                    <option value=\"Laos\">Laos</option>
                    <option value=\"Latvia\">Latvia</option>
                    <option value=\"Lebanon\">Lebanon</option>
                    <option value=\"Lesotho\">Lesotho</option>
                    <option value=\"Liberia\">Liberia</option>
                    <option value=\"Libya\">Libya</option>
                    <option value=\"Liechtenstein\">Liechtenstein</option>
                    <option value=\"Lithuania\">Lithuania</option>
                    <option value=\"Luxembourg\">Luxembourg</option>
                    <option value=\"Macau\">Macau</option>
                    <option value=\"Macedonia\">Macedonia</option>
                    <option value=\"Madagascar\">Madagascar</option>
                    <option value=\"Malaysia\">Malaysia</option>
                    <option value=\"Malawi\">Malawi</option>
                    <option value=\"Maldives\">Maldives</option>
                    <option value=\"Mali\">Mali</option>
                    <option value=\"Malta\">Malta</option>
                    <option value=\"Marshall Islands\">Marshall Islands</option>
                    <option value=\"Martinique\">Martinique</option>
                    <option value=\"Mauritania\">Mauritania</option>
                    <option value=\"Mauritius\">Mauritius</option>
                    <option value=\"Mayotte\">Mayotte</option>
                    <option value=\"Mexico\">Mexico</option>
                    <option value=\"Midway Islands\">Midway Islands</option>
                    <option value=\"Moldova\">Moldova</option>
                    <option value=\"Monaco\">Monaco</option>
                    <option value=\"Mongolia\">Mongolia</option>
                    <option value=\"Montserrat\">Montserrat</option>
                    <option value=\"Morocco\">Morocco</option>
                    <option value=\"Mozambique\">Mozambique</option>
                    <option value=\"Myanmar\">Myanmar</option>
                    <option value=\"Nambia\">Nambia</option>
                    <option value=\"Nauru\">Nauru</option>
                    <option value=\"Nepal\">Nepal</option>
                    <option value=\"Netherland Antilles\">Netherland Antilles</option>
                    <option value=\"Netherlands\">Netherlands (Holland, Europe)</option>
                    <option value=\"Nevis\">Nevis</option>
                    <option value=\"New Caledonia\">New Caledonia</option>
                    <option value=\"New Zealand\">New Zealand</option>
                    <option value=\"Nicaragua\">Nicaragua</option>
                    <option value=\"Niger\">Niger</option>
                    <option value=\"Nigeria\">Nigeria</option>
                    <option value=\"Niue\">Niue</option>
                    <option value=\"Norfolk Island\">Norfolk Island</option>
                    <option value=\"Norway\">Norway</option>
                    <option value=\"Oman\">Oman</option>
                    <option value=\"Pakistan\">Pakistan</option>
                    <option value=\"Palau Island\">Palau Island</option>
                    <option value=\"Palestine\">Palestine</option>
                    <option value=\"Panama\">Panama</option>
                    <option value=\"Papua New Guinea\">Papua New Guinea</option>
                    <option value=\"Paraguay\">Paraguay</option>
                    <option value=\"Peru\">Peru</option>
                    <option value=\"Phillipines\">Philippines</option>
                    <option value=\"Pitcairn Island\">Pitcairn Island</option>
                    <option value=\"Poland\">Poland</option>
                    <option value=\"Portugal\">Portugal</option>
                    <option value=\"Puerto Rico\">Puerto Rico</option>
                    <option value=\"Qatar\">Qatar</option>
                    <option value=\"Republic of Montenegro\">Republic of Montenegro</option>
                    <option value=\"Republic of Serbia\">Republic of Serbia</option>
                    <option value=\"Reunion\">Reunion</option>
                    <option value=\"Romania\">Romania</option>
                    <option value=\"Russia\">Russia</option>
                    <option value=\"Rwanda\">Rwanda</option>
                    <option value=\"St Barthelemy\">St Barthelemy</option>
                    <option value=\"St Eustatius\">St Eustatius</option>
                    <option value=\"St Helena\">St Helena</option>
                    <option value=\"St Kitts-Nevis\">St Kitts-Nevis</option>
                    <option value=\"St Lucia\">St Lucia</option>
                    <option value=\"St Maarten\">St Maarten</option>
                    <option value=\"St Pierre & Miquelon\">St Pierre & Miquelon</option>
                    <option value=\"St Vincent & Grenadines\">St Vincent & Grenadines</option>
                    <option value=\"Saipan\">Saipan</option>
                    <option value=\"Samoa\">Samoa</option>
                    <option value=\"Samoa American\">Samoa American</option>
                    <option value=\"San Marino\">San Marino</option>
                    <option value=\"Sao Tome & Principe\">Sao Tome & Principe</option>
                    <option value=\"Saudi Arabia\">Saudi Arabia</option>
                    <option value=\"Senegal\">Senegal</option>
                    <option value=\"Seychelles\">Seychelles</option>
                    <option value=\"Sierra Leone\">Sierra Leone</option>
                    <option value=\"Singapore\">Singapore</option>
                    <option value=\"Slovakia\">Slovakia</option>
                    <option value=\"Slovenia\">Slovenia</option>
                    <option value=\"Solomon Islands\">Solomon Islands</option>
                    <option value=\"Somalia\">Somalia</option>
                    <option value=\"South Africa\">South Africa</option>
                    <option value=\"Spain\">Spain</option>
                    <option value=\"Sri Lanka\">Sri Lanka</option>
                    <option value=\"Sudan\">Sudan</option>
                    <option value=\"Suriname\">Suriname</option>
                    <option value=\"Swaziland\">Swaziland</option>
                    <option value=\"Sweden\">Sweden</option>
                    <option value=\"Switzerland\">Switzerland</option>
                    <option value=\"Syria\">Syria</option>
                    <option value=\"Tahiti\">Tahiti</option>
                    <option value=\"Taiwan\">Taiwan</option>
                    <option value=\"Tajikistan\">Tajikistan</option>
                    <option value=\"Tanzania\">Tanzania</option>
                    <option value=\"Thailand\">Thailand</option>
                    <option value=\"Togo\">Togo</option>
                    <option value=\"Tokelau\">Tokelau</option>
                    <option value=\"Tonga\">Tonga</option>
                    <option value=\"Trinidad & Tobago\">Trinidad & Tobago</option>
                    <option value=\"Tunisia\">Tunisia</option>
                    <option value=\"Turkey\">Turkey</option>
                    <option value=\"Turkmenistan\">Turkmenistan</option>
                    <option value=\"Turks & Caicos Is\">Turks & Caicos Is</option>
                    <option value=\"Tuvalu\">Tuvalu</option>
                    <option value=\"Uganda\">Uganda</option>
                    <option value=\"United Kingdom\">United Kingdom</option>
                    <option value=\"Ukraine\">Ukraine</option>
                    <option value=\"United Arab Erimates\">United Arab Emirates</option>
                    <option value=\"United States of America\">United States of America</option>
                    <option value=\"Uraguay\">Uruguay</option>
                    <option value=\"Uzbekistan\">Uzbekistan</option>
                    <option value=\"Vanuatu\">Vanuatu</option>
                    <option value=\"Vatican City State\">Vatican City State</option>
                    <option value=\"Venezuela\">Venezuela</option>
                    <option value=\"Vietnam\">Vietnam</option>
                    <option value=\"Virgin Islands (Brit)\">Virgin Islands (Brit)</option>
                    <option value=\"Virgin Islands (USA)\">Virgin Islands (USA)</option>
                    <option value=\"Wake Island\">Wake Island</option>
                    <option value=\"Wallis & Futana Is\">Wallis & Futana Is</option>
                    <option value=\"Yemen\">Yemen</option>
                    <option value=\"Zaire\">Zaire</option>
                    <option value=\"Zambia\">Zambia</option>
                    <option value=\"Zimbabwe\">Zimbabwe</option>
                    </select>
            </div>
        </div>
        <div class=\"two fields\">
            <div class=\"field\">
                <label>Phone</label>
                <input type=\"text\" name=\"phone\">
            </div>
            <div class=\"field\">
                <label>Email</label>
                <input type=\"text\" name=\"email\">
            </div>
        </div>
        <h5 class=\"ui dividing header\">Birthday</h5>
        <div class=\"three fields\">
            <div class=\"field\">
                <label>Day</label>
                <select class=\"ui dropdown\" name=\"day\">
                    {% for i in 1..31 %}
                        <option value=\"{{ i }}\">{{ i }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"field\">
                <label>Month</label>
                <select class=\"ui dropdown\" name=\"month\">
                    <option value=\"January\">January</option>
                    <option value=\"February\">February</option>
                    <option value=\"March\">March</option>
                    <option value=\"April\">April</option>
                    <option value=\"May\">May</option>
                    <option value=\"June\">June</option>
                    <option value=\"July\">July</option>
                    <option value=\"August\">August</option>
                    <option value=\"September\">September</option>
                    <option value=\"October\">October</option>
                    <option value=\"November\">November</option>
                    <option value=\"December\">December</option>
                </select>
            </div>
            <div class=\"field\">
                <label>Year</label>
                <select class=\"ui dropdown\" name=\"year\">
                    {% for i in 1900..2020 %}
                        <option value=\"{{ i }}\">{{ i }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"field\">
            <button class=\"ui primary fluid  button\" type=\"button\" onclick=\"addContact(this);\">Save</button>
        </div>
    </form>
</div>
{% endblock %}
", "address_book/index.html.twig", "C:\\xampp\\htdocs\\address-book\\templates\\address_book\\index.html.twig");
    }
}
