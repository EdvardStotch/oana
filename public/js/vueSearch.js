var diploma = {value:[], name:'diploma_type_id'};
var language = {value:[], name:'language_id'};
var method = {value:[], name:'study_method_id'};
var duration = {value:[], name:'duration_id'};
var startingDate = {value:[], name:'starting_date_id'};
var universities = {value:[], name:'university_id'};
var fee = {value:{
    min: '',
    max: ''
}, name:'fee'};
var app = new Vue({
    el: '#root',
    data: {
        courses : $.parseJSON(u),
        diploma: diploma,
        language: language,
        method: method,
        duration: duration,
        startingDate: startingDate,
        universities: universities,
        fee: fee,
        filter: [diploma, language, method, duration, startingDate, universities, fee]

    },
    mounted: function(){
        console.log(this.courses);
    },
    methods: {
        addFilter: function(event) {
            self = this;
            var ty = $(event.target).attr('filterType');
            var checked = $(event.target).is(':checked');

            if (ty == 'diploma') {
                if (checked){
                    this.diploma.value.push($(event.target).val());
                }
                else {
                    var index = this.diploma.value.indexOf($(event.target).val());
                    if (index > -1) {
                        this.diploma.value.splice(index, 1);
                    }
                }
            }
            else if (ty == 'university'){
                if (checked){
                    this.universities.value.push($(event.target).val());
                }
                else {
                    var index = this.universities.value.indexOf($(event.target).val());
                    if (index > -1) {
                        this.universities.value.splice(index, 1);
                    }
                }
            }
            else if (ty == 'language'){
                if (checked){
                    this.language.value.push($(event.target).val());
                }
                else {
                    var index = this.language.value.indexOf($(event.target).val());
                    if (index > -1) {
                        this.language.value.splice(index, 1);
                    }
                }
            }
            else if (ty == 'method'){
                if (checked){
                    this.method.value.push($(event.target).val());
                }
                else {
                    var index = this.method.value.indexOf($(event.target).val());
                    if (index > -1) {
                        this.method.value.splice(index, 1);
                    }
                }
            }
            else if (ty == 'duration'){
                if (checked){
                    this.duration.value.push($(event.target).val());
                }
                else {
                    var index = this.duration.value.indexOf($(event.target).val());
                    if (index > -1) {
                        this.duration.value.splice(index, 1);
                    }
                }
            }
            else if (ty == 'dates'){
                if (checked){
                    this.startingDate.value.push($(event.target).val());
                }
                else {
                    var index = this.startingDate.value.indexOf($(event.target).val());
                    if (index > -1) {
                        this.startingDate.value.splice(index, 1);
                    }
                }
            }
            this.getData();

        },
        addRange: function (from, to) {
            app.fee.value.min = from;
            app.fee.value.max = to;
            this.getData();
        },
        getData: function () {
            axios.post(filterUrl,{
                data : self.filter
            })
                .then(function (response) {
                    app.courses = response.data;
                    console.log(this.courses);

                })
                .catch(function (error) {
//                            console.log(error);
                });
        }
    }
});
