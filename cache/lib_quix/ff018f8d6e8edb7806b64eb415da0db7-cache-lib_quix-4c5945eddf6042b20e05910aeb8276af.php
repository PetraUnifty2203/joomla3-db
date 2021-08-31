<?php die("Access Denied"); ?>#x#{% if animation != 'none' %}

    {% if animation is not empty %}
        {% set animation = "cls:" ~ animation ~ ";" %}
    {% endif %}

    {# repeat #}
    {% if animationRepeat %}
        {% set animation = animation ~ "repeat:ture;" %}
    {% endif %}

    {# delay #}
    {% if animationDelay %}
        {% set animation = animation ~ "delay:" ~ animationDelay %}
    {% endif %}
{% endif %}

{% set parallax = '' %}
{% if background and background.state.normal.properties.parallax_method == "js" %}
  {% set parallaxInfo = "" %}
    {% if background.state.normal.properties.js_parallax_y %}
      {% set parallaxInfo = parallaxInfo ~ 'bgy:' ~  background.state.normal.properties.js_parallax_y ~ ';' %}
    {% endif %}
    {% if background.state.normal.properties.js_parallax_x %}
      {% set parallaxInfo = parallaxInfo ~ 'bgx:' ~  background.state.normal.properties.js_parallax_x ~ ';' %}
    {% endif %}
    {% set parallax = ' qx-parallax="' ~ parallaxInfo ~ '"' %}
{% endif %}


<div class="qx-element-wrap">
<{{ tagname|default('div') }} 
  {% if id is defined and id %} id="{{ id }}" {% endif %} 
  {% if classes is defined and classes %} class="{{ classes }}" {% endif %} 
  {% if animation is not empty and animation != "none" %} qx-scrollspy="{{ animation }}" {% endif %}
  {{ parallax }}
>
  {% block element %}

  {% endblock %}

</{{ tagname|default('div') }}>
</div>