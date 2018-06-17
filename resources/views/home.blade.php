<p>&nbsp;</p>
<h3 class="text-center title-color">
    Ajax Live search with Images and Custom HTML in Laravel using Vue.js
</h3>
<p>&nbsp;</p>

<!-- search box container starts  -->
<div class="well">
    <div class="row">
        <div class="col-sm-2">
            <!-- This is a addon added to improve this demo app look and feel -->
            <span class="input-group-addon"
                  style="color: white; background-color: #5b518b; height: 46px">
                    BLOG SEARCH
                </span>
        </div>

        <div class="col-sm-10">
            <input type="text" autocomplete="off" v-model="search" id="search"
                   class="form-control input-lg" placeholder="Enter Blog Title Here" />

            <!-- Vue Search List Start-->
            <ul v-cloak v-if="posts" v-bind:style="{ width : width + 'px' }" class="widget">
                <li v-for="(post,key) in posts" :id="key +1"
                    v-bind:class="[(key + 1 == count) ? activeClass : '', menuItem]"
                >
                    <a v-bind:href="post.url" >
                        <div class="list_item_container" v-bind:title="post.title">
                            <div class="image">
                                <img v-bind:src="post.image" >
                            </div>
                            <div class="label">
                                <h4>@{{ post.title  }}</h4>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- Vue Search List End-->
        </div>
    </div>
</div>
<!-- search box container ends  -->
