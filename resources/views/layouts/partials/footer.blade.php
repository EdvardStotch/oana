<footer class="container-fluid bg-white footer">

</footer>
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/popper-1.12.9.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/jquery.waypoints.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/progressbar.js')}}"></script>--}}
<script>
    $(document).ready(function () {
        var year = (new Date()).getFullYear();
        $('.e-copyright').text('©2017-' + year + ' Studlu Global');
    });
</script>
{{--<script src="http://unpkg.com/vue@2.5.13/dist/vue.js"></script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js"></script>
<script src="{{asset('js/vueSearch.js')}}"></script>
{{--<script src="{{asset('js/rangeslider.min.js')}}"></script>--}}
<script src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>