<div class="why u-cf text--align-center">
	<h4>{{ g.why.title }}</h4>
	<!-- <button class="button" id="toModal" data-target="#modals"  data-modal="modal.php" data-toggle="modal">adsad</button > -->
	<a id="trigger-por-que-reservar" class="toModal" href="#modals" data-modal="{{ url("helpers/why") }}" data-toggle="modal" data-json = '{"why" : {{ g.why|json_encode }} }'>
		<div class="flex--wrap" data-items="3">
			{% for benefit in g.why.benefits %}
				<div class="flex--item square">
					<img src="{{ url(benefit.img) }}" alt="">
					<span>{{ benefit.name }}</span>
				</div>
			{% endfor %}
		</div>
	</a>
</div>