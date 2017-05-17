<script src="{{ url('assets/input/js/require.js') }}"></script>
<script>
    require(["{{ url("assets/output/js/mainHome.js") }}"],function () {
        require(["impromptu","prices","moment"],function (impromptu,prices,moment) {
            {% include 'constant/configCart.volt' %}
            {% include 'constant/configPrices.volt' %}
        });
    });
</script>