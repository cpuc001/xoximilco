<div class="block block--hero u-cf">
	{% block booking %}
	{% endblock %}
	<div class="Wallop Wallop--slide u-cf">
		<div class="Wallop-list">
			<div class="Wallop-item Wallop-item--current slider--item" style="background-image:url('{{ url("img/slider/slide01.jpg") }}');"><a style="width:100%;height:100%;display:block;" href="#modalsVideo" data-modal="/helpers/video/{{ t.video.codigo }}" class="toModal" data-toggle="modal" ></a>
			</div>
			{# Sólo par móvil #}
			{% if mobile %}
				{% for s in t.slider.mobile %}
					<div class="Wallop-item slider--item" style="background-image:url('{{ url(s.url) }}');">
					</div>
				{% endfor %}
			{% endif %}
			{# Sólo par desktop #}
			{% if not mobile %}
				{% for s in t.slider.desktop %}
					<div class="Wallop-item slider--item" style="background-image:url('{{ url(s.url) }}');">
					</div>
				{% endfor %}
			{% endif %}
			{# Para ambos #}
			{% for s in t.slider.both %}
				<div class="Wallop-item slider--item" style="background-image:url('{{ url(s.url) }}');">
				</div>
			{% endfor %}
		</div>
		<button class="slider--button slider--button_left Wallop-buttonPrevious"><i class="icon icon-arrow-left"></i></button>
		<button class="slider--button slider--button_right Wallop-buttonNext"><i class="icon icon-arrow-right"></i></button>
		<div class="pagination Wallop-pagination">
			<button class="pagination--item Wallop-dot Wallop-dot--current"></button>
			{# Sólo par móvil #}
			{% if mobile %}
				{% for s in t.slider.mobile %}
					<button class="pagination--item Wallop-dot"></button>
				{% endfor %}
			{% endif %}
			{% if not mobile %}
				{% for s in t.slider.desktop %}
					<button class="pagination--item Wallop-dot"></button>
				{% endfor %}
			{% endif %}
			{% for s in t.slider.both %}
				<button class="pagination--item Wallop-dot"></button>
			{% endfor %}
		</div>
	</div>
</div>