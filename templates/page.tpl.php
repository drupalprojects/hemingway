<div class="l-container">

  <header role="banner">
    {% if logo %}
      <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">
        <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>
      </a>
    {% endif %}

    {% if site_name or site_slogan %}
      <div class="name-and-slogan">

        {# Use h1 when the content title is empty #}
        {% if title %}
          <strong class="site-name">
            <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>
          </strong>
        {% else %}
          <h1 class="site-name">
            <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>
          </h1>
        {% endif %}

        {% if site_slogan %}
          <div class="site-slogan">{{ site_slogan }}</div>
        {% endif %}
      </div>{# ./name-and-slogan #}
   {% endif %}

    {{ page.header }}
  </header>

  {% if main_menu or secondary_menu %}
    <nav role="navigation">
      {{ main_menu }}
      {{ secondary_menu }}
    </nav>
  {% endif %}

  {{ breadcrumb }}

  {{ messages }}

  {{ page.help }}

  <main role="main">
    <a id="main-content"></a>{# link is in html.html.twig #}

    <div class="l-content">
      {{ page.highlighted }}

      {{ title_prefix }}
      {% if title %}
        <h1>{{ title }}</h1>
      {% endif %}
      {{ title_suffix }}

      {{ tabs }}

      {% if action_links %}
        <nav class="action-links">{{ action_links }}</nav>
      {% endif %}

      {{ page.content }}

      {{ feed_icons }}
    </div>{# /.l-content #}

    {% if page.sidebar_first %}
      <aside class="l-sidebar-first" role="complementary">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class="l-sidebar-second" role="complementary">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role="contentinfo">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.l-container #}
