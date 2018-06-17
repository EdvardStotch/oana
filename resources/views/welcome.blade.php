@extends('layouts.default')

@section('content')
    <?php
//        dd($languages);
    ?>
    <div class="row" id="root">
        <div class="col-sm-3">
            <div>
                <h4>Diploma Type</h4>
                @foreach($diplomaTypes as $name => $id)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{$id}}" filterType='diploma' @click="addFilter">{{$name}}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <h4>Universities</h4>
                @foreach($univers as $name => $id)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{$id}}" filterType='university' @click="addFilter">{{$name}}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <h4>Language Of Study</h4>
                @foreach($languages as $name => $id)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{$id}}" filterType='language' @click="addFilter">{{$name}}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <h4>Method Of Study</h4>
                @foreach($studyMethods as $name => $id)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{$id}}" filterType='method' @click="addFilter">{{$name}}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <h4>Duration</h4>
                @foreach($durations as $name => $id)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{$id}}" filterType='duration' @click="addFilter">{{$name}}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <h4 class="ranger-title">Fee/Year</h4>
                <div class="ranger">

                    <input id="range" filterType='duration'>
                </div>
            </div>
            <div>
                <h4>Starting Date</h4>
                @foreach($dates as $name => $id)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{$id}}" filterType='dates' @click="addFilter">{{$name}}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-9">
            <div id="">
                <div v-for="uni in courses">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="col-sm-2">
                                <img v-bind:src="uni.image.name" alt="" class="img-responsive">
                            </div>
                            <div class="col-sm-10">
                                <h1>@{{ uni.name }}</h1>
                                <div class="col-sm-6">
                                    <h3>
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        @{{ uni.university.name }}
                                    </h3>
                                </div>
                                <div class="col-sm-6">
                                    <h3>
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        @{{ uni.location }}
                                    </h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-2">
                            <h4>Fee/Year</h4>
                            <p>@{{ uni.fee }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h4>Method Of Study</h4>
                            <p>@{{ uni.method.name }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h4>Duration</h4>
                            <p>@{{ uni.duration.name }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h4>Language Of Study</h4>
                            <p>@{{ uni.language.name }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h4>Certificate Required</h4>
                            <p>@{{ uni.certification.name }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h4>Scholarship</h4>
                            <p>@{{ uni.scholarship }}</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        var u = '<?= $courses ?>';
        var filterUrl = "{{ url('filter') }}";
    </script>
@endsection